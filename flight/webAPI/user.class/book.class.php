<?php 
/**
* 
*/
class Book extends RedBean_SimpleModel
{

	/**
	* return book as array
	*
	* @param array $params
	* @return array book
	*/
	public static function getBook($params)
	{
		if (!isset($params['id'])) return ['result' => Result::INVALID];

		$book = R::load('book', $params['id']);
		
		if($book->id == 0) return ['result' => Result::OK, 'return' => null];

		return ['result' => Result::OK, 'return' => ['name' => $book->name, 'price' => $book->price, 'desc' => $book->desc, 'city' => $book->city, 'status' => $book->status]];
	}

}	



 ?>