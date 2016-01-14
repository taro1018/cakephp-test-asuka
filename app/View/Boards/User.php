<?php

class User extends AppModel {

	public $name = 'User';
	public $useDbConfig = 'test';

	public function beforeSave()
	{
		$this->data['User']['password'] = AuthComponent::password($this->data['User']['password']);
		return true;
	}

}

?>