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
    $sql = "SELECT * FROM `cards` WHERE category_id = '{$categoryID}'";
    
    global $db;
    
    // sql-запрос к БД
    $rs = mysqli_query($db, $sql);
     
    // функция из mainFunction.php конвертирует полученные данные из БД в массив
     return createSmartyRsArray($rs);
}

