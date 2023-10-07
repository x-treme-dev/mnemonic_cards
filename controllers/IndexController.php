<?php

/* 
 *  Формирование главной страницы сайта
 */

// модключение модели 
include_once '../models/CategoriesModel.php';
include_once '../models/CardsModel.php';

function indexAction($smarty){
    
    //получить данные из функции
    $rsCategories = getAllMainCategories();
    $rsCards = getLastCards();
     
    
    //вывести в шаблоне 
    $smarty->assign('pageTitle', 'm-cards');
    $smarty->assign('rsCategories', $rsCategories);
    
    loadTemplate($smarty, 'index');
    
    
 }

function testAction(){
    echo 'IndexController.php > testAction';
}

 