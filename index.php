<?php

require __DIR__ . '/autoload.php';

use App\Models\User;
use App\Models\News;
use App\View;

//TODO HT4. разобрать REQUEST_URI на Controller и action
$url = $_SERVER['REQUEST_URI'];

/**
 * FrontController - единая т.входа на сайт
 * Определяет какой action нужно вызвать
 */
$controller = new App\Controllers\News();
$action = $_GET['action']?:'Index';

$controller->action($action);
var_dump($action);
/*
$user = new User();
$user->id = 9;
$user->name = 'Амандус Пуп';
$user->email = 'a@pup.eu';
var_dump($user->save());
*/



/*
unset($view);
$view = new View;
$view->users = User::findAll();
echo $view->render(__DIR__.'/App/templates/index.php');
*/
/*
echo count($view);//.'--'.$view->count();
$view->count_ = null;
if (!isset($view->count_)) echo ' Check in Count_isset(obj) done!';
if (empty($view->count_)) echo ' Check in Count_empty(obj) done!';
*/

