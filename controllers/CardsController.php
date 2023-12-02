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
    
    // для вывода карточек: получить ID категории из GET-запроса
    $categoryID = isset($_GET['id']) ? $_GET['id']: null;
    if(! $categoryID) exit();
    
    $rsCards = null;
    // Получить из БД все карточки по ID категории (category_id)
    $rsCards = getCardsByID($categoryID);
    
     
     // в этом контроллере блоки верхнего меню,
    // панели поиска и левого столбца остаются без изменений (дублируется с IndexController.php);
    // меняется лишь центральная часть с карточками
    
    //получить данные из функции: все категории для вывода в левом столбце
    $rsCategories = getAllMainCategories();
    //получить из БД одну категорию
    $oneCategory = getOneCategory($categoryID);
    
    
     //вывести в шаблоне 
    $smarty->assign('pageTitle', 'm-cards');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsCards', $rsCards);
    $smarty->assign('oneCategory', $oneCategory);
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'top');
    loadTemplate($smarty, 'cards_panel');
    loadTemplate($smarty, 'cards_left_column');
    loadTemplate($smarty, 'cards_column');

    
}




/**
 * Функция удаления категории
 * вызывается из main.js при клике по кнопке 'delete'
 */
function deletecategoryAction(){
   if(isset($_POST['categoryID']) && $_POST['categoryID'] !=''){
        $categoryID = $_POST['categoryID'];
      
         echo 'success';
    } 
    else {
         echo 'unsuccess';
    } 
    
    deleteCategory($categoryID);
    deleteCards($categoryID);
    
    
}
