<?php 
define( 'REDBEAN_MODEL_PREFIX', '' );
require_once 'Flight.php';
require_once 'rb.php';
require_once 'webAPI/autoLoad.php';


/**
*	initial function
*
*/
function init() {

	//init database connection
	R::setup('mysql:host=localhost;dbname=dast2booktest','root','123');

	$opts = getopt("i::");


}
 ?>