<?php
// Database Configuration - AgriConnect Marketplace
// Author: R. O. Onalaja

$host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "agric_marketplace";

$conn = new mysqli($host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

date_default_timezone_set('Africa/Lagos');
?>
