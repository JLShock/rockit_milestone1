<!-- PHP FOR PRODUCTS -->

<?php

	// possible values: (1)Macbook (2)Ubuntu (3)Windows

	if (isset($_GET ['p'])) {
		$product_id = $_GET['p'];

		if($product_id == 1) {
			$output = "You are viewing: Macbook";
		} elseif ($product_id == 2) {
			$output = "You are viewing: Ubuntu";
		} elseif ($product_id == 3) {
			$output = "You are viewing: Windows";
		} else {
			$output = "Sorry this product doesn't exist.";
		}
	}

?>


<!-- HTML -->

<!DOCTYPE html>
<html>

	<head>

		<title>View Products | Milestone 1</title>
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">

	</head>

	<body>

		<!-- EMBEDDED PHP HEADER -->

		<?php

			require('header.php') ;

		?>


			<!-- TITLE -->

			<h1>Products</h1>


		<!-- PHP PRODUCT ECHO -->

		<h4>
			<?php

				echo $output ;

			?>
		</h4>
			

			<!-- PREVIOUS/BACK -->

			<p><a href="browse.php">Back</a></p>


		<!-- EMBEDDED PHP FOOTER -->

		<?php

			require('footer.php') ;

		?>


	</body>

</html>