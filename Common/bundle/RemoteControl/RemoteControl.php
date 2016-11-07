<?php

class RemoteControl extends Controller
{
    const COMMAND_VOL_PLUS = "vol_plus";
    const COMMAND_VOL_MINUS = "vol_minus";
    const COMMAND_HIBERNATION = "gibernation";
    const COMMAND_SHUTDOWN = "shutdown";

    const URL_VOL_PLUS = "/vol_plus/";
    const URL_VOL_MINUS = "/vol_minus/";
    const URL_HIBERNATION = "/gibernation/";
    const URL_SHUTDOWN = "/shutdown/";

    public function displayIndex()
    {
        $idUser = $this->getUserID();

        $vars = array(
            'urlVolPlus'        => static::URL_VOL_PLUS,
            'urlVolMinus'       => static::URL_VOL_MINUS,
            'urlVolHibernation' => static::URL_HIBERNATION,
            'urlVolShutdown'    => static::URL_SHUTDOWN,
        );
        echo $this->fetchMain('index.phtml', $vars);
    }

    private function _doSendSocket($command)
    {
        $clientSocket = $this->controller->ClientSocket;

        $clientSocket->init();
        $clientSocket->send($command);

        return true;
    }

    public function doControlVolPlus()
    {
        $this->_doSendSocket(static::COMMAND_VOL_PLUS);
        return true;
    }

    public function doControlVolMinus()
    {
        $this->_doSendSocket(static::COMMAND_VOL_MINUS);
        return true;
    }

    public function doControlGibernation()
    {
        $this->_doSendSocket(static::COMMAND_HIBERNATION);
        return true;
    }

    public function doControlShutdown()
    {
        $this->_doSendSocket(static::COMMAND_SHUTDOWN);
        return true;
    }
}