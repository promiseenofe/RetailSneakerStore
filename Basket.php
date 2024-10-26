<?php
class Basket{



public $basketID;
public $basketTotal;
public $myShoe;


public function __construct ($basketID, $basketTotal,$myShoe) {

	$this->basketID = $basketID;
	$this->basketTotal = $basketTotal;
	$this->myShoe = $myShoe; // this an object of a shoe being passed in
	
	}


	public function setBasketID($basketID){
	$this->basketID = $basketID;
	}

	public function getBasketID(){
	return $this->basketID;
	}


	public function setBasketTotal($basketTotal){
	$this->basketTotal = $basketTotal;
	}

	public function getBasketTotal(){
	return $this->basketTotal;
	}

	
	public function setMyShoe($myShoe){
	$this->myShoe = $myShoe;
	}

	public function getMyShoe(){
	return $this->myShoe;
	}


	public function displayBasket() {
		
	echo '<br/>';
	echo $this->getBasketID(). '<br/>';
	echo $this->getBasketTotal(). '<br/>';

	echo $this->myShoe->displayShoe() . '<br/>';
	}


}




?>