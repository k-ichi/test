<?php

class Session
{
	private static $sessionStarted = false;//このクラスは継承されて使われる？
	private static $sessionIdRegenerated = false;

	public function __construct()
	{
		//!self::というのはなんとなく嫌
		if(self::$sessionStarted) {
			//success
		} else {
			session_start();

			self::$sessionStarted = true;
		}
	}

	public function set($name, $value)
	{
		//配列だと
		if(is_array($name)) {
			foreach($name as $n) {
				$_SESSION[$n] = $value;
			}
		} else {
			$_SESSION[$name] = $value;
		}
	}

	public function get($name, $default = null)
	{
		if(isset($_SESSION[$name])) {
			return $_SESSION[$name];
		}
		return $default;
	}

	public function remove($name) {
		unset($_SESSION[$name]);
	}

	public function clear()
	{
		$_SESSION = array();
	}

	public function regenerate($destroy = true)
	{
		if(!self::$sessionIdRegenerated) {
			session_regenerate_id($destroy);

			self::$sessionIdRegenarated = true;
		}
	}

	public function setAuthenticated($bool)
	{
		$this->set('_authenticated', (bool)$bool);

		$this->regenerate();
	}

	public function isAuthenticated()
	{
		return $this->get('_authenticated', false);
	}
}

