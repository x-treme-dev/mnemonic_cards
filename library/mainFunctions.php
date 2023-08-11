<?php

/* 
 * Вспомогательные функции для всего приложения
 * 
 */

// прототип функции загрузки контроллера и соответствующей ему страницы

function loadPage($controllerName, $actionName){
    include_once PathPrefix.$controllerName.PathPostfix;
    
    $function = $actionName.'Action';
    $function();
}
