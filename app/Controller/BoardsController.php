<?php

class BoardsController extends AppController {

	public $name = 'Boards';
	public $uses = array('Board', 'Personal');
	public $components = array(
		'Auth' => array(
			'authError' => 'ログインしてください。')
	);

	public function index()
	{
		$data = $this->Board->find('all', array('order' => 'Board.id desc'));
		$this->set('data', $data);
	}

//	public function index()
//	{
//		$this->Personal->bindModel(
//				array('hasMany' => array(
//						"Board" => array(
//							'className' => 'Board',
//							'conditions' => '',
//							'order' => '',
//							'dependent' => false,
//							'limit' => 0,
//							'exclusive' => false,
//							'finderQuery' => '',
//							'foreignKey' => 'personal_id'
//						)
//					))
//		);
//
//		$data = $this->Personal->find('all');
//		$this->set('data', $data);
//		debug($data);
//
//		$data = $this->Board->find('all', array('order' => 'Board.id desc'));
//		$this->set('data', $data);
//	}

	public function add()
	{
		if ($this->request->isPost())
		{
			if ($this->Personal->checkNameAndPass($this->data) == 0)
			{
				$this->Personal->invalidate('name', '名前またはパスワードを確認ください。');
				$this->Personal->invalidate('password', '名前またはパスワードを確認ください。');
			}
			else
			{
				$res = $this->Personal->find('all', array(
					'conditions' => array(
						'Personal.name' => $this->data['Personal']['name'],
						'Personal.password' => $this->data['Personal']['password'],
					)
				));
				$record = $this->data['Board'];
				$record['personal_id'] = $res[0]['Personal']['id'];
				$flg = $this->Board->save($record);
				if ($flg)
				{
					$this->redirect('.');
				}
			}
		}
	}

	public function show($param)
	{
		$data = $this->Board->find('all', array(
			'conditions' => array(
				'Board.id' => $param)
				)
		);
		$this->set('data', $data);
	}

	public function show2($param)
	{
		$data = $this->Personal->find('all', array(
			'conditions' => array(
				'Personal.id' => $param)
				)
		);
		$this->set('data', $data);
	}

	public function edit($param)
	{
		if (!empty($this->data))
		{
			$this->set('data', $this->data);
			if ($this->Personal->checkNameAndPass($this->data) == 0)
			{
				$this->Personal->invalidate('password', 'パスワードを確認ください。');
			}
			else
			{
				$this->Board->save($this->data);
				$this->redirect('.');
			}
		}
		else
		{
			$this->Board->id = $param;
			$res = $this->Board->read();
			$res['Personal']['password'] = null;
			$this->data = $res;
			$this->set('data', $res);
		}
	}

	//-------------------------------------------------------------
	public function addRecord()
	{
		if ($this->request->is('post'))
		{
			$res = $this->Board->save($this->data);
			if ($res)
			{
				$this->redirect('index');
			}
		}
	}

	public function delRecord()
	{
		if (!empty($this->data))
		{
			$this->Board->deleteAll(array('Board.name' =>
				$this->data['Board']['name']));
		}
		$this->redirect('.');
	}

	public function updateRecord()
	{
		if (!empty($this->data))
		{
			$arr1 = array('Board.name' => $this->data['Board']['name']);
			$arr2 = array('Board.title' => "'{$this->data['Board']['title']}'");
			$this->Board->updateAll($arr2, $arr1);
		}
		$this->redirect('.');
	}

	//-------------------------------------------------------------
}

?>
