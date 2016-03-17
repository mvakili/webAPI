<?php 




Flight::route('/@APIcode:[a-zA-Z]{10}[0-9]{5}/@class:[a-zA-Z]+/@method:[a-zA-Z]+', function ($APIcode, $class, $method)
{
	session_id($APIcode);
	session_start();
	if (class_exists($class) && method_exists($class, $method))
	{
		Flight::json(['format' => WebAPI::createResult(Result::OK), 'api' => WebAPI::createResult(Result::OK), 'response' => $class::$method($_REQUEST)]);
	} else {
		Flight::json(['format' => WebAPI::createResult(Result::OK), 'api' => WebAPI::createResult(Result::INVALID)]);
	}
});


Flight::map('notFound', function ()
{
	Flight::json(['format' => WebAPI::createResult(Result::INVALID)]);
});

Flight::start();

 ?>