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
		</br>
		</br>
		</br>
		</br>
	
	    <div class="container">
		<p class="text-warning ">Login to make a purchase </p>
		</div>
	     <div class="container">
	         <div class="row">
				<div class="col-lg-6">
				<form action="login_submit.php" method="POST" >
					<div class="form-group">
					<input type="email" class="form-control" placeholder="Email" name="email"></input>
					</div>
					<div class="form-group">
					<input type="password" class="form-control" placeholder="Password" name="password"></input>
					</div>
					<div class="form-group">
					<button type="submit" class="btn btn-primary"  value="Submit">Submit</button>
					</div>
				</form>
				</div>
			 </div>
	     </div>
	<div class="panel-footer">
	Don't have an account? <a href="signup.php">Register</a>
	</div>
	
         <?php
			include 'footer.php';
		?>
	</body>
</html> 