<?php

 $conn = mysqli_connect("localhost", "root", "", "ecommerce");


 $useremail = mysqli_real_escape_string($conn, $_POST['email']);
 $userpass = md5 (mysqli_real_escape_string($conn, $_POST['password']));
 
 $myquery = "SELECT email , password FROM users WHERE email='$useremail' ";
 
  $result = mysqli_query($conn, $myquery);
  
while ($row = mysqli_fetch_array($result)) {

  
        $check_email = $row['email'];
        $check_password = md5 ($row['password']);
		 
		

    
    if ($check_email == $useremail && $userpass == $check_password) {
        $message = "ok";
        echo "<script type='text/javascript'>alert('$message');</script>";
		echo "$check_email";
		echo "$check_password";
		
    
    } else {
        $message = "No";
        echo "<script type='text/javascript'>alert('$message');</script>";
		echo "Failed!!";
	}
}

?>