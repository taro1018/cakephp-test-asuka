<?php

class UsersController extends AppController {

	public $name = 'Users';
	public $components = array('Auth');

	public function beforeFilter()
	{
		$this->Auth->allow('add');
		$this->Auth->allow('logout');
		$this->Auth->authError = 'ログインしてください。';
		$this->Auth->loginError = '';
	}

	public function login()
	{
		if ($this->request->isPost())
		{
			if ($this->Auth->login())
			{
				$this->redirect($this->Auth->redirect());
			}
			else
			{
				$this->Session->setFlash('ユーザ名かパスワードが違います。', 'default', array(), 'auth');
			}
		}
	}

	public function logout()
	{
		$this->Auth->logout();
		//return $this->redirect(array('action'=>'index','controller'=>'Boards')); // ★
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