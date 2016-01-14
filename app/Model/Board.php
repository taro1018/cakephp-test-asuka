<?php

/**

  public $name = 'Board';
  public $useDbConfig = 'test'
  public $useTable = "mytable";
  public $displayField = "content";
  public $order = array('Board.name'=>'ASC','Board.title'=>'DESC');
  public $queryData;

  public function beforeFind($queryData){
  $this->queryData = $queryData;
  return $queryData;
  }
 * 
  public $delname = 'tuyano';
  public function afterFind($results,$primary)
  {
  for($i = count($results) - 1;$i >= 0;$i--)
  {
  if($results[$i]['Board']['name'] == $this->delname)
  {
  array_splice($results,$i,1,null);
  }
  }
  return $results;
  }
 */
class Board extends AppModel {

	public $name = 'Board';
	public $useDbConfig = 'test';
	public $belongsTo = array(
		'Personal' => array(
			'className' => 'Personal',
			'conditions' => '',
			'order' => '',
			'dependent' => false,
			'foreignKey' => 'personal_id'
		)
	);
	public $validate = array(
		'title' => array(
			'rule' => 'notBlank',
			'message' => 'タイトルは必ず入力してください。'
		),
		'content' => array(
			'rule' => 'notBlank',
			'message' => '内容は必ず入力してください。'
		)
	);


}
?>