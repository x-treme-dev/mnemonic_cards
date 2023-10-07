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
     
    // создать массив smarty, который будем разбирать по ключам выводить во View
    $smartyRs = array();
    
    // сделаем выборку в виде массива согласно запросу, сформируем ассоциативный массив по ключам 
    while($row = mysqli_fetch_assoc($rs)){
         
       //echo $row['category'].'<br/>';
         $smartyRs[] = $row;
    }
    
   
    return $smartyRs;
}

