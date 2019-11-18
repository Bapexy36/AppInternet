<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Houses Controller
 *
 * @property \App\Model\Table\HousesTable $Houses
 *
 * @method \App\Model\Entity\House[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class HousesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Categories', 'Subcategories']
        ];
        $houses = $this->paginate($this->Houses);

        $this->set(compact('houses'));
    }

    /**
     * View method
     *
     * @param string|null $id House id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $house = $this->Houses->get($id, [
            'contain' => ['Categories', 'Subcategories']
        ]);

        $this->set('house', $house);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $house = $this->Houses->newEntity();
        if ($this->request->is('post')) {
            $house = $this->Houses->patchEntity($house, $this->request->getData());
            if ($this->Houses->save($house)) {
                $this->Flash->success(__('The house has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The house could not be saved. Please, try again.'));
        }
       // Bâtir la liste des catégories  
       $this->loadModel('Categories');
       $categories = $this->Categories->find('list', ['limit' => 200]);

       // Extraire le id de la première catégorie
       $categories = $categories->toArray();
       reset($categories);
       $category_id = key($categories);

       // Bâtir la liste des sous-catégories reliées à cette catégorie
       $subcategories = $this->Houses->Subcategories->find('list', [
           'conditions' => ['Subcategories.category_id' => $category_id],
       ]);
        $this->set(compact('house', 'categories', 'subcategories'));
    }

    /**
     * Edit method
     *
     * @param string|null $id House id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $house = $this->Houses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $house = $this->Houses->patchEntity($house, $this->request->getData());
            if ($this->Houses->save($house)) {
                $this->Flash->success(__('The house has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The house could not be saved. Please, try again.'));
        }
        $categories = $this->Houses->Categories->find('list', ['limit' => 200]);
        $subcategories = $this->Houses->Subcategories->find('list', ['limit' => 200]);
        $this->set(compact('house', 'categories', 'subcategories'));
    }

    /**
     * Delete method
     *
     * @param string|null $id House id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $house = $this->Houses->get($id);
        if ($this->Houses->delete($house)) {
            $this->Flash->success(__('The house has been deleted.'));
        } else {
            $this->Flash->error(__('The house could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
