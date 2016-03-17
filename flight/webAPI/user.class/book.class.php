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
		if (!isset($params['id'])) return null;

		$book = R::load('book', $params['id']);
		
		if($book->id != $params['id']) return null;

		return ['name' => $book->name, 'price' => $book->price, 'desc' => $book->desc, 'city' => $book->city, 'status' => $book->status];
	}

}	



 ?>