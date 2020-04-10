
<?php

$servername = "remotemysql.com";
$username = "YJezWR64U1";
$password = "sCK0HC1dJS";
$database_name ="YJezWR64U1";
$port = 3306;

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database_name,$port);

// Check connection
if (!$conn) {
    ("Connection failed: " . mysqli_connect_error());
}

?>