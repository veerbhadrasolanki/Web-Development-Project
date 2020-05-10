<?php
require 'common.php';
?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>	
			<!---- External css file index.css placed in the folder css is linked--> 
		<link href="home.css" rel="stylesheet" type="text/css"/> 

<div class="navbar navbar-inverse navbar-fixed-top">
 <div class="container">
 <div class="navbar-header">
 <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 </button>
<a class="navbar-brand" href="#"><img style="width:120px;heigth:30;" src="v.png"/></a>
 </div>
 <div class="collapse navbar-collapse" id="myNavbar">
 <ul class="nav navbar-nav navbar-right">
 <?php
 if (isset($_SESSION['email'])) {
 ?>
 <li><a href = "cart.php"><span class = "glyphicon glyphicon-shoppingcart"></span> Cart </a></li>
 <li><a href = "setting.php"><span class = "glyphicon glyphicon-user"></span>
Settings</a></li>
 <li><a href = "logout.php"><span class = "glyphicon glyphicon-login"></span> Logout</a></li>
 ?>
 <?php
 } else {
 ?>
 <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span>
Sign Up</a></li>
 <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>
Login</a></li>
 <?php
 }
 ?>
 </ul>
 </div>
 </div>
</div>