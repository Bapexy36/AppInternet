<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * APropos Controller
 *
 *
 */
class AProposController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function initialize() {
        parent::initialize();
        // Add the 'add' action to the allowed actions list.
        $this->Auth->allow(['index']);
    }

    public function index()
    {
    }
}