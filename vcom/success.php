<?php
require 'common.php';
?>

<!DOCTYPE html> 
<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!---- The page has a title Lifestyle Store--> 
		<title>Vcom</title>
		        <!-- Latest compiled and minified CSS -->
				<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
				<!-- jQuery library -->
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
				<!-- Latest compiled JavaScript -->
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
				<!---- External css file index.css placed in the folder css is linked--> 
				<link href="home.css" rel="stylesheet" type="text/css"/> 
	</head> 
	<body> 
		<?php
			include 'header.php';
		?>
	    <div class="container">
		<h1 class="">Success</h1>
		<div>
			<p>Your order is confirmed. 
			Thank you for shopping with us. 
			<a href="product.html">Click here</a> to purchase any other item. </p>
		</div>
		</div>
		<?php
			include 'footer.php';
		?>
	</body>
</html> 