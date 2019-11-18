<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Clothes Controller
 *
 * @property \App\Model\Table\ClothesTable $Clothes
 *
 * @method \App\Model\Entity\Clothe[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClothesController extends AppController
{
    public function initialize() {
        parent::initialize();
        $this->viewBuilder()->setLayout('monopage');
    }

    public $paginate = [
        'page' => 1,
        'limit' => 25,
        'maxLimit' => 150,
        /*        'fields' => [
          'id', 'name', 'description'
          ],
         */ 'sortWhitelist' => [
            'id', 'name', 'price'
        ]
    ];

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $clothes = $this->paginate($this->Clothes);

        $this->set(compact('clothes'));
    }

    /**
     * View method
     *
     * @param string|null $id Clothe id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $clothe = $this->Clothes->get($id, [
            'contain' => []
        ]);

        $this->set('clothe', $clothe);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $clothe = $this->Clothes->newEntity();
        if ($this->request->is('post')) {
            $clothe = $this->Clothes->patchEntity($clothe, $this->request->getData());
            if ($this->Clothes->save($clothe)) {
                $this->Flash->success(__('The clothe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clothe could not be saved. Please, try again.'));
        }
        $this->set(compact('clothe'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Clothe id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $clothe = $this->Clothes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $clothe = $this->Clothes->patchEntity($clothe, $this->request->getData());
            if ($this->Clothes->save($clothe)) {
                $this->Flash->success(__('The clothe has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The clothe could not be saved. Please, try again.'));
        }
        $this->set(compact('clothe'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Clothe id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $clothe = $this->Clothes->get($id);
        if ($this->Clothes->delete($clothe)) {
            $this->Flash->success(__('The clothe has been deleted.'));
        } else {
            $this->Flash->error(__('The clothe could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
