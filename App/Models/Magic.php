<?php

namespace App;


use App\Models\News;

trait Magic
{

    protected static $data = [];

    function __set($name, $value)
    {
        static::$data[$name] = $value;

    }

    function __get($name)
    {
        if (!isset(static::$data[$name])) {
            //$author_chk = News::getAuthor();
            //var_dump($author_chk);
    }
//echo static::class.'->'.$name;

        return static::$data[$name];
    }

    // TODO: Implement __isset() method. Доработать проверку существования св-ва.
    function __isset($name)
    {
        if (!in_array($name, static::$data)) {
            echo '<br>Свойство '.static::class.'->'.$name.' не существует или =NULL|FALSE';
        }
        if ('author' == $name) {
            echo 'Author: '.$name."<br>";
        }
/*
        if (empty($name)) {
            echo '<br>Свойство '.static::class.'->'.$name.'  не существует или =FALSE';
        }
        */
        //var_dump(static::$data[$name]);

    }
}