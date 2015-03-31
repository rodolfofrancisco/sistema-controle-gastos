<?php
App::uses('ItemOrcamento', 'Model');

/**
 * ItemOrcamento Test Case
 *
 */
class ItemOrcamentoTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.item_orcamento',
		'app.categoria',
		'app.despesa',
		'app.receita',
		'app.orcamento'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ItemOrcamento = ClassRegistry::init('ItemOrcamento');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ItemOrcamento);

		parent::tearDown();
	}

}
