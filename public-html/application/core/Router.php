<?php

namespace application\core; // положение файла 

class Router
{
	protected $routes = []; // Добавление маршрутов через add()
	protected $params = []; // Добавление параметров через match()

	function __construct()
	{
		$arr = require_once 'application/config/routes.php';
		foreach ($arr as $key => $value) {
			$this->add($key, $value);
		}
	}
	public function add($route, $params) // добавление маршрута
	{
		$route = '#^' . $route .  '$#'; // Создали регулярное ввыражение
		$this->routes[$route] = $params;
	}
	public function match() // проверка маршрута
	{
		$uri = trim($_SERVER['REQUEST_URI'], '/'); // Обрезали первый слэш
		foreach ($this->routes as $route => $params) {
			if (preg_match($route, $uri, $matches)) {
				$this->params = $params;
				return true;
			}
		}
		return false;
	}
	public function run() // запуск роутера
	{
		if ($this->match()) {
			$path = 'application\controllers\\' . ucfirst($this->params['controller']) . 'Controller';
			// $controller = new $path;
			// $action = $this->params['action'] . 'Action';
			// $controller->$action();
			if(class_exists($path)){
				$action = $this->params['action']. 'Action';
				if(method_exists($path, $action)){
					$controller = new $path($this->params);
					$controller->$action();
				} else {
					echo 'Метод не найден';
				}
			} else {
				echo 'Класса не существует';
			} 
			// var_dump($controller);
			// echo '<p>controller: <b>' . $this->params['controller'] . '</b></p>';
			// echo '<p>params: <b>' . $this->params['action'] . '</b></p>';
		} else {
			echo 'Маршрут не найден';
		}
	}
}
 