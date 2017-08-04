<?php

namespace App\Controllers;

use App\View;
//use App\Models\News;

class News
{
    protected $view;

    public function __construct(){
        $this->view = new View;
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
        return $this->$methodName();
    }

    public function beforeAction(){

    }

    /**
     * Страница со всеми новостями сайта
     * То, что action должен сделать - его конкретное дейтсвие
     *
     */
    protected function actionIndex() {
        //$this->view->news = News::findLast(3);
        $this->view->news = \App\Models\News::findAll();
        $this->view->display(__DIR__ . '/../templates/index.php');
    }

    /**
     * ActionArticle
     */
    protected function actionOne() {
        $id = (int)$_GET['id'];
        $this->view->article = \App\Models\News::findById($id);
        $this->view->display(__DIR__ . '/../templates/one.php');
    }
}