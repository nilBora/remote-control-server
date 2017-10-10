<?php
class ClientSocket extends Display
{
	private $_socket = null;
	private $_token = null;

	public function init()
	{
		$this->_token = $this->bundle->User->getCurrentUserToken();

		$this->_socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);

		return true;
	}

	public function send($command = false)
	{
		if (!$this->doSocketConnect()) {
			throw new DisplayException('Error. No connect to the server!');
		}

		$string = $this->_getPrepareSocketString($command);

		socket_sendto($this->_socket, $string, 1024, 0, SOCKET_SERVER_HOST, SOCKET_SERVER_PORT);
		socket_close($this->_socket);

		return true;
	}

	public function doSocketConnect()
	{
		$result = @socket_connect(
			$this->_socket,
			SOCKET_SERVER_HOST,
			SOCKET_SERVER_PORT
		);

		if (!$result) {
			return false;

		}

		return $result;
	}

	private function _getPrepareSocketString($command)
	{
		$string = "HTTP/1.0\r\nHost: " . SOCKET_SERVER_HOST . "\r\n";
		$string .= "Access-token: " . $this->_token . "\r\n";
		$string .= "Command: " . $command . "\r\n\r\n";

		return $string;
	}
}