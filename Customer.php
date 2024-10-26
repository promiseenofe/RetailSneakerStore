<?php
class Customer{



public $orderID;
public $number;
public $email;
public $name;





public function __construct ($orderID, $number, $email, $name) {

$this->orderID = $orderID;
$this->number = $number;
$this->email = $email;
$this->name = $name; // this an abject being passed in
}





public function setOrderID($orderID){
$this->orderID = $orderID;
}



public function getOrderID(){
return $this->orderID;
}





public function setNumber($number){
$this->number = $number;
}



public function getNumber(){
return $this->number;
}




public function setEmail($email){
$this->email = $email;
}



public function getEmail(){
return $this->email;
}


public function setName($name){
$this->name = $name;
}



public function getName(){
return $this->name;
}




public function displayCustomer() {



echo $this->getOrderID();
echo $this->getNumber();
echo $this->getEmail();
echo $this->getName();

}




}








?>