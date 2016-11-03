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

    public function displayIndex()
    {
        $idUser = $this->getUserID();

        $vars = array(

        );
        echo $this->fetchMain('index.phtml', $vars);
    }

    public function doControlVolPlus()
    {
        $idUser = $this->getUserID();

        $user = $this->controller->User->getUserByID($idUser);

        $clientSocket = $this->controller->ClientSocket;
        $clientSocket->initClientSocket($user['access_token']);
        $clientSocket->send("vol_plus");
    }

    public function doControlVolMinus()
    {
        $idUser = $this->getUserID();

        $user =$user = $this->controller->User->getUserByID($idUser);

        $clientSocket = $this->controller->ClientSocket;
        $clientSocket->initClientSocket($user['access_token']);
        $clientSocket->send("vol_minus");
    }

    public function doControlGibernation()
    {
        $idUser = $this->getUserID();

        $user = $user = $this->controller->User->getUserByID($idUser);

        $clientSocket = $this->controller->ClientSocket;
        $clientSocket->initClientSocket($user['access_token']);
        $clientSocket->send("gibernation");
    }

    public function doControlShutdown()
    {
        $idUser = $this->getUserID();

        $user = $user = $this->controller->User->getUserByID($idUser);

        $clientSocket = $this->controller->ClientSocket;
        $clientSocket->initClientSocket($user['access_token']);
        $clientSocket->send("shutdown");
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

    public function test()
    {
        echo 1;
    }
}