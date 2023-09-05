<?php

/* 
 *  Формирование главной страницы сайта
 */

function indexAction($smarty){
     
    $smarty->assign('pageTitle', 'Mnemonic Cards');
    loadTemplate($smarty, 'index');
}

function testAction(){
    echo 'IndexController.php > testAction';
}

