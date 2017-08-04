<?php

namespace App;


class Config
{
    use Singletone;
    public $data;

    protected function __construct() {
        $this->data = require __DIR__ . '/../config.php';
    }

}