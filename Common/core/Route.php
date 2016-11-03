<?php

class Route
{
    private $_requestUri;

    public function pareseUrl()
    {
        $this->_requestUri = $_SERVER['REQUEST_URI'];

        /* uri => array('controller'  => 'method') */
        $result = array();
        $routes = array(
            '/'		   		=> array('use' => 'Main@displayIndex', 'auth'=>true),
            '/login/'  		=> array('use' => 'User@login', 'auth'=>true),
            '/logout/'  	=> array('use' => 'User@logout', 'auth'=>true),
            '/vol_plus/'    => array('use' => 'Main@doControlVolPlus', 'auth'=>true),
            '/vol_minus/'   => array('use' => 'Main@doControlVolMinus', 'auth'=>true),
            '/gibernation/' => array('use' => 'Main@doControlGibernation', 'auth'=>true),
            '/shutdown/'    => array('use' => 'Main@doControlShutdown', 'auth'=>true),
            '/api/login/'   => array('use' => 'Main@apiLogin', 'auth'=>false),
            '/test/'        => array('use' => 'Main@test', 'auth'=>false)
        );

        foreach ($routes as $uri => $config) {
            if ($uri == $this->_requestUri) {

                $use = explode('@', $config['use']);

                $auth = false;

                if (array_key_exists('auth', $config) && $config['auth']) {
                    $auth = true;
                }
                $result = array(
                    'uri'        => $uri,
                    'matches'    => '',
                    'controller' => $use[0],
                    'method'     => $use[1],
                    'auth'       => $auth
                );
            }
        }

        return $result;
        //$pattern =  "#".$this->_requestUri."#Umis";
        //preg_match($pattern, $uri, $matches);



//            if (!$this->_isAuthInSessionData()) {
//                $this->displayLogin();
//                if ($this->_requestUri == '/login/') {
//                    $this->login();
//                }
//            } else {
//                if (!array_key_exists($this->_requestUri, $uri)) {
//                    $this->display404();
//                }
//
//                $params = $uri[$this->_requestUri];
//
//                foreach ($params as $controller => $method) {
//                    if (!method_exists($controller, $method)) {
//                        $this->display404();
//                    }
//                    $this->$method();
//                }
//
//
//            }
    }
}