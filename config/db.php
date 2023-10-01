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
 
 
//mysqli_close($db); 

 

 