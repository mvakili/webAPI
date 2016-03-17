<?php 
/**
* 
*/
class User extends RedBean_SimpleModel
{

	public function asArray()
	{
		return [ 'username' => $this->username, 'phone' => $this->phone];
	}
}

 ?>