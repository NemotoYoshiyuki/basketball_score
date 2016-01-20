<?php
App::uses('AwayTeam', 'Model');

/**
 * AwayTeam Test Case
 *
 */
class AwayTeamTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.away_team',
		'app.match'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AwayTeam = ClassRegistry::init('AwayTeam');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AwayTeam);

		parent::tearDown();
	}

}
