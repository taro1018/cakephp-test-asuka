<?php

class Personal extends AppModel {

	public $name = 'Personal';
	public $useDbConfig = 'test';
//	public $hasOne = array(
//		"Board" => array(
//			'className' => 'Board',
//			'conditions' => '',
//			'order' => '',
//			'dependent' => false,
//			'foreignKey' => 'personal_id'
//		)
//	);
//	public $hasMany = array(
//		"Board" => array(
//			'className' => 'Board',
//			'conditions' => '',
//			'order' => '',
//			'dependent' => false,
//			'limit' => 0,
//			'exclusive' => false,
//			'finderQuery' => '',
//			'foreignKey' => 'personal_id'
//		)
//	);
	public $validate = array(
		'name' => array(
			'rule' => 'notBlank',
			'message' => '名前は必ず入力してください。'
		),
		'password' => array(
			'rule' => 'notBlank',
			'message' => 'パスワードは必ず入力してください。'
		),
		'comment' => array(),
	);

	public function checkNameAndPass($data)
	{
		if ($data)
		{
			$n = $this->find('count', array(
				'conditions' => array(
					'Personal.name' => $data['Personal']['name'],
					'Personal.password' => $data['Personal']['password']
				)
			));
			return $n > 0 ? true : false;
		}
	}

}

?>