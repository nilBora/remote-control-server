<?php

class Route
{
    private $_requestUri;
    private static $_routes = array();

    public function pareseUrl()
    {
        $this->_requestUri = $_SERVER['REQUEST_URI'];

        /* uri => array('controller'  => 'method') */
        $result = array();

        $routes = $this->_getRoutes();

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
    }

    public static function get($url, $params=array())
    {
        if (array_key_exists($url,static::$_routes )) {
            throw new Exception('Route is Exists: '.$url);
        }
        static::$_routes[$url] = $params;
    }

    private function _getRoutes()
    {
        $routes = array();
        require_once COMMON_DIR.'routes.php';

        static::$_routes = array_merge(static::$_routes, $routes);

        return static::$_routes;
    }
}