<?php

class RemoteControl extends Display
{
    const COMMAND_VOL_PLUS = "vol_plus";
    const COMMAND_VOL_MINUS = "vol_minus";
    const COMMAND_HIBERNATION = "gibernation";
    const COMMAND_SHUTDOWN = "shutdown";
    const COMMAND_MUTE = "mute";

    const URL_VOL_PLUS = "/vol_plus/";
    const URL_VOL_MINUS = "/vol_minus/";
    const URL_HIBERNATION = "/gibernation/";
    const URL_SHUTDOWN = "/shutdown/";
    const URL_MUTE = "/mute/";

    public function displayIndex()
    {
        $idUser = $this->controller->getUserID();

        $isSocketStart = false;
        if ($this->_isServerSocketStart()) {
            $isSocketStart = true;
        }

        $vars = array(
            'urlVolPlus'        => static::URL_VOL_PLUS,
            'urlVolMinus'       => static::URL_VOL_MINUS,
            'urlVolHibernation' => static::URL_HIBERNATION,
            'urlVolShutdown'    => static::URL_SHUTDOWN,
            'urlVolMute'        => static::URL_MUTE,
            'isSocketStart'     => $isSocketStart
        );
        echo $this->fetchMain('index.phtml', $vars);
    }

    private function _isServerSocketStart()
    {
        $clientSocket = $this->bundle->ClientSocket;
        $clientSocket->init();

        return $clientSocket->doSocketConnect();
    }

    private function _doSendSocket($command)
    {
        $clientSocket = $this->bundle->ClientSocket;

        $clientSocket->init();
        $clientSocket->send($command);

        return true;
    }

    public function doSendCommand()
    {
        if (array_key_exists('command', $_REQUEST)) {
            $command = $_REQUEST['command'];

            $this->_doSendSocket($command);

            return true;
        }

    }
}