<?php

#DB_CONNECTION=mysql
#DB_HOST="127.0.0.1"
#DB_PORT=3306
#DB_DATABASE=dipendr4_dss
#DB_USERNAME="dipendr4_udipendra"
#DB_PASSWORD="a1fN4V$RNYBV"





$servername = "127.0.0.1";
$username = "dipendr4_udipendra";
$password = 'a1fN4V$RNYBV';

// Create connection
 $conn = new mysqli($servername, $username, $password);

 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
   }
   echo "Connected successfully";
   ?>
