<?php

/* 
 * Модель для таблицы категорий 'categories'
 * Получаем все созданные карточки
 */
  


function getAllMainCategories(){
     
     
    //возьмем все таблицу, но выведем только категории
    $sql = "SELECT * FROM categories";
      
    //echo 'in function getAllMainCategories()';
    
    global $db; // взять значение глобальной переменной $db (индентификатор соединения с БД)
    
    $rs = mysqli_query($db, $sql); 
     
   
   // функция из mainFunction.php конвертирует полученные данные из БД в массив
    return createSmartyRsArray($rs);
}

