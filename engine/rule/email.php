<?
/**
* Email core function
* Uinsu Web Framework
*/
mail("someone@example.com","My subject",$msg);

class emailFunction{}

$mailData = new EmailFuntion();

$mailData -> sender = $this -> inputPost('sender');
