<?php
App::uses('TinyMailAppModel', 'TinyMail.Model');
/**
 * Mail Model
 *
 */
class Mail extends TinyMailAppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'alias';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'alias' => array(
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
}
