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
			throw new NotFoundException(__('Item de orçamento inválido'));
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
				$this->Session->setFlash(__('Item de orçamento salvo com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item orcamento could not be saved. Please, try again.'));
			}
		}
		$categorias = $this->ItemOrcamento->Categoria->find('list', array(
        	'fields' => array('Categoria.descricao')));
		$orcamentos = $this->ItemOrcamento->Orcamento->find('list', array(
        	'fields' => array('Orcamento.valor')));
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
			throw new NotFoundException(__('Item de orçamento inválido'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ItemOrcamento->save($this->request->data)) {
				$this->Session->setFlash(__('Item de orçamento salvo com sucesso.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Erro ao salvar o item de orçamento.'));
			}
		} else {
			$options = array('conditions' => array('ItemOrcamento.' . $this->ItemOrcamento->primaryKey => $id));
			$this->request->data = $this->ItemOrcamento->find('first', $options);
		}
		$categorias = $this->ItemOrcamento->Categoria->find('list', array(
        	'fields' => array('Categoria.descricao')));
		$orcamentos = $this->ItemOrcamento->Orcamento->find('list', array(
        	'fields' => array('Orcamento.valor')));
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
			throw new NotFoundException(__('Item de orçamento inválido'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ItemOrcamento->delete()) {
			$this->Session->setFlash(__('Item de orçamento apagado com sucesso.'));
		} else {
			$this->Session->setFlash(__('Erro ao apagar item de orçamento.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
