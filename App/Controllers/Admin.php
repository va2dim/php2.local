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
//        $this->view->news = \App\Models\News::findAll();
//        $this->view->display(__DIR__ . '/../templates/index.php');


        $this->view->users = \App\Models\User::findAll();
        $this->view->display(__DIR__ . '/../templates/adminUsers.php');
    }


    protected function actionSaveUser() {


        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
            echo $errEmail; //TODO отражение errEmail перенести в шаблон
        }
        else {

            $user = new User();
            $user->id = (int)$_GET['id'];
            $user->email = $_POST['email'];
            $user->name = $_POST['name'];
            echo '$$$$$$$$$$$$$'; //var_dump($user);
            var_dump($user->save());
            echo '<br><br>';
        }

        $this->view->users = \App\Models\User::findAll();
        $this->view->display(__DIR__ . '/../templates/adminUsers.php');

        //$this->view->user = ;
            //\App\Models\User::save();
        //$this->view->display(__DIR__ . '/../templates/one.php');

    }

    protected function actionEditUser() {
        $id = (int)$_GET['id'];
        $this->view->user = \App\Models\User::findById($id);
        $this->view->display(__DIR__ . '/../templates/one.php');
    }
}