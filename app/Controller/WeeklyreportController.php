<?php
/**
 * Description of WeeklyreportController
 *
 * @author インターンA
 */
class WeeklyreportController extends AppController {

public $name = 'Weeklyreport';
public $uses = null;	// ライブラリの読み込み
public $autoRender = false; // オートレンダーOFF
  
  public function index(){
    $this->name = 'Hello';
    $this->uses = null;
    $this->autoRender = false;
    echo "hello world!";
  }
}
?>
