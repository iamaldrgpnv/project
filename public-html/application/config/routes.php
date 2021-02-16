<?php

namespace application\config;

return [
	'main/index' => [
		'controller' => 'main',
		'action' => 'index'
	],
	'' => [
		'controller' => 'main',
		'action' => 'index'
	],
	'account/login' => [
		'controller' => 'account',
		'action' => 'login',
	],
	'account/register' => [
		'controller' => 'account',
		'action' => 'register',
	],
	'news/show' => [
		'controller' => 'news',
		'action' => 'show',
	],
];
