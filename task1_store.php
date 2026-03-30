<?php
$host = "sql109.infinityfree.com";
$user = "if0_41511434";
$pass = "4ECOVOsmdO";
$db   = "if0_41511434_college";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
