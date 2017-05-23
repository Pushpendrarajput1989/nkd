<?php
App::uses('AppModel', 'Model');
class Slide extends AppModel {
	public $validate = array(
		'slide_title' => array(
			'required' => array(
				'rule' => array('notempty'),
				'message' => 'Please enter the slide title'				
			)
		)
	);
}
