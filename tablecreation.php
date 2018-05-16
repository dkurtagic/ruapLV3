<?php
    $host = "ruapdbserver.mysql.database.azure.com";
    $user = "ruapUser";
    $pwd = "ruap1234";
    $db = "ruap";

    $con = mysqli_connect($hosst,$user,$pwd);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
?>
