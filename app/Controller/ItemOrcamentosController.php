<?php
App::uses('AppController', 'Controller');
/**
 * ItemOrcamentos Controller
 *
 * @property ItemOrcamento $ItemOrcamento
 * @property PaginatorComponent $Paginator
 */
class ItemOrcamentosController extends AppController {

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
		$this->ItemOrcamento->recursive = 0;
		$this->set('itemOrcamentos', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ItemOrcamento->exists($id)) {
			throw new NotFoundException(__('Invalid item orcamento'));
		}
		$options = array('conditions' => array('ItemOrcamento.' . $this->ItemOrcamento->primaryKey => $id));
		$this->set('itemOrcamento', $this->ItemOrcamento->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ItemOrcamento->create();
			if ($this->ItemOrcamento->save($this->request->data)) {
				$this->Session->setFlash(__('The item orcamento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item orcamento could not be saved. Please, try again.'));
			}
		}
		$categorias = $this->ItemOrcamento->Categorium->find('list');
		$orcamentos = $this->ItemOrcamento->Orcamento->find('list');
		$this->set(compact('categorias', 'orcamentos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ItemOrcamento->exists($id)) {
			throw new NotFoundException(__('Invalid item orcamento'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemOrcamento->save($this->request->data)) {
				$this->Session->setFlash(__('The item orcamento has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item orcamento could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ItemOrcamento.' . $this->ItemOrcamento->primaryKey => $id));
			$this->request->data = $this->ItemOrcamento->find('first', $options);
		}
		$categorias = $this->ItemOrcamento->Categorium->find('list');
		$orcamentos = $this->ItemOrcamento->Orcamento->find('list');
		$this->set(compact('categorias', 'orcamentos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ItemOrcamento->id = $id;
		if (!$this->ItemOrcamento->exists()) {
			throw new NotFoundException(__('Invalid item orcamento'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ItemOrcamento->delete()) {
			$this->Session->setFlash(__('The item orcamento has been deleted.'));
		} else {
			$this->Session->setFlash(__('The item orcamento could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
