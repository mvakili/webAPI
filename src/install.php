<?php 


R::trashAll(R::findAll("book"));
R::trashAll(R::findAll("tgmessage"));

$book = R::dispense("book");


$book->name 	= "حل المسائل ریاضی مهندسی";
$book->price 	= 1500;
$book->desc 	= "تقریبا نو";
$book->city 	= "تبریز";
$book->status 	= 'OPEN';

$user = R::dispense("user");

$user->username 	= "mvakili";
$user->password 	= sha1(1230);
$user->phone		= "+989367420945";
$user->active 		= true;


$tgacc = R::dispense("tgacc");

$tgacc->chatId = 123;
$tgacc->userId = 123;
$tgacc->username = "ali";

$user->tgacc = $tgacc;


$tgmessage = R::dispense("tgmessage");
$tgmessage->messageId = 123;
$tgmessage->tgacc = $tgacc;

$tgmessage->book = $book;

$book->user = $user;
$book->writeAll();

R::store($book);
R::store($tgmessage);

?>