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

    public function execute($sql, array $substitutionData = []){
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($substitutionData);
        return $res;
    }

    public function query($sql, $class, array $substitutionData = []){
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($substitutionData);
        if(false !== $res) { // !== - жесткое неравенство со сравнением по типу
            $res = $sth->fetchAll(\PDO::FETCH_CLASS, $class);
            return $res;
        }
        return [];
    }

}