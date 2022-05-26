<?php
include __DIR__ . '/Models/User.php';
include __DIR__ . '/Models/CreditCard.php';
include __DIR__ . '/Models/Product.php';


//credit card

$creditcard1 = new CreditCard('4379651643148609','','453');
$creditcard1 -> Setscadenza('05-24');
$creditcard2 = new CreditCard('4379656750575635','','684');
$creditcard2 -> Setscadenza('06-23');

var_dump($creditcard1);
var_dump($creditcard2);


//user
$user1 = new User ('Alberto','Declasse',32,$creditcard1,'alberto.declasee@gmail.com');
$user2 = new Discount('Maria','Teresa',76,$creditcard2,$catBed,'marisateresa85@bellagiovane.com',);

var_dump($user1);
var_dump($user2);

//product

$catBed = new Products ('gattifelici',23,'lettiera con sabbia');
$dogToys = new Products('giochi felici',5,'osso di gomma');

var_dump($catBed);
var_dump($dogToys);


?>