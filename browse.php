<!DOCTYPE html>
<html>

	<head>

		<title>Browse Products | Milestone 1</title>
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">

	</head>

	<body>

		<!-- EMBEDDED PHP HEADER -->

		<?php

			require('header.php') ;

		?>


			<!-- TITLE and PRODUCT LIST -->

			<h1>Browse Products</h1>
		
			<ul>
				<li><a href="product.php?p=1">Macbook</a></li>
				<li><a href="product.php?p=2">Ubuntu</a></li>
				<li><a href="product.php?p=3">Windows</a></li>
			</ul>


		<!-- EMBEDDED PHP FOOTER -->
		
		<?php

			require('footer.php') ;

		?>


	</body>

</html>