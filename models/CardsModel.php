<?php

/* 
 *  Модель для вывода мнемонических карточек
 * 
 */

function getLastCards(){
    $sql = "SELECT * FROM `cards` WHERE category_id = 1";
    global $db;
    
    $rs = mysqli_query($db, $sql);
}