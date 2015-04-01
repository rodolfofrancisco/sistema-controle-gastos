<?php
App::uses('Receita', 'Model');

/**
 * Receita Test Case
 *
 */
class ReceitaTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Receita = ClassRegistry::init('Receita');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Receita);

		parent::tearDown();
	}

}
