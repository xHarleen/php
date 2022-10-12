<?php 
  $conn = new mysqli("localhost", "root", "", "project23");
 

  // Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
  // echo $conn->connect_errno;

 ?>