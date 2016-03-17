<?php 

require_once 'class/webAPI.class.php';
require_once 'class/result.class.php';


//load all user defined classes
foreach(glob(__DIR__.'/user/*.php') as $file) {
	   require_once $file;
}
 ?>