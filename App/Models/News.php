<?php

namespace App\Models;


use App\Model;
use App\DB;

class News extends Model
{
    const TABLE = 'news';
/*
    public $title;
    public $text;
    public $dtoc;
*/


    public static function findLast ($limit = 1){
        /**
         * TODO Реализовать подстановку в LIMIT
         */
        //$sql = 'SELECT * FROM '. self::TABLE." ORDER BY `id` DESC LIMIT :limit)";


        $db = DB::instance();
        return $db->query('SELECT * FROM '.static::TABLE.' ORDER BY id DESC LIMIT 2', static::class, [':l' => $limit]);
    }

}