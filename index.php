<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once 'rb_flight/setup.php';

init();

if ( isset($opts['i']))
{
	include 'src/install.php';
} else
{
	include 'src/run.php';
}


?>