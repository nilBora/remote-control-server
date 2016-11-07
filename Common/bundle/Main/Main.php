<?php

class Main extends Controller
{


    public function displayDefault()
    {
        if (!empty($_POST['email']) && !empty($_POST['password'])) {

            $login = $_POST['email'];
            $password = $_POST['password'];
            $userController = $this->controller->User;
            $user = $userController->auth($login, $password);

            if ($user) {
                $this->setSession('auth', md5($user['id']));
                $this->setSession('user_id', $user['id']);
                $this->redirect('/');
            }
        }


        echo $this->fetch('login.phtml');
    }

    public function apiLogin()
    {
        if (empty($_POST['login']) && empty($_POST['password'])) {
            echo 'Error'; //Exception
            exit;
        }

        $login = $_POST['login'];
        $password = $_POST['password'];
        $user = $this->controller->User->auth($login, $password);
        if ($user) {
            $token = md5($user['id']);
            $this->controller->User->setTokenByUser($user['id'], $token);

            echo $token;
            exit;
        }
    }

    public function tests()
    {
        echo 1111;
    }
}