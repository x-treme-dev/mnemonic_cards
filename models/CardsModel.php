<?php

/* 
 *  Модель для вывода мнемонических карточек
 * 
 */

/**
 * Получить карточки из таблицы по id категории 
 * @global type $db
 * @param type integer $categoryID - id категории
 * @return ассоциат. массив значений из БД - строка из БД
 */

function getCardsByID($categoryID){
    
    // защита от SQL-инъекций
    $categoryID = intval($categoryID);
    $sql = "SELECT * FROM `cards` WHERE category_id = '{$categoryID}' ORDER BY id";
    
    global $db;
    
    // sql-запрос к БД
    $rs = mysqli_query($db, $sql);
     
    // функция из mainFunction.php конвертирует полученные данные из БД в массив
     return createSmartyRsArray($rs);
}

/*
 * Добавить новые карточки в БД
 */
        
function toCreateNewCardWithCategory_ID($lastIDCategory, $cardFront, $cardBack){
    
    $sql = "INSERT INTO `cards` (category_id, front_card, back_card) VALUES ('{$lastIDCategory}', '{$cardFront}' , '{$cardBack}' )";
    
    global $db;
    // просто записать в БД и вернуть идентификатор
     mysqli_query($db, $sql);
}


// удалить карточки, принадлежащие категории (удаляется категория - удаляются карточки)
function deleteCards($categoryID){
    $sql = "DELETE FROM cards WHERE category_id=('$categoryID')";
    global $db; // взять значение глобальной переменной $db (индентификатор соединения с БД)   
    mysqli_query($db, $sql); 
}

// переписать содержимое карточки
function toUpdateCards($categoryID, $front, $back, $id){
    $sql = "UPDATE cards SET front_card =('$front'), back_card=('$back') WHERE category_id =('$categoryID') && id=('$id')";
    global $db;// взять значение глобальной переменной $db (индентификатор соединения с БД)  
    mysqli_query($db, $sql);
    
}

// удалить одну карточку
function deleteOneCard($cardID){
    $sql = "DELETE FROM cards WHERE id=('$cardID')";
    global $db; // взять значение глобальной переменной $db (индентификатор соединения с БД)   
    mysqli_query($db, $sql); 
}

// добавить одну карточку
function toAddOneCardByID($categoryID){
    $sql =  "INSERT INTO `cards` (category_id, front_card, back_card) VALUES ('{$categoryID}', 'front...' , 'back...' )";
    global $db; // взять значение глобальной переменной $db (индентификатор соединения с БД)   
    mysqli_query($db, $sql); 
}

// посчитать кол-во карточек
function getNumberOfCards(){
    $sql = "SELECT COUNT(*) FROM cards";
    global $db;// взять значение глобальной переменной $db (индентификатор соединения с БД)  
    $rs = mysqli_query($db, $sql);
    $numberOfCards = mysqli_fetch_array($rs);
    
    return $numberOfCards[0];
}
