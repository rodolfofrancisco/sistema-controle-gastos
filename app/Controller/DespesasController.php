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
			throw new NotFoundException(__('Despesa inválida'));
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
				$this->Session->setFlash(__('Despesa salva com sucesso'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Erro ao salvar despesa'));
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
			throw new NotFoundException(__('Despesa inválida'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Despesa->save($this->request->data)) {
				$this->Session->setFlash(__('Despesa salva com sucesso'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Erro ao salvar despesa'));
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
			throw new NotFoundException(__('Despesa inválida'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Despesa->delete()) {
			$this->Session->setFlash(__('Despesa deletada com sucesso.'));
		} else {
			$this->Session->setFlash(__('Erro ao deletar despesa'));
		}
		return $this->redirect(array('action' => 'index'));
	}

	/**
	 * extrato method
	 *
	 * @throws NotFoundException
	 * @return void
	 */
	public function extrato()
        {          
           $dataInicio=$_GET['ini'];
           $dataFim= $_GET['fim']; 
           
           $a = explode("-", $dataInicio);
           $b = explode("-", $dataFim);
           
           $mesInicio = $a[1];
           $mesFim = $b[1];
           
           if ($dataInicio != NULL && $dataFim != NULL)
           {
               $query = $this->Despesa->query("SELECT MONTH(D.Created) AS Mes, SUM(D.Valor) AS Total
                                               FROM `despesas` AS D 
                                               WHERE MONTH(D.Created) BETWEEN " . $mesInicio . " AND " . $mesFim 
                                              ." GROUP BY MONTH(D.Created)"); 
               $this->set('queries', $query);                
           }
           
          
        }
}
