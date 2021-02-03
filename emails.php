<?php
require_once 'dbconnect.php';
header('Content-type: text/html; charset=utf-8');

$servername = "hidden";
$username = "hidden";
$password = "hidden";
$dbname = "hidden";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT userEmail FROM users WHERE userSeat > '0' AND userSeat < '81'";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) {
    echo $row["userEmail"];
    echo "<br>";
}

?>
