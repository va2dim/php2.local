<?php

require __DIR__ . '/../autoload.php';

$users = \App\Models\User::findAll();
echo var_dump($users)."<br><hr>";

$user = \App\Models\User::findById(2);
var_dump($user);

