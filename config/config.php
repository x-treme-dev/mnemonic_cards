<?php

/* 
 *  Объявление констант, переменных
 */


define('PathPrefix', '../controllers/');
define('PathPostfix', 'Controller.php');


// > используемый шаблон
$template = 'default';
// пути к файлам шаблонов (*.tpl)
define('TemplatePrefix', "../views/{$template}/");
define('TemplatePostfix', '.tpl');


// пути к файлам шаблонов в веб-пространстве 
define('TemplateWebPath', "/templates/{$template}/");
// <

//> Инициализация шаблонизатора Smarty
//put full path to Smarty.class.php
require ('../library/Smarty/libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir(TemplatePrefix);
$smarty->setCompileDir('../tmp/smarty/templates_c');
$smarty->setCacheDir('../tmp/smarty/cache');
$smarty->setConfigDir('../library/Smarty/configs');
$smarty->error_reporting = E_ALL;

$smarty->assign('templateWebPath', TemplateWebPath);
