<?php 

/**
 *  index.php обрабатывает все запросы браузера
 * 
 */

// подключаем файл с константами, переменными
include_once '../config/config.php';
// подключаем вспомогательные функции
include_once '../library/mainFunctions.php';

// определяем, с каким контроллером будем работать
$controllerName = isset($_GET['controller'])? ucfirst($_GET['controller']): 'Index';

// определяем, с какой функцией будем работать
$actionName = isset($_GET['action'])? $_GET['action']: 'index';
 
// загружаем страницу, соответствующую контроллеру      
loadPage($smarty, $controllerName, $actionName);
	  
