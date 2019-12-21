<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AppController;

/**
 * Clothes Controller
 *
 * @property \App\Model\Table\ClothesTable $Clothes
 *
 * @method \App\Model\Entity\Clothe[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ClothesController extends AppController
{
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

    public function initialize() {
        parent::initialize();
        // Use the Bootstrap layout from the plugin.
        // $this->viewBuilder()->setLayout('admin');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $clothes = $this->paginate($this->Clothes);

        $this->set(compact('clothes'));
        $this->set('_serialize', ['clothes']);
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
        $this->set('_serialize', ['clothe']);
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
        $this->set('_serialize', ['clothe']);
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
        $this->set('_serialize', ['clothe']);
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
    public function isAuthorized($user)
    {
        $action = $this->request->getParam('action');
        $param = $this->request->getParam('pass.0');

        
        if($user['id_role'] === 1){
            if (in_array($action, ['display', 'view', 'index', 'changelang','add','edit','delete'])){
                return true;
            }
        }

        
        elseif ($user['id_role'] === 2){
            if (in_array($action, ['display', 'view', 'index', 'changelang','add'])){
                return true;
            }
        }
        
        elseif ($user['id_role'] === 3){
            if (in_array($action, ['display', 'view', 'index', 'changelang'])){
                return true;
            }
        }
        else {
            return false;
        }
    }
}
