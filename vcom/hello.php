<?php

// Create connection
$conn = mysqli_connect("localhost", "root", "", "ecommerce")
or die(mysqli_error($conn));

echo "Connected successfully";
$sql = "SELECT * FROM users";
$sqlre = mysqli_query($conn,$sql)
or die(mysqli_error($conn));

while($count = mysqli_fetch_array($sqlre)) 
{
"</br>";	
echo $count[0]."</br>";
echo $count[1]."</br>";
echo $count[2]."</br>";
echo $count[3]."</br>";
echo $count[4]."</br>";
echo $count[5]."</br>";
}
?>
