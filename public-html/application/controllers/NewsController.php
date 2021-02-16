<?php
namespace application\controllers;
use application\core\Controller;
class NewsController extends Controller {
	public function showAction(){
		echo 'Это новости';
		var_dump($this->route);
	}
}