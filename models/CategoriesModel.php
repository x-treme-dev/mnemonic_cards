<?php

/*
 * Создаем новую категорию
 */

function toCreateNewCategory($newCategory){
    $sql = "INSERT categories (category) VALUES ('$newCategory')";
     global $db; // взять значение глобальной переменной $db (индентификатор соединения с БД)   
     mysqli_query($db, $sql); 
}
   
/* 
 * Модель для таблицы категорий 'categories'
 * Получаем все созданные карточки
 */


function getAllMainCategories(){
    //возьмем всю таблицу, но выведем только категории
    $sql = "SELECT * FROM categories";
    global $db; // взять значение глобальной переменной $db (индентификатор соединения с БД)   
    $rs = mysqli_query($db, $sql); 
   
    // функция из mainFunction.php конвертирует полученные данные из БД в массив
    return createSmartyRsArray($rs);
}

 

