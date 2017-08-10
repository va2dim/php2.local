<?php

namespace App\Controllers;


use App\View;

class Index
{

    protected $view;

    public function __construct(){
        $this->view = new View();
    }

    /**
     * Proxy Action
     * У всего С в целом можем проводить какие-то действия до action в beforeAction()
     * @param $action
     * @return mixed
     */
    public function action($action){
        $methodName = 'action'.$action;
        $this->beforeAction();
        //var_dump($methodName);
        return $this->$methodName();
    }

    public function beforeAction(){

    }
}