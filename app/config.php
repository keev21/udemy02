<?php

define('PORT', '8848');
define('BASEPATH', '/udemy02/');
define('URL', 'http://127.0.0.1:' . PORT . BASEPATH);

//ESTO ES PARA CARGAR ARCHIVOS
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', getcwd() . DS);
define('APP', ROOT . 'app' . DS);
define('INCLUDES', ROOT . 'includes' . DS);
define('VIEWS', ROOT . 'views' . DS);

define('ASSETS', URL . 'assets/');
define('CSS', ASSETS . 'css/');
define('IMAGES', ASSETS . 'images/');
define('JS', ASSETS . 'js/');
define('PLUGINS', ASSETS . 'plugins/');


define('SHIPPING_COST', 99);

require_once APP.'functions.php';