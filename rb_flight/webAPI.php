<?php 


/**
* 
*/
class WebAPI
{
	
	function __construct(argument)
	{
		# code...
	}

	/**
	* create array of result
	* @param int result code $result
	* @return array 
	*/
	public static function createResuit($result)
	{
		return ['result' => $result];
	}
}
 ?>