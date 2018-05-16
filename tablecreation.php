<?php
    $host = "127.0.0.1:52932";
    $user = "azure";
    $pwd = "6#vWHD_$";
    $db = "ruap";

    $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
    if(! $conn ) {
      die('Could not connect: ' . mysql_error());
    }
   
    echo 'Connected successfully';
   
    $sql = 'CREATE Database ruap';
    $retval = mysql_query( $sql, $conn );
   
    if(! $retval ) {
        die('Could not create database: ' . mysql_error());
    }
   
    echo "Database ruap created successfully\n";


    $sql_create = "CREATE TABLE registration_tbl(id INT NOT NULL
    AUTO_INCREMENT, PRIMARY KEY(id), name VARCHAR(30), email
    VARCHAR(30), date DATE);";
    
    mysql_select_db(db);
    $retval = mysql_query( $sql, $conn );
   
    if(! $retval ) {
      die('Could not create table: ' . mysql_error());
    }
   
    echo "Table registration created successfully\n";

    mysql_close($conn);
?>
