<?php

require __DIR__ . '/autoload.php';

/*
use App\Models\User;
use App\Models\News;
use App\View;
*/
//use App\Controllers\Index;

//TODO HT4. разобрать REQUEST_URI на Controller и action и проверить (на стороне Apache) нет ли запроса реального файла или папки (.css, .js)
// index.php?ctrl=CTRL&act=ACT

$url = $_SERVER['REQUEST_URI'];
preg_match_all(
    '`ctrl=(?P<ctrl>.+)&act=(?P<act>.+)`',
    $url,
    $matches
);
//echo $matches['ctrl'][0].$matches['act'][0];
echo 'REQUEST_URI: ';
var_dump($matches);

/**
 * FrontController - единая т.входа на сайт
 * Определяет какой action нужно вызвать
 */
$ctrl = $_GET['ctrl'] ?: 'Index';
$act = $_GET['act'] ?: 'Index';

echo '_GET: ';
var_dump($_GET);
echo '<br>_POST: ';
var_dump($_POST);
echo '<br>_REQUEST: ';
var_dump($_REQUEST);
echo '<hr>';


$fullCtrlName = '\App\Controllers\\'.$ctrl;
var_dump($fullCtrlName);
$controller = new $fullCtrlName;
$controller->action($act);

/*
try {
    $controller->action($act);
} catch (\App\Exceptions\Core $e) {
    echo 'Возникло исключение приложения: ' . $e->getMessage();
} catch (\App\Exceptions\DB $e) {
    echo 'Что-то не так с БД: ' . $e->getMessage();
}
*/

/*
try {
    $controller->action($act);
} catch (\App\MultiException $e) {
    $view = new View();
    $view->errors = $e;
} finally {
    $view->display(__DIR__ . '/App/templates/exceptions.php');
}
*/

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

