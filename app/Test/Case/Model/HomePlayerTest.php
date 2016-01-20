<?php
App::uses('HomePlayer', 'Model');

/**
 * HomePlayer Test Case
 *
 */
class HomePlayerTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.home_player',
		'app.position'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->HomePlayer = ClassRegistry::init('HomePlayer');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->HomePlayer);

		parent::tearDown();
	}

}
