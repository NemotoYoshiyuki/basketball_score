<?php
/**
 * HomePlayerFixture
 *
 */
class HomePlayerFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'home_player_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'position_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'height' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'weight' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'number' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'comment' => array('type' => 'string', 'null' => false, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'player_photo' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 64, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
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
			'created' => '2016-01-21 08:29:06',
			'modified' => '2016-01-21 08:29:06',
			'home_player_name' => 'Lorem ipsum dolor sit amet',
			'position_id' => 1,
			'height' => 1,
			'weight' => 1,
			'number' => 1,
			'comment' => 'Lorem ipsum dolor sit amet',
			'player_photo' => 'Lorem ipsum dolor sit amet'
		),
	);

}
