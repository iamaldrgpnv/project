<?php

namespace application\lib;

ini_set('display_errors', 1); // Вкл вывод ошибок на экран
error_reporting(E_ALL); // Отчет об всех ошибках
// Выводит абсолютно все замечания
class Dev
{
	function debug($str)
	{
		echo '<pre>';
		var_dump($str);
		echo '</pre>';
		exit;
	}
}
