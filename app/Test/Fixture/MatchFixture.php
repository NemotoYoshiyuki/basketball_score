<?php
/**
 * MatchFixture
 *
 */
class MatchFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'game_day' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'result_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'away_team_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'get_score' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'loss_score' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'created' => '2016-01-20 12:19:50',
			'modified' => '2016-01-20 12:19:50',
			'game_day' => '2016-01-20 12:19:50',
			'result_id' => 1,
			'away_team_id' => 1,
			'get_score' => 1,
			'loss_score' => 1
		),
	);

}
