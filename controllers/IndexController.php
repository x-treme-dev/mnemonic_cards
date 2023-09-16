<?php

/* 
 *  Формирование главной страницы сайта
 */

function indexAction($smarty){
     
    $smarty->assign('pageTitle', 'm-cards');
    loadTemplate($smarty, 'index');
}

function testAction(){
    echo 'IndexController.php > testAction';
}

