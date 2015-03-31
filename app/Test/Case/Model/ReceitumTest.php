<?php
App::uses('Receitum', 'Model');

/**
 * Receitum Test Case
 *
 */
class ReceitumTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Receitum = ClassRegistry::init('Receitum');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Receitum);

		parent::tearDown();
	}

}
