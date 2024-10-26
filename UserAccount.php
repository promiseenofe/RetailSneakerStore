<?php
class UserAccount{



public $username;
public $password;
public $accountID;


public function __construct ($accountID, $password, $username ) {

$this->username = $username;
$this->password = $password;
$this->accountID = $accountID;
}





public function setUsername($username){
$this->username = $username;
}



public function getUsername(){
return $this->username;
}



public function setPassword($password){
$this->password = $password;
}



public function getPassword(){
return $this->password;
}


public function setAccountID($accountID){
$this->accountID = $accountID;
}



public function getAccountID(){
return $this->accountID;
}



public function displayUserAccount() {



echo $this->getUsername();
echo $this->getPassword();
echo $this->getAccountID();
}




}



?>