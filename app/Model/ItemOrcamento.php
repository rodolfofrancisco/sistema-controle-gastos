<?php
App::uses('AppModel', 'Model');
/**
 * ItemOrcamento Model
 *
 * @property Categoria $Categoria
 * @property Orcamento $Orcamento
 */
class ItemOrcamento extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'categoria_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'orcamento_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Categoria' => array(
			'className' => 'Categoria',
			'foreignKey' => 'categoria_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Orcamento' => array(
			'className' => 'Orcamento',
			'foreignKey' => 'orcamento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
