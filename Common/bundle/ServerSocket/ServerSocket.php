<?php

class ServerSocket
{
	const ACCESS_TOKEN_NAME = 'Access-token';
	const ID_DOWNLOAD_NAME = 'Id-download';
	
	const HOST = '0.0.0.0';
	const PORT = ':8000';
	const PROTOCOL = 'tcp://';
	
	private $_socket = null;
	
	private static $_instance = null;
	
	private $_connections = array();
	
	private function __construct()
	{
		$this->_socket = stream_socket_server(
				static::PROTOCOL.static::HOST.static::PORT,
				$errno,
				$errstr
		);
		if (!$this->_socket) {
			throw new Exception("$errstr ($errno)");
		}
	}
	
	public static  function getInstance()
	{
		if (is_null(self::$_instance)) {
			self::$_instance = new self();
		}
		
		return self::$_instance;
	}
	
	public function start()
	{
		$connectsData = array();
		while (true) {
			
			$connect = false;
			if ($connect = stream_socket_accept($this->_socket, -1)) {
				$response = fread($connect, 1024);
//				for($i = 0; $i < 3; $i++)
				//fwrite($connect, json_encode(array('test'=>'test')));
				//print_r($connectsData);
				if (!$response) {
					continue;
				}
				$connects[] = $connect;
				$responseData = $this->_getPrepareResponse($response);
					
				if (!$responseData) {
					continue;
				}
					
				$token = $responseData[static::ACCESS_TOKEN_NAME];

				if (!empty($responseData['Command'])) {

					$connectsData[$token]['Command'] = $responseData['Command'];
				} else {
					$connectsData[$token]['connect'] = $connect;
				}
			}

			foreach ($connectsData as $token => $data) {
				if (empty($data['connect'])) {
					continue;
				}

				if (empty($data['Command'])) {
					continue;
				}

				$prepareData = array(
					'option' => $data['Command']
				);
				$json = json_encode($prepareData);

				$this->doSendDataInClientByConnect(
					$data['connect'],
					$json
				);

				$connectsData[$token]['Command'] = false;
			}
		}
		
	}
	
	private function _getPrepareResponse($response)
	{
		$responseArray = explode("\r\n", $response);
		if (!is_array($responseArray)) {
			return false;
		}
			
		$responseData = array();
		$responseData['header'] = $responseArray[0];
		unset($responseArray[0]);
		foreach ($responseArray as $key => $item) {
			if (empty($item)) {
				continue;
			}
			if ($values = explode(":", $item)) {
				$responseData[$values[0]] = trim($values[1]);
			}
		}
			
		if (empty($responseData[static::ACCESS_TOKEN_NAME])) {
			return false;
		}
		
		return $responseData;
	}

	private function _getPrepareData($option)
	{
		$data = array(
			'option' => $option['name'],	
		);

		$json = json_encode($data);

		return $json;
	}
	
	public function doSendDataInClientByConnect($connect, $data)
	{
		//TODO: Error fwrite if no send
		@fwrite($connect, $data);
		return true;
	}
}
