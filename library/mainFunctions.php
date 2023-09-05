<?php

/* 
 * Вспомогательные функции для всего приложения
 * 
 */

// прототип функции загрузки контроллера и соответствующей ему страницы

function loadPage($smarty, $controllerName, $actionName='index'){
    
    include_once PathPrefix.$controllerName.PathPostfix;
   
    $function = $actionName.'Action';
    $function($smarty);
}

/**
 * Загрузка шаблона
 * 
 * @param object $smarty объект шаблонизатора
 * @param string $templateName название файла шаблона
 */
function loadTemplate($smarty, $templateName){
   
    $smarty->display($templateName.TemplatePostfix);
      
     
}

function d($value=null, $die=1){
    echo 'Debug:<br /><pre>';
    print_r($value);
    echo '</pre>';
    if($die) die;
}



