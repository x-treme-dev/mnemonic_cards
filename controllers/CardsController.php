<?php

/* 
 * CardsController.php 
 * 
 * Контроллер вывода карточек в соответсвии с выбранной категорией
 */


// подключить модели
include_once '../models/CategoriesModel.php';
include_once '../models/CardsModel.php';

/**
 * Формирование страницы вывода карточек 
 * 
 * @param object $smarty шаблонизатор
 */

function indexAction($smarty){
    
    // для вывода карточек: получить ID категории из GET-запросу
    $categoryID = isset($_GET['id']) ? $_GET['id']: null;
    if(! $categoryID) exit();
    
    $rsCards = null;
    // Получить из БД карточки по ID категории (category_id)
    $rsCards = getCardsByID($categoryID);
    
     
     // в этом контроллере блоки верхнего меню,
    // панели поиска и левого столбца остаются без изменений (дублируется с IndexController.php);
    // меняется лишь центральная часть с карточками
    
    //получить данные из функции: все категории для вывода в левом столбце
    $rsCategories = getAllMainCategories();
    
     //вывести в шаблоне 
    $smarty->assign('pageTitle', 'm-cards');
    $smarty->assign('rsCategories', $rsCategories);
   
    $smarty->assign('rsCards', $rsCards);
    
     
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'cardscolumn');
    
}


