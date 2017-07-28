<?php

require __DIR__ . '/autoload.php';

use App\Models\User;
/*
$news = \App\Models\News::findLast(2);
var_dump($news);
include __DIR__ . '/App/Templates/index.php';
*/

/*
$user = new User();
$user->id = 9;
$user->name = 'Амандус Пуп';
$user->email = 'a@pup.eu';
var_dump($user->save());
*/

include __DIR__ . '/App/templates/index.php';
