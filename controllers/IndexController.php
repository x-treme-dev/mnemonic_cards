<?php

/* 
 *  Формирование главной страницы сайта
 */

// модключение модели 
include_once '../models/CategoriesModel.php';
include_once '../models/CardsModel.php';


function indexAction($smarty){
    
  
    //получить все категории из функции
    $rsCategories = getAllMainCategories();
    
    // посчитать кол-во карточек
    $numberOfCards = getNumberOfCards();
    
     // посчитать кол-во категорий
    $numberOfCategories = getNumberOfCategories();
    
    
     //вывести в шаблоне 
    $smarty->assign('pageTitle', 'm-cards');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('numberOfCards', $numberOfCards);
    $smarty->assign('numberOfCategories', $numberOfCategories);
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'top');
    loadTemplate($smarty, 'index_panel');
    loadTemplate($smarty, 'cards_left_column');
    loadTemplate($smarty, 'index_center_column');
}

  

 