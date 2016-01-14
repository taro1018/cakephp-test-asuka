<?php

class UsersController extends AppController {

	public $name = 'Users';
	public $components = array('Auth');

	public function beforeFilter()
	{
		$this->Auth->allow('add');
		$this->Auth->allow('logout');
	}

	public function login()
	{
		
	}

	public function logout()
	{
		
	}

	public function add()
	{
		if (!empty($this->data))
		{
			if ($this->data)
			{
				$this->User->create();
				$this->User->save($this->data);
				$this->redirect(array('action' => 'login'));
			}
		}
	}

}

?>