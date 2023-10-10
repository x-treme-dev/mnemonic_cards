<?php

/* 
 *  Формирование главной страницы сайта
 */

// модключение модели 
include_once '../models/CategoriesModel.php';


function indexAction($smarty){
    
  
    //получить данные из функции
    $rsCategories = getAllMainCategories();
    
     //вывести в шаблоне 
    $smarty->assign('pageTitle', 'm-cards');
    $smarty->assign('rsCategories', $rsCategories);
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'centercolumn');
}

  

 