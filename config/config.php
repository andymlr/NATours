<?php
//The main config file
define('BASE_URL', 'http://localhost/NATours/');
define('ENV', 'dev');
define('DEFAULT_MODULE', 'home');
define('DEFAULT_CONTROLLER', 'Home');
define('DEFAULT_METHOD', 'index');
define('APPPATH', dirname(dirname(__FILE__)).'/');
define('REQUEST_TYPE', $_SERVER['REQUEST_METHOD']);