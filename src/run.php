<?php 

Flight::route('/@APIcode:[a-zA-Z]{10}[0-9]{5}/@class:[a-zA-Z]+/@method:[a-zA-Z]+', function ($APIcode, $class, $method)
{
	$api = new WebAPI($APIcode);

	$api->add('format', Result::OK);

	if (class_exists($class) && method_exists($class, $method))
	{
		$api->add('api', Result::OK);
		$api->add('response', $class::$method($_REQUEST));
	} else {
		$api->add('api', Result::INVALID);
	}

	$api->response();
});


Flight::map('notFound', function ()
{
	$api = new WebAPI();

	$api->add('format', Result::INVALID);

	$api->response();
});

Flight::start();

 ?>