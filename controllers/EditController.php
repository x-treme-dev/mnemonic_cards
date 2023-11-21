<?php

/* 
 * Контроллер для редактирования катерогий и карточек
 * 
 */

// подключение модели 
include_once '../models/CardsModel.php';
include_once '../models/CategoriesModel.php';

function indexAction($smarty){
    
   // для вывода карточек: получить ID категории из GET-запроса
    $categoryID = isset($_GET['id']) ? $_GET['id']: null;
    if(! $categoryID) exit();
    
    //получить все категории из функции
    $rsCategories = getAllMainCategories();
    // Получить из БД все карточки по ID категории (category_id)
    $rsCards = getCardsByID($categoryID);
    
    $oneCategory = getOneCategory($categoryID);
     
  
    
     //вывести в шаблоне 
    $smarty->assign('pageTitle', 'm-cards');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('oneCategory', $oneCategory);
    $smarty->assign('rsCards', $rsCards);
    
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'message_top');
    loadTemplate($smarty, 'edit_panel');
    loadTemplate($smarty, 'edit_cards_column');
}

function updatecategoryAction(){
    if(isset($_POST['categoryID']) && isset($_POST['updateCategory']) && isset($_POST['cardsJSON'])){
        
        $categoryID = $_POST['categoryID'];
        $updateCategory = $_POST['updateCategory'];
        $cardsJSON = $_POST['cardsJSON'];
        
        
         echo 'success';
    } 
    else{
        echo 'unsuccess';
    }
    
    $cards = json_decode($cardsJSON,true);
     
    // редактировать название категории 
    toUpdateCategory($categoryID, $updateCategory);
    // разобрать полученный массив карточек, соответс. категории
    // и вызвать функцию toUpdateCards() - отредактировать карточки
    toParseArray($categoryID, $cards);
  
}


 function toParseArray($categoryID, $cards){
      
       foreach($cards as $items){
        foreach ($items as $row => $value){
            if($row == "front"){
                $front = $value;
                echo $front.'<br/>';
            }else if($row == "back"){
                $back = $value;
                echo $back.'<br/>';
               
            }else if($row == "id"){
                $id = $value;
                echo $id.'<br/>';
                 //в CardsModel.php передать id новой категории, а также текст для фронтальной и тыльной стороны карточки 
                 // вместе с id самой карты
                 toUpdateCards($categoryID, $front, $back, $id); 
            }
            
        }
        
      }
 }



