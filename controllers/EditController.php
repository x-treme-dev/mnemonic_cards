<?php

/* 
 * Контроллер для редактирования катерогий и карточек
 * 
 */

// подключение модели 
include_once '../models/CategoriesModel.php';

function indexAction($smarty){
    
   // для вывода карточек: получить ID категории из GET-запроса
    $categoryID = isset($_GET['id']) ? $_GET['id']: null;
    if(! $categoryID) exit();
    
    //получить все категории из функции
    $rsCategories = getAllMainCategories();
    
      $oneCategory = getOneCategory($categoryID);
     
  
    
     //вывести в шаблоне 
    $smarty->assign('pageTitle', 'm-cards');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('oneCategory', $oneCategory);
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'message_top');
    loadTemplate($smarty, 'edit_panel');
    loadTemplate($smarty, 'edit_cards_column');
}

function updatecategoryAction(){
    if((isset($_POST['categoryID']) && $_POST['categoryID'] !='') &&  
      (isset($_POST['updateCategory']) && $_POST['updateCategory'] !='')){
        
        $categoryID = $_POST['categoryID'];
        $updateCategory = $_POST['updateCategory'];
      
         echo 'success';
    } 
    else{
        echo 'unsuccess';
    }
    
   updateCategory($categoryID, $updateCategory);
}



