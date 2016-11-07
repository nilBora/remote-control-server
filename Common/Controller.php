<?php

class Controller extends Dispatcher
{
    private static $_instance = null;
    private $_layout = 'layout.phtml';
    private $_core = null;
    public $controller = null;
    public $object;


    public function __construct()
    {
        parent::__construct();
        $this->_core = Core::getInstance();
        $this->controller = $this->_core->getControllers();
    }

    public function getController($controller = 'Main')
    {
        return new $controller($controller);
    }

    public function getUserID()
    {
        //OLD
        return $this->_core->getUserID();
    }

    public function getCurrentUserID()
    {
        return $this->_core->getUserID();
    }

    public function fetchMain($template=false,  $vars=array())
    {
        $vars['content'] = $this->fetch($template, $vars);

        $content = $this->fetch($this->_layout, $vars);

        return $content;
    }

    public function fetch($template='index.phtml', $vars=array())
    {
        if ($vars) {
            extract($vars);
        }

        ob_start();

        $templatePath = TEMPLATE_DIR.$template;

        include $templatePath;

        $content = ob_get_clean();

        return $content;
    }

    public function redirect($url)
    {
        //FIXME
        $href = 'http://'.$_SERVER['SERVER_NAME'];
        header("HTTP/1.1 301 Moved Permanently");
        header("Location: ".$href.$url);
        exit();
    }

    public function setSession($key, $value)
    {
        $this->_core->_setSession($key, $value);
    }

    public function display404()
    {
        header("HTTP/1.0 404 Not Found");
        exit;
    }
}