<?php

/* 
 *  Формирование главной страницы сайта
 */

// модключение модели 
include_once '../models/CategoriesModel.php';


function indexAction($smarty){
    
  
    //получить все категории из функции
    $rsCategories = getAllMainCategories();
    
    
     //вывести в шаблоне 
    $smarty->assign('pageTitle', 'm-cards');
    $smarty->assign('rsCategories', $rsCategories);
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'top');
    loadTemplate($smarty, 'index_panel');
    loadTemplate($smarty, 'index_left_column');
    loadTemplate($smarty, 'index_center_column');
}

  

 