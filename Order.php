<?php
class Order{



public $orderStatus;
public $basketID;


public function __construct ($basketID, $orderStatus ) {

$this->orderStatus = $orderStatus;
$this->basketID = $basketID;
}





public function setBasketID($basketID){
$this->basketID = $basketID;
}



public function getBasketID(){
return $this->basketID;
}



public function setOrderStatus($orderStatus){
$this->orderStatus = $orderStatus;
}



public function getOrderStatus(){
return $this->orderStatus;
}


public function displayOrder() {



echo $this->getBasketIDID();
echo $this->getOrderStatus();
}




}



?>