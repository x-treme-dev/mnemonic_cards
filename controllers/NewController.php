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
 * Получаем из БД последний ID категории и передаем вместе с новой карточкой в БД 
 * Последный ID категории записываем в category_id в таблице cards
 * $_POST['newcategory'] - переменная, передаваемя из main.js через post-запрос
 * 
 * @return boolean
 */

function addnewcategoryAction(){
    
    if(isset($_POST['newcategory']) && isset($_POST['cardsJSON']) ){
        
        $newcategory = $_POST['newcategory'];
        $cardsJSON = $_POST['cardsJSON'];
        echo 'success';
    } 
    else {
       echo 'unsuccess'; 
    }
    // получит массив из json
    $cards = json_decode($cardsJSON, true);
   //создаем новую категорию в БД
   toCreateNewCategory($newcategory); 
   // после создания категории 
   // получить id новой категории (т.е. последный автомат. созданный ID)
   // для создания карточек, 
   // которые будут к ней относиться
   // у карточек это будет category_id
    $lastIDCategory = getLastIdCategory();
    
    toParseArray($lastIDCategory, $cards);
}

/*
 * Разобрать массив и получить фронтальную и тыльную сторону карточки
 * Передать в БД
 */
 
 function toParseArray($lastIDCategory, $cards){
      
       foreach($cards as $items){
        foreach ($items as $sides => $value){
            if($sides == "front"){
                $front = $value;
                echo $front.'<br/>';
            }else if($sides == "back"){
                $back = $value;
                echo $back.'<br/>';
                //в CardsModel.php передать id новой категории, а также текст для фронатальной и тыльной стороны карточки
                toCreateNewCardWithCategory_ID($lastIDCategory['id'], $front, $back); 
            }
        }
        
      }
 }