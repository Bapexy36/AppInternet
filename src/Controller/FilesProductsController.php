<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FilesProducts Controller
 *
 * @property \App\Model\Table\FilesProductsTable $FilesProducts
 *
 * @method \App\Model\Entity\FilesProduct[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FilesProductsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Products', 'Files']
        ];
        $filesProducts = $this->paginate($this->FilesProducts);

        $this->set(compact('filesProducts'));
    }

    /**
     * View method
     *
     * @param string|null $id Files Product id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $filesProduct = $this->FilesProducts->get($id, [
            'contain' => ['Products', 'Files']
        ]);

        $this->set('filesProduct', $filesProduct);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $filesProduct = $this->FilesProducts->newEntity();
        if ($this->request->is('post')) {
            $filesProduct = $this->FilesProducts->patchEntity($filesProduct, $this->request->getData());
            if ($this->FilesProducts->save($filesProduct)) {
                $this->Flash->success(__('The files product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The files product could not be saved. Please, try again.'));
        }
        $products = $this->FilesProducts->Products->find('list', ['limit' => 200]);
        $files = $this->FilesProducts->Files->find('list', ['limit' => 200]);
        $this->set(compact('filesProduct', 'products', 'files'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Files Product id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $filesProduct = $this->FilesProducts->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $filesProduct = $this->FilesProducts->patchEntity($filesProduct, $this->request->getData());
            if ($this->FilesProducts->save($filesProduct)) {
                $this->Flash->success(__('The files product has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The files product could not be saved. Please, try again.'));
        }
        $products = $this->FilesProducts->Products->find('list', ['limit' => 200]);
        $files = $this->FilesProducts->Files->find('list', ['limit' => 200]);
        $this->set(compact('filesProduct', 'products', 'files'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Files Product id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $filesProduct = $this->FilesProducts->get($id);
        if ($this->FilesProducts->delete($filesProduct)) {
            $this->Flash->success(__('The files product has been deleted.'));
        } else {
            $this->Flash->error(__('The files product could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
