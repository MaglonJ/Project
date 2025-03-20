<?php
session_start();
$_servername = "localhost";
$_username = "root";
$_password = "";
$_dbname = "GMS_db";                          
$conn = new mysqli($_servername, $_username, $_password, $_dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
