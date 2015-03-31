<?php
App::uses('AppController', 'Controller');
/**
 * Receitas Controller
 *
 * @property Receita $Receita
 * @property PaginatorComponent $Paginator
 */
class ReceitasController extends AppController {

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
		$this->Receita->recursive = 0;
		$this->set('receitas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Receita->exists($id)) {
			throw new NotFoundException(__('Invalid receita'));
		}
		$options = array('conditions' => array('Receita.' . $this->Receita->primaryKey => $id));
		$this->set('receita', $this->Receita->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Receita->create();
			if ($this->Receita->save($this->request->data)) {
				$this->Session->setFlash(__('The receita has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The receita could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Receita->exists($id)) {
			throw new NotFoundException(__('Invalid receita'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Receita->save($this->request->data)) {
				$this->Session->setFlash(__('The receita has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The receita could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Receita.' . $this->Receita->primaryKey => $id));
			$this->request->data = $this->Receita->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Receita->id = $id;
		if (!$this->Receita->exists()) {
			throw new NotFoundException(__('Invalid receita'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Receita->delete()) {
			$this->Session->setFlash(__('The receita has been deleted.'));
		} else {
			$this->Session->setFlash(__('The receita could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
