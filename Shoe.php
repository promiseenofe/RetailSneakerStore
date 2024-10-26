<?php 
class Shoe {
	
	
	
	public $myShoe;
	public $shoeType;
	public $brand;
	public $name;
	public $shoeQuantity;
	public $shoePrice;
	public $shoeSize;
	
	public function __construct ( $myShoe, $shoeType, $brand, $name, $shoeQuantity, $shoePrice, $shoeSize) {
	$this->myShoe = $myShoe;
	$this->shoeType = $shoeType;
	$this->brand = $brand;
	$this->name = $name;
	$this->shoeQuantity = $shoeQuantity;
	$this->shoePrice = $shoePrice;
	$this->shoeSize = $shoeSize;
	}
	
	public function setMyShoe($myShoe) {
		$this->myShoe = $myShoe;
	}
	
	public function getMyShoe() {
		return $this->myShoe;
	}
	
	public function setShoeType($shoeType) {
		$this->shoeType = $shoeType;
	}
	
	public function getShoeType() {
		return $this->shoeType;
	}
	
	
	public function setBrand($brand) {
		$this->brand = $brand;
	}
	
	public function getBrand() {
		return $this->brand;
	}
	
	
	public function setName($name) {
		$this->name = $name;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function setShoeQuantity($shoeQuantity) {
		$this->shoeQuantity = $shoeQuantity;
	}
	
	public function getShoeQuantity() {
		return $this->shoeQuantity;
	}
	
	public function setShoePrice($shoePrice) {
		$this->shoePrice = $shoePrice;
	}
	
	public function getShoePrice() {
		return $this->shoePrice;
	}
	
	public function setShoeSize($shoeSize) {
		$this->shoeSize = $shoeSize;
	}
	
	public function getShoeSize() {
		return $this->shoeSize;
	}
	
	public function displayShoe() {
		echo '<br/>';
		echo "My Shoe: " . $this->getMyShoe(). '<br/>';
		echo "Shoe Type: " . $this->getShoeType(). '<br/>';
		echo "Brand: " . $this->getBrand(). '<br/>';
		echo "Name: " . $this->getName(). '<br/>';
		echo "Shoe Quantity: " . $this->getShoeQuantity(). '<br/>';
		echo "Shoe Price: " . $this->getShoePrice(). '<br/>';
		echo "Shoe Size: " . $this->getShoeSize(). '<br/>';
		
	}
	
	
	
	
}



?>