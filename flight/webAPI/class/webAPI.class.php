<?php 


/**
* core class of webAPI project
*/
class WebAPI
{
	/**
	* @var array $resp
	*
	*/
	private $resp = array();

	/**
	* constructor
	* starts a session for each application
	* @param string $token
	*/
	function __construct($token)
	{
		session_id($token);
		session_start();
	}
	/**
	* collects data that will be responsed to application as array
	* 
	* @param string $key
	* @param object | array $value
	*/
	public function add($key, $value)
	{
		$this->resp[$key] = $value;
	}

	/**
	*response colected data during process to application
	*
	*/
	public function response()
	{
		Flight::json($this->resp);
	}

}

 ?>