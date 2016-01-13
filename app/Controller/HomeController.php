<?php

/**
 * Description of WeeklyreportController
 *
 * @author インターンA
 */
class HomeController extends AppController {

	public $name = 'Home';
	public $uses = 'user';
	public $autoRender = true;
	public $layout = 'wrapper';

	public function index()
	{
		
		echo "hello world!";
	}

}

?>
