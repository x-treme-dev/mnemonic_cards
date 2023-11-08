<?php

/*
 * Создаем новую категорию в таблице category в БД
 */
    
   
function toCreateNewCategory($newCategory){
    $sql = "INSERT categories (category) VALUES ('$newCategory')";
     global $db; // взять значение глобальной переменной $db (индентификатор соединения с БД)   
     mysqli_query($db, $sql); 
}
   
/* 
 * Модель для таблицы категорий 'categories'
 * Получаем все созданные категории
 */


function getAllMainCategories(){
    //возьмем всю таблицу, но выведем только категории
    $sql = "SELECT * FROM categories";
    global $db; // взять значение глобальной переменной $db (индентификатор соединения с БД)   
    $rs = mysqli_query($db, $sql); 
   
    // функция из mainFunction.php конвертирует полученные данные из БД в массив
    return createSmartyRsArray($rs);
}

// удалить категорию
function deleteCategory($categoryID){
    $sql = "DELETE FROM categories WHERE id=('$categoryID')";
    global $db; // взять значение глобальной переменной $db (индентификатор соединения с БД)   
    mysqli_query($db, $sql); 
}


// вывести одну категорию
function getOneCategory($categoryID){
    $sql = "SELECT * FROM categories WHERE id=('$categoryID')";
    global $db;// взять значение глобальной переменной $db (индентификатор соединения с БД)  
    $rs = mysqli_query($db, $sql);
    
    return mysqli_fetch_assoc($rs);
}

// обновление имени категории
function updateCategory($categoryID, $updateCategory){
    $sql = "UPDATE categories SET category =('$updateCategory') WHERE id =('$categoryID')";
    global $db;// взять значение глобальной переменной $db (индентификатор соединения с БД)  
     $rs = mysqli_query($db, $sql);
    
     return mysqli_fetch_assoc($rs);
}
 
// получить последний созданный уникальный id
function getLastIdCategory(){
    $sql = "SELECT id FROM categories ORDER BY id DESC LIMIT 1";
      global $db;// взять значение глобальной переменной $db (индентификатор соединения с БД)  
     $rs = mysqli_query($db, $sql);
    
     return mysqli_fetch_assoc($rs);
}

