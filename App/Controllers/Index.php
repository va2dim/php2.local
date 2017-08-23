<?php

namespace App\Controllers;


use App\Exceptions\Core;
use App\Exceptions\DB;
use App\MultiException;
use App\View;

class Index
{

    protected $view;
    //protected $errors;

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

        try {
            return $this->$methodName();
        } catch (MultiException $e) {
            $this->view->errors = $e;
            $this->view->display(__DIR__ . '/../templates/exceptions.php');
        }





        /*
        catch (\App\Exceptions\Core $e) {

            //$this->view->errors = 'FC: Возникло исключение приложения: '.$e->getMessage();
            echo '<br>FC: Возникло исключение приложения: <br>';
            $this->view->errors = $e;
            var_dump($this->view->errors);
                $this->view->display(__DIR__ . '/../templates/exceptions.php');
        }
        catch (\App\Exceptions\DB $e) {
            $this->view->errors = $e;
            //$this->view->errors = 'FC: Что-то не так с БД: '.$e->getMessage();

        }
        */
    }

    protected function actionIndex() {
        //$this->view->news = News::findLast(3);
        $this->view->news = \App\Models\News::findAll();
        $this->view->display(__DIR__ . '/../templates/index.php');
    }

    public function beforeAction(){
        //$e = new DB('Exc. msg!');
        //throw $e;

    }
}