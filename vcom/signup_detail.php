<?php

 $conn = mysqli_connect("localhost", "root", "", "ecommerce");
session_start();
 $username = mysqli_real_escape_string($conn, $_POST['name']);
 $useremail = mysqli_real_escape_string($conn, $_POST['email']);
 $userpass = md5 (mysqli_real_escape_string($conn, $_POST['password']));
  $userct = mysqli_real_escape_string($conn, $_POST['contact']);
 $usercity = mysqli_real_escape_string($conn, $_POST['city']);
 $useradd = mysqli_real_escape_string($conn, $_POST['address']);
 
 $myquery = "INSERT INTO users (name, email, password, contact, city, address)  VALUES ('$username','$useremail','$userpass','$userct','$usercity','$useradd')";

 
 $signup = mysqli_query($conn, $myquery);
 
  echo "Sucessfully";
        $_SESSION['email'] = $useremail;
		$_SESSION['id'] = mysqli_insert_id($conn);
		
		echo $_SESSION['id'];
?>