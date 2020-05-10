
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
		
		<table class="table-responsive table-striped table-bordered" >
  <tr>
    <th>Item Number</th>
    <th>Item Name</th>
    <th>Price</th>
	<th></th>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
	<td></td>
  </tr>
  <tr>
    <td></td>
    <td>Total</td>
    <td>Rs. 0/-</td>
	<td><a href="success.html"><button class="btn btn-primary btn-block ">confirm</button></a></td>
  </tr>
</table>
		
		
		<?php
			include 'footer.php';
		?>
	</body>
</html>