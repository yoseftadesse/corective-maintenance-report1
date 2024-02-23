<?php
$conn=mysqli_connect("localhost","root","","cm");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
mysqli_select_db($conn,"cm");
#mysqli_close($conn);
?> 