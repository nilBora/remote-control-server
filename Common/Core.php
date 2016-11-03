<?php

class Core extends Dispatcher
{
	private static $_instance = null;
	private $_request = null;
	private $_requestUri;
	protected $_sessionData = null;
	private $_layout = 'layout.phtml';
	public $socketInstance = null;
	public $controller = null;

	public function __construct()
	{
		if (isset(self::$_instance)) {
			$message = 'Instance already defined use Core::getInstance';
			throw new Exception($message);
		}

		if (!array_key_exists('sessionData', $_SESSION)) {
			$this->_sessionData = array(
				'auth' => ''
			);
		} else {
			$this->_sessionData = $_SESSION['sessionData'];
		}
	}

	public static function getInstance()
	{
		if (is_null(self::$_instance)) {
			self::$_instance = new self();
		}

		return self::$_instance;
	}

	public function start()
	{

		$this->controller = new Controller();
		$this->_initBundles();

		$route = new Route();
		$currentRouteConfig = $route->pareseUrl();

		if ($currentRouteConfig && method_exists($currentRouteConfig['controller'], $currentRouteConfig['method'])) {

			if ($this->_isAuthRoute($currentRouteConfig)) {
				$main = $this->controller->User;
				$main->login();
				return true;
			}

			$controller = $this->controller->$currentRouteConfig['controller'];
			$method = $currentRouteConfig['method'];
			$controller->$method();
			return true;
		}

		$this->controller->display404();
		return true;
	}

	private function _isAuthRoute($currentRouteConfig)
	{
		return $currentRouteConfig['auth'] && !$this->_isAuthInSessionData();
	}

	private function _initBundles()
	{
		$bundles = $this->_getActiveBundles();

		foreach ($bundles as $dir) {
			if (!$this->_isBundleDir($dir)) {
				continue;
			}
			$dirPath = BUNDLE_DIR . $dir . "/";

			$nameController = $dir;

			if (!$this->_isExistsPHPFileByPath($dirPath . $nameController)) {
				throw new Exception('Not file controller ' . $dirPath . $nameController);
			}
			if (class_exists($nameController)) {
				continue;
			}

			require_once $dirPath . $nameController . ".php";

			$instanceBundle = new $nameController();

			$this->controller->$nameController = $instanceBundle;

			$nameObject = $nameController . 'Object';
			if ($this->_isExistsPHPFileByPath($dirPath . $nameObject)) {
				if (class_exists($nameObject)) {
					continue;
				}

				require_once $dirPath . $nameObject . ".php";
				$instanceBundleObject = new $nameObject();
				$this->controller->$nameController->object = $instanceBundleObject;
			}
		}
	}

	public function getControllers()
	{
		return $this->controller;
	}

	private function _getActiveBundles()
	{
		$bundles = scandir(BUNDLE_DIR);
		if (!$bundles && !is_array($bundles)) {
			throw new Exception('Not bundles in folder' . BUNDLE_DIR);
		}

		$bundles = array(
			'ClientSocket',
			'Queue',
			'User',
			'ServerSocket',
			'Main',
		);

		return $bundles;
	}


	private function _isExistsPHPFileByPath($path)
	{
		return file_exists($path.'.php');
	}

	private function _isBundleDir($dir)
	{
		return is_dir(BUNDLE_DIR.$dir) && $dir != "." && $dir != "..";
	}
	
	public function getUserID()
	{
		if (array_key_exists('user_id', $this->_sessionData)) {
			return $this->_sessionData['user_id'];
		}
		
		return false;
	}

	private function _isAuthInSessionData()
	{
		return array_key_exists('auth', $this->_sessionData)
			   && $this->_sessionData['auth'];
	}
	
	public function _setSession($key, $value)
	{
		$this->_sessionData[$key] = $value;
		$_SESSION['sessionData'][$key] = $value;
	}
	
	private function _isUrlInRequest()
	{
		return array_key_exists('url', $this->_request);
	}
}