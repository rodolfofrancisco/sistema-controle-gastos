<?php
App::uses('AppController', 'Controller');
/**
 * Despesas Controller
 *
 * @property Despesa $Despesa
 * @property PaginatorComponent $Paginator
 */
class DespesasController extends AppController {

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
		$this->Despesa->recursive = 0;
		$this->set('despesas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Despesa->exists($id)) {
			throw new NotFoundException(__('Invalid despesa'));
		}
		$options = array('conditions' => array('Despesa.' . $this->Despesa->primaryKey => $id));
		$this->set('despesa', $this->Despesa->find('first', $options));
		$categorias = $this->Despesa->Categoria->find('list', array(
        	'fields' => array('Categoria.descricao')
   		));
		$this->set('categorias', $categorias);
		$receitas = $this->Despesa->Receita->find('list', array(
        	'fields' => array('Receita.descricao')
   		));
		$this->set('receitas', $receitas);
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Despesa->create();
			if ($this->Despesa->save($this->request->data)) {
				$this->Session->setFlash(__('The despesa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The despesa could not be saved. Please, try again.'));
			}
		}
		$categorias = $this->Despesa->Categoria->find('list', array(
        	'fields' => array('Categoria.descricao')
   		));
		$receitas = $this->Despesa->Receita->find('list', array(
        	'fields' => array('Receita.descricao')
   		));
		$this->set(compact('categorias', 'receitas'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Despesa->exists($id)) {
			throw new NotFoundException(__('Invalid despesa'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Despesa->save($this->request->data)) {
				$this->Session->setFlash(__('The despesa has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The despesa could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Despesa.' . $this->Despesa->primaryKey => $id));
			$this->request->data = $this->Despesa->find('first', $options);
		}
		$categorias = $this->Despesa->Categoria->find('list', array(
        	'fields' => array('Categoria.descricao')
   		));
		$receitas = $this->Despesa->Receita->find('list', array(
        	'fields' => array('Receita.descricao')
   		));
		$this->set(compact('categorias', 'receitas'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Despesa->id = $id;
		if (!$this->Despesa->exists()) {
			throw new NotFoundException(__('Invalid despesa'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Despesa->delete()) {
			$this->Session->setFlash(__('The despesa has been deleted.'));
		} else {
			$this->Session->setFlash(__('The despesa could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
