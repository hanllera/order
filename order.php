<?php


session_start();
//--------------------Config to database-------------------
error_reporting(0);

	$con = mysqli_connect("localhost", "root", "", "dishtansya") or die
	("Unable to Connect");
//-------------------------------------------------------

//-----------------product backend process--------------

$product_id = $_POST['product_id'];
$quantity = $_POST['quantity'];
	
	$product_query = mysqli_query($con, "SELECT * FROM product WHERE product_id = '$product_id' ");	
	while ($fetch_product = mysqli_fetch_assoc($product_query)) 
	{
		$p_quantity = $fetch_product['quantity'];
	}

		if ($quantity<=$p_quantity) 
		{
			echo "You have successfully ordered this product"

		}
		else
		{
			echo "Failed to order this product due to unavailability of the stock";
		}

?>