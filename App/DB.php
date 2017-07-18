<?php

namespace App;


class DB
{
    protected $dbh;
    //const TABLE = 'user';

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



}