<?php
//including the database connection file
include_once("classes/Product.php");
$crud = new Product();

//getting id of the data from url
$id = $crud->escape_string($_GET['id']);

//deleting the row from table
$result = $crud->delete($id, 'product_tb');
if ($result) {
	//redirecting to the display page (index.php in our case)
	header("Location:index.php");
}
?>

