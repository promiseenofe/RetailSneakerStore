<?php

include "Shoe.php";
include "databaseConfig.php";




	$myShoe = new Shoe("nike airmax ", "Sports", "Nike", "Air Max 2090", 20, 2, 10);
	
	
	$sql = "SELECT * FROM shoe"; 
	$qryResult = mysqli_query($conn, $sql);
	
	if (mysqli_num_rows($qryResult) > 0)
	{
		while($row = mysqli_fetch_assoc($qryResult)) {
			$myShoe->set_MyShoe($row["MyShoe"]);
			$myShoe->set_ShoeType($row["ShoeType"]);
			$myShoe->set_Brand($row["Brand"]);
			$myShoe->set_Name($row["Name"]);
			$myShoe->set_ShoeQuanity($row["ShoeQuantity"]);
			$myShoe->set_ShoePrice($row["ShoePrice"]);
			$myShoe->set_ShoeSize($row["ShoeSize"]);
			
			$myshoe->displayShoe();
		}
	}
	else
	{
		echo "No Shoes";
	}
	
	mysqli_close($conn);



?>