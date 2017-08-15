<?php

namespace App\Controllers;

use App\View;
//use App\Models\News;

class News extends Index
{

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
        //var_dump($this->view);
        $this->view->article = \App\Models\News::findById($id);
        $this->view->display(__DIR__ . '/../templates/one.php');
    }
}