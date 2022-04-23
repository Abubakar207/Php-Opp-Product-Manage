
<?php
//including the database connection file
include_once("classes/Product.php");
include_once("classes/Validation.php");

$crud = new Product();


if(isset($_POST['Submit'])) {	
	$Name = $crud->escape_string($_POST['name']);
	$Price = $crud->escape_string($_POST['price']);
	$ProductType = $crud->escape_string($_POST['productType']);
 
	if(strlen($ProductType) == 5)
	{
		$Detail = $crud->escape_string($_POST['weight']) . ' Kg';
		$result = $crud->execute("INSERT INTO `product_tb` (`Sku`, `Name`, `Price`, `ProductType`, `ProductDetail`) VALUES (NULL, '$Name', '$Price', '$ProductType', '$Detail')");
		header("Location:index.php");
	}
  else	if(strlen($ProductType) == 4)
	{
		$Detail = $crud->escape_string($_POST['size'])." MB";
		$result = $crud->execute("INSERT INTO `product_tb` (`Sku`, `Name`, `Price`, `ProductType`, `ProductDetail`) VALUES (NULL, '$Name', '$Price', '$ProductType', '$Detail')");
		header("Location:index.php");
	}
	else
	{
		$Detail = $crud->escape_string($_POST['height']) . ' h ';	
		$Detail .= $crud->escape_string($_POST['width']) . ' w ';
		$Detail .= $crud->escape_string($_POST['length']) . ' l ';	
		$result = $crud->execute("INSERT INTO `product_tb` (`Sku`, `Name`, `Price`, `ProductType`, `ProductDetail`) VALUES (NULL, '$Name', '$Price', '$ProductType', '$Detail')");
		header("Location:index.php");
	}
}
?>



