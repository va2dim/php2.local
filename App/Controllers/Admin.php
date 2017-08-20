<?php

namespace App\Controllers;

use App\Models\User;
use App\View;

class Admin
    extends Index
{


    /**
     * Страница со всеми новостями сайта
     *
     */
    protected function actionIndex() {
        //$this->view->news = \App\Models\News::findAll();
        //$this->view->display(__DIR__ . '/../templates/adminNews.php');


        $this->view->users = \App\Models\User::findAll();
        $this->view->display(__DIR__ . '/../templates/adminUsers.php');

    }


    protected function actionChangeUser() {

            if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                $errEmail = 'Please enter a valid email address';
                echo $errEmail; //TODO отражение errEmail перенести в шаблон
            }
            else {
                $new_user = new User();
                $new_user->id = (int)$_REQUEST['id'];
                $new_user->email = $_POST['email'];
                $new_user->name = $_POST['name'];
                $new_user->save();
            }

        $this->view->users = \App\Models\User::findAll();
        $this->view->display(__DIR__ . '/../templates/adminUsers.php');

        $this->view->selected_user = \App\Models\User::findById($_REQUEST['id']);
        $this->view->display(__DIR__ . '/../templates/adminChangeUser.php');

    }

    /**
     * TODO Сделать трейт для вьюх всех пользователей и формы изменения
     */
    protected function actionDeleteUser() {
        $new_user = new User();
        $new_user->id = (int)$_REQUEST['id'];
        $new_user->delete();

        $this->view->users = \App\Models\User::findAll();
        $this->view->display(__DIR__ . '/../templates/adminUsers.php');

        $this->view->selected_user = \App\Models\User::findById($_REQUEST['id']);
        $this->view->display(__DIR__ . '/../templates/adminChangeUser.php');
    }
}