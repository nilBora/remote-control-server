<?php
class ClientSocket extends Controller
{
	private $_socket = null;
	private $_token = null;

	public function initClientSocket(&$token)
	{
		$this->_token = $token;
		$this->_socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
	}
	
	public function send($command = false)
	{
		$result = @socket_connect(
				$this->_socket,
				SOCKET_SERVER_HOST,
				SOCKET_SERVER_PORT
		);
		if (!$result) {
			return false;
		}
		$string = $this->_getPrepareSocketString($command);
		socket_sendto($this->_socket, $string, 1024, 0, SOCKET_SERVER_HOST, SOCKET_SERVER_PORT);
		socket_close($this->_socket);
	}
	
	private function _getPrepareSocketString($command)
	{
		$string = "HTTP/1.0\r\nHost: ".SOCKET_SERVER_HOST."\r\n";
		$string .= "Access-token: ".$this->_token."\r\n";
		$string .= "Command: ".$command."\r\n\r\n";
		
		return $string;
	}
}