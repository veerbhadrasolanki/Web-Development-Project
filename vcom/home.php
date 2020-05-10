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
		<div class="content">
			<div class="banner-image">
				<div class="inner-banner-image">
					<div class="banner_content">
					<h1>We Sell Products You Love.</h1>
					<p>We Launch Products Soon.</p>
					<a href="product.php" class="button">Shop Now</a>
					</div>
				</div>
			</div>
			<div class="container">
				<div class="items">
					<a href="#" >
						<img src="camera.jpg" alt="" class="thumbnail">
						<div class="caption">
							<h2>Cameras</h2>
							<p>Choose among the best available in the world.</p>
						</div>
					</a> 
				</div>
				<div class="items">
					<a href="#" >
						<img src="watch.jpg" alt="" class="thumbnail">
						<div class="caption">
							<h2>Watchs</h2>
							<p>Original watches from the best brands.</p>
						</div>
					</a> 
				</div>
				<div class="items">
					<a href="#" >
						<img src="shirt.jpg" alt="" class="thumbnail">
						<div class="caption">
							<h2>Shirts</h2>
							<p>Our Best Bands Collections of Shirts</p>
						</div>
					</a> 
				</div>  
			</div>
		</div>
		<?php
			include 'footer.php';
		?>
	</body>
</html> 