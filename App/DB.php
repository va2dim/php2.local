<?php

namespace App;


class DB
{
    protected $dbh;

    public function __construct()
    {
        $dsn = "mysql:host=127.0.0.1;dbname=test";
        $this->dbh = new \PDO($dsn,'root','');
    }

    public function execute($sql){
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        return $res;
    }

    public function query($sql, $class){
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute();
        if(false !== $res) { // !== - жесткое неравенство со сравнением по типу
            $res = $sth->fetchAll(\PDO::FETCH_CLASS, $class);
            return $res;
        }
        return [];
    }

}