<?php

namespace App;


class DB
{
    use Singletone;

    protected $dbh;

    protected function __construct()
    {
        $config = Config::instance();
        $dsn = $config->data['db']['driver'].':host='.$config->data['db']['host'].';dbname='.$config->data['db']['name'];
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