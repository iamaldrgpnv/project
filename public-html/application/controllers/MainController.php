<?php
namespace application\controllers;
use application\core\Controller;

class MainController extends Controller {
	public function indexAction(){
		echo 'Это главная страница';
		var_dump($this->route);
	}
}