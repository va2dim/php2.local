<?php

require __DIR__ . '/autoload.php';


$news = \App\Models\News::findLast(2);
var_dump($news);


include __DIR__ . '/App/Templates/index.php';