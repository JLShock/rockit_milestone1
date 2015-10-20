<!DOCTYPE html>
<html>

	<header>

		<title>Contact | Milestone 1</title>
		<link rel="stylesheet" type="text/css" href="css/stylesheet.css">

	</header>

	<body>

		<!-- EMBEDDED PHP HEADER -->

		<?php

			require('header.php') ;

		?>


			<!-- TITLE and INFO -->

			<h1>Contact Us</h1>

			<div>
				Phone: 777-888-9999<br>
				Email: sales@businesssite.com<br>
				<br>111 Rockit Ave.<br>Tempe, AZ 85281<br>
			</div>

			<br>

			<!-- FORM -->
			<p class="formtitle">Fill out this form and we'll get back to you ASAP!</p>
			<div>
				<form method="post" action="contact2.php">
					<div>
		        		<label for="name"><b>Name:</b><br></label>
		        		<input style="height: 20px; width: 350px" type="text" id="name" />
		    		</div>
		    			<br>
		    		<div>
		        		<label for="email"><b>Email:</b><br></label>
		        		<input style="height: 20px; width: 350px" type="email" id="email" />
		    		</div>
		    			<br>
		    		<div>
		        		<label for="message"><b>Message:</b><br></label>
		        		<textarea style="height: 75px; width: 350px" id="message"></textarea>
		    		</div>
		    		<div>
		        		<button style="height: 20px; width: 355px" type="submit">Submit</button>
		    		</div>
				</form>
			</div>

			<br>


		<!-- EMBEDDED PHP FOOTER -->

		<?php

			require('footer.php') ;

		?>


	</body>

</html>