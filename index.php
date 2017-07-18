<?php

require __DIR__.'/autoload.php';

$db = new \App\DB();
$res = $db->execute('SELECT * FROM foo');
var_dump($res);

