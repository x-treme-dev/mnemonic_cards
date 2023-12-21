<?php

/* 
 * Инициализация подключения к БД
 */

$dblocation = "127.0.0.1";
$dbname = "m_cards";
$dbuser = "root";
$dbpasswd = "";


mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);


// создаем соединение
// глбоальная переменная $db
$db = mysqli_connect($dblocation, $dbuser, $dbpasswd, $dbname);

mysqli_set_charset($db, 'utf8');
// проверяем соединение
if(! $db){
     die("Connected failed: " . mysqli_connect_error());
}

//echo "Connected successfully";
//printf("Успешно...%s\n", mysqli_get_host_info($db));

 // создадим таблицы, если их нет
     $sql = "CREATE TABLE IF NOT EXISTS `cards` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `category_id` int(11) NOT NULL,
      `front_card` varchar(255) NOT NULL,
      `back_card` varchar(255) NOT NULL,
      PRIMARY KEY (`id`) 
     ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";
    
      
    
    // sql-запрос к БД
    mysqli_query($db, $sql);

 
     $sql =  "CREATE TABLE IF NOT EXISTS `categories` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `category` varchar(50) NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";
     
    mysqli_query($db, $sql);

  //mysqli_close($db); 
 

 