
<?php
 $conn = mysqli_connect("localhost", "root", "", "ecommerce")
or die(mysqli_error($conn));
 
 $myquery = mysqli_query($conn, "SELECT * FROM users");
      
$row = mysqli_fetch_array($myquery);

echo $row[0];
echo $row[1];
echo $row[2];
echo $row[3];
echo $row[4];
echo $row[5];
echo $row[6];

?>