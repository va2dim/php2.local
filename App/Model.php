<?php

namespace App;


abstract class Model
{
    const TABLE = '';

    public static function findAll(){
        $db = DB::instance();
        return $db->query('SELECT * FROM '.static::TABLE, static::class);
    }

    public static function findById (int $id = 1){
        $db = DB::instance();
        $res = $db->query('SELECT * FROM '.static::TABLE.' WHERE id=:id', static::class, [':id' => $id]);
        //return $res;

        if (sizeof($res)>0) return $res;
        else return false;
    }
}