<?php

/**
 * App\Models\User => ./App/Models/User.php
 */
    function __autoload($class_name){
        require __DIR__.'/'.str_replace('\\','/',$class_name).'.php';
    }