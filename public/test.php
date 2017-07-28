<?php
require 'rb.php';
$db = require '../config/config_db.php';
R::setup( $db['dsn'], $db['user'], $db['pass']);
//Шоб не мінялась структура таблиці
R::freeze(TRUE);
//Для дебагу
R::fancyDebug(TRUE);

//var_dump(R::testConnection());

//Create
//$cat = R::dispense('category');
//$cat->title = 'loh';
//$id = R::store($cat);

//Read
//$cat = R::load('posts', 9);

//Можна і як з обєктом, і як з масивом..
//print_r($cat->id);
//print_r($cat['id']);



//Update
$cat = R::load('posts', 9);
print_r($cat->title);
$cat->title = 'АЛОХА';
R::store($cat);
print_r($cat->title);


//Delete
//$cat = R::load('posts', 9);
//R::trash($cat);

//Видалити всі записи
//R::wipe('posts');


//R::findAll('posts');
//R::findAll('posts', 'id > /', [2]);
//R::findAll('posts', 'title LIKE ?', ['ww']);
//R::findOne('posts', 'id = ?', [2]);


