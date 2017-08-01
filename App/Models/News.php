<?php

namespace App\Models;


use App\Model;
use App\DB;

class News extends Model
{
    //use \App\Magic;
    //protected static $data = [];

    const TABLE = 'news';

    public $title;
    public $text;
    public $dtoc;
    public $author_id;




    public static function findLast ($limit = 3){
        /**
         * TODO Реализовать подстановку в LIMIT
         */
        //$sql = 'SELECT * FROM '. self::TABLE." ORDER BY `id` DESC LIMIT :limit)";


        $db = DB::instance();
        return $db->query('SELECT * FROM '.static::TABLE.' ORDER BY id DESC LIMIT 3', static::class, [':l' => $limit]);
    }

    public function getAuthor(){

        //echo self::$data["news"]["author_id"];
        //var_dump(self::$data);
    }

    /**
     * LAZY LOAD
     *
     * @param $name
     * @return bool|null
     */
    public function __get($name)
    {
        switch ($name){
            case 'author':
                //echo 'a: '.$this->author_id.'||';
                return Author::findById($this->author_id);
                break;
            default:
                return null;
        }

    }

    public function __isset($name)
    {
        switch ($name){
            case 'author':
                return !empty($this->author_id);
                break;
            default:
                return false;
        }

    }
}