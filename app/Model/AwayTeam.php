<?php
App::uses('AppModel', 'Model');
/**
 * AwayTeam Model
 *
 * @property Match $Match
 */
class AwayTeam extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'away_team_name';
	public $recursive = 3;

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'away_team_name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
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
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Match' => array(
			'className' => 'Match',
			'foreignKey' => 'away_team_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
