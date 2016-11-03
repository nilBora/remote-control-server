<?php

class User extends Controller
{
	public function login()
	{
		if (!empty($_POST['email']) && !empty($_POST['password'])) {

			$login = $_POST['email'];
			$password = $_POST['password'];

			$user = $this->auth($login, $password);

			if ($user) {
				$this->setSession('auth', md5($user['id']));
				$this->setSession('user_id', $user['id']);
				$this->redirect('/');
			}
		}


		echo $this->fetch('login.phtml');

	}

	public function logout()
	{
		unset($_SESSION['sessionData']['auth']);
		unset($this->_sessionData['auth']);
		unset($this->_sessionData['user_id']);
		$this->redirect('/');
	}

	public function getUserIDByToken($token)
	{
		$search = array(
			'access_token' => $token
		);

		$user = $this->object->get($search);

		return $user['id'];
	}
	
	public function getUserByID($id)
	{
		$search = array(
			'id' => $id
		);

		$user = $this->object->get($search);

		return $user;
	}
	
	public function auth($login, $password)
	{
		$search = array(
			'email'    => $login,
			'password' => md5($password) // FIX ME
		);

		$user = $this->object->get($search);
		if (!$user) {
			return false;
			//throw new Exception('Auturization Error. Not Found User');
		}
		
		return $user;
	}

	public function setTokenByUser($idUser, $token)
	{
		$search = array(
			'id' => $idUser
		);
		$values = array(
			'access_token' => $token
		);

		return $this->object->updateUser($search, $values);
	}
}