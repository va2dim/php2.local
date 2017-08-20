<?php

namespace App\Controllers;

use App\Exceptions\Core;
use App\Exceptions\DB;
use App\MultiException;
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
        $this->view->article = \App\Models\News::findById($id);

        if(false == $this->view->article) {
            $e = new MultiException();
            $e[] = new DB('Ошибка 404 - запись в БД с ID='.$id.' не найдена!!!');
            throw $e;
        }

        $this->view->display(__DIR__ . '/../templates/one.php');
    }

    protected function actionCreate() {
        try {
            $article = new \App\Models\News();
            $article->fill([]);
            $article->save();
        } catch (MultiException $e) {
            $this->view->errors = $e;
        }
        $this->view->display(__DIR__ . '/../templates/create.php');
    }
}