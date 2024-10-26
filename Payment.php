<?php
class Payment{



public $paypal;
public $creditcard;





public function __construct ($paypal, $creditcard ) {

$this->paypal = $paypal;
$this->creditcard = $creditcard;

}





public function setPaypal($paypal){
$this->paypal = $paypal;
}



public function getPaypal(){
return $this->paypal;
}





public function setCreditcard($creditcard){
$this->creditcard = $creditcard;
}



public function getCreditcard(){
return $this->creditcard;
}


public function displayPayment() {



echo $this->getPaypal();
echo $this->getCreditcard();

}




}



?>