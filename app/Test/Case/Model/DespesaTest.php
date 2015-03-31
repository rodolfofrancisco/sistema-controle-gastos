<?php
App::uses('Despesa', 'Model');

/**
 * Despesa Test Case
 *
 */
class DespesaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.despesa',
		'app.categoria',
		'app.item_orcamento',
		'app.receita'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Despesa = ClassRegistry::init('Despesa');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Despesa);

		parent::tearDown();
	}

}
