<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "masterdb";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if ($conn) {
  echo "connection established";
}else{
    echo "connection Failed";
}
?> 