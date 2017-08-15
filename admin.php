<?php

require __DIR__ . '/autoload.php';

$ctrl = $_GET['ctrl']?:'Index';
$act = $_GET['act']?:'Index';
$ctrl = 'Admin';
//$act = 'SaveUser';

echo '_GET: ';
var_dump($_GET);
echo '<br>_POST: ';
var_dump($_POST);
echo '<br>_REQUEST: ';
var_dump($_REQUEST);
echo '<hr>';
$controller = new App\Controllers\Admin();


$controller->action($act);


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

