<?php

/* 
 * Контроллер для создания новых категорий и карточек
 * 
 */

// подключение модели 
include_once '../models/CardsModel.php';
include_once '../models/CategoriesModel.php';

function indexAction($smarty){
   
   // для вывода карточек: получить ID категории из GET-запроса
  
     
    //вывести в шаблоне 
    $smarty->assign('pageTitle', 'm-cards');
   
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'message_top');
    loadTemplate($smarty, 'new_panel');
    loadTemplate($smarty, 'new_left_column');
    loadTemplate($smarty, 'new_cards_column');
 
     
}


/**
 * Функция addnewcategoryAction(); вызывается из main.js при клике на кнопку 'save' 
 * 
 * Передаем в БД наименование новой категории
 * $_POST['newcategory'] - переменная, передаваемя из main.js через post-запрос
 * 
 * @return boolean
 */
function addnewcategoryAction(){
    if(isset($_POST['newcategory']) && $_POST['newcategory'] !=''){
        $newcategory = $_POST['newcategory'];
      
        echo 'success';
    } 
    else {
       echo 'unsuccess'; 
    }
   // создаем новую категорию в модели CategoriesModel.php
    toCreateNewCategory($newcategory); 
   // после создания категории 
   // получить id новой категории для создания карточек, 
   // которые будут к ней относиться
   // у карточек это будет category_id
    
    $lastIDCategory = getLastIdCategory();
     
    // передать id новой категории в CardsModel.php
     toCreateNewCardWithCategory_ID($lastIDCategory['id']);
    
     
}
