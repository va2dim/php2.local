<?php

namespace App;


class DB
{
    use Singletone;

    protected $dbh;

    protected function __construct()
    {
        $config = Config::instance();
        //echo $config->data['db']['host'];
        $dsn = $config->data['dbdriver'].':host='.$config->data['host'].';dbname='.$config->data['dbname'];
            //"mysql:host=127.0.0.1;dbname=test";
        //echo $dsn;
        $this->dbh = new \PDO($dsn,'root','');
    }

    public function execute($sql, array $substitutionData = []){
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($substitutionData);

        echo "\nPDOStatement::errorInfo():\n";
        print_r($sth->errorInfo());
        echo "\nPDOStatement::errorCode(): ";
        print $sth->errorCode();

        return $res;
    }

    public function query($sql, $class, array $substitutionData = []){
        $sth = $this->dbh->prepare($sql);
        $res = $sth->execute($substitutionData);
        //var_dump($substitutionData);
        //echo $sql."<br>";
        if(false !== $res) { // !== - жесткое неравенство со сравнением по типу
            $res = $sth->fetchAll(\PDO::FETCH_CLASS, $class);
            return $res;
        }
        return [];
    }

}