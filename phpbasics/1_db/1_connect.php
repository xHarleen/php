<?php 
  $conn = new mysqli("localhost", "root", "", "project");
  echo "Minia";
  echo $conn->connect_errno;
 ?>