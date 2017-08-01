<?php

require __DIR__ . '/autoload.php';

//$authors = \App\Models\Author::findAll();
//var_dump($authors);

$news = \App\Models\News::findAll();
var_dump($news);
//foreach ($news as $article) {echo "<li>"; var_dump(current($article->author));}
var_dump($news[3]->author);