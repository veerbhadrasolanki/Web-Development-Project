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
		<h1 class="">Change Password</h1>
		</div>
	     <div class="container">
	         <div class="row">
				<div class="col-lg-6">
				<form class="">
					<div class="form-group">
					<input type="password" class="form-control" placeholder="Old Password" name="password"></input>
					</div>
					<div class="form-group">
					<input type="password" class="form-control" placeholder="New Password" name="password"></input>
					</div>
					<div class="form-group">
					<input type="password" class="form-control" placeholder="Retype-New Password" name="password"></input>
					</div>
					<div class="form-group">
					<button type="button" class="btn btn-primary" name="submit">change</button>
					</div>
				</form>
				</div>
			 </div>
	     </div>
	
        <?php
			include 'footer.php';
		?>
	</body>
</html> 