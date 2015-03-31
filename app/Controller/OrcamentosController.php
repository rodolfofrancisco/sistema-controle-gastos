<?php
App::uses('AppController', 'Controller');
/**
 * Orcamentos Controller
 *
 * @property Orcamento $Orcamento
 * @property PaginatorComponent $Paginator
 */
class OrcamentosController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Orcamento->recursive = 0;
		$this->set('orcamentos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Orcamento->exists($id)) {
			throw new NotFoundException(__('Invalid orcamento'));
		}
		$options = array('conditions' => array('Orcamento.' . $this->Orcamento->primaryKey => $id));
		$this->set('orcamento', $this->Orcamento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Orcamento->create();
			if ($this->Orcamento->save($this->request->data)) {
				$this->Session->setFlash(__('The orcamento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orcamento could not be saved. Please, try again.'));
			}
		}
		$users = $this->Orcamento->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Orcamento->exists($id)) {
			throw new NotFoundException(__('Invalid orcamento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Orcamento->save($this->request->data)) {
				$this->Session->setFlash(__('The orcamento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The orcamento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Orcamento.' . $this->Orcamento->primaryKey => $id));
			$this->request->data = $this->Orcamento->find('first', $options);
		}
		$users = $this->Orcamento->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Orcamento->id = $id;
		if (!$this->Orcamento->exists()) {
			throw new NotFoundException(__('Invalid orcamento'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Orcamento->delete()) {
			$this->Session->setFlash(__('The orcamento has been deleted.'));
		} else {
			$this->Session->setFlash(__('The orcamento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
