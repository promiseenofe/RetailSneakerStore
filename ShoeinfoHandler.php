<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title> Shoe </title>
</head>

<body>

	<form action="ShoeinfoHandler.php" method="POST">
	
	<label for="myShoe">Please Enter The Shoes Name:</label>
	<input type="text" id="myShoe" name="myShoe"> <br>
	
	<label for="shoeType">Please Enter shoe type:</label>
	<input type="text" id="shoeType" name="shoeType"> <br>
	
	<label for="brand">Enter shoe Brand:</label>
	<input type="text" id="brand" name="brand"> <br>
	
	<label for="name">Please shoe name:</label>
	<input type="text" id="name" name="brand"> <br>
	
	<label for="shoeQuantity">Quantity:</label>
	<input type="number" id="shoeQuantity" name="shoeQuantity"> <br>
	
	<label for="shoePrice">Price:</label>
	<input type="number" id="shoePrice" name="shoePrice"> <br>

	<label for="shoeSize">Shoe size:</label>
	<input type="number" id="shoeSize" name="shoeSize"> <br>
	
	<input type="submit" id= "submit" value="Add To Basket">
	
	</form>

</html>

<?php

	if(isset($_POST["myShoe"], $_POST["shoeType"], $_POST["brand"], $_POST["name"], $_POST["shoeQuantity"], $_POST["shoePrice"], $_POST["shoeSize"]))
	{
		include "databaseConfig.php";
		
		$myShoe = $_POST["myShoe"];
		$shoeType = $_POST["shoeType"];
		$brand = $_POST["brand"];
		$name = $_POST["name"];
		$shoeQuantity = $_POST["shoeQuantity"];
		$shoePrice = $_POST["shoePrice"];
		$shoeSize = $_POST["shoeSize"];
		
		$sql = "INSERT INTO shoe
		VALUES ('$myShoe', '$shoeType', '$brand', '$name', '$shoeQuantity', '$shoePrice', '$shoeSize')";
		
		$qryResult = mysqli_query($conn, $sql);
		
		if ($qryResult == TRUE)
		{
			echo "Successfully added to basket";
		}
		else
		{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn). "<br>";
		}

	}
?>
</body>