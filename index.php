<?php
//including the database connection file
include_once("classes/Product.php");
$crud = new Product();
$query = "SELECT * FROM product_tb  ORDER BY Sku ASC";
$result = $crud->getData($query);
?>

<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title>Product Page</title>
</head>

<body>


	<div class="container my-3">
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header ">
						<div class="btn  btn-dark ">
							<a href="add.html" class="nav-link text-light">Add New Product</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header text-center h3">
						Product Table
					</div>
					<div class="card-body">

						<div class="container">
							<div class="row">
								<div class="col-lg-12">
									<div class="table-responsive">
										<table class="table text-center">
											<thead>
												<tr>
													<th scope="col">#Sku</th>
													<th scope="col">Product Name</th>
													<th scope="col">Product Price</th>
													<th scope="col">Product Category</th>
													<th scope="col">Product Detail</th>
												</tr>
											</thead>
											<tbody>
												<?php
												foreach ($result as $key => $res) {		
													echo "<tr>";
													echo "<td>" . $res['Sku'] . "</td>";
													echo "<td>" . $res['Name'] . "</td>";
													echo "<td>" . $res['Price'] . "</td>";
													echo "<td>" . $res['ProductType'] . "</td>";
													echo "<td>" . $res['ProductDetail'] . "</td>";
													echo "<td> <a class='btn btn-danger' href=\"delete.php?id=$res[Sku]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
												}
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery/jquery-1.3.2.min.js"></script>
</body>

</html>