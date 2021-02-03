<?php
ob_start();
session_start();
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

echo "seat - name<br>";

for ($x = 1; $x <= 96; $x++) {
  $sql = "SELECT * FROM users WHERE userSeat=$x";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  if (mysqli_num_rows($result) > 0) {
    ${'seat' . $x} = $row['userName'];
    echo $x;
    echo " - ";
    echo ${'seat' . $x};
    echo "<br>";
  } else {
    ${'seat' . $x} = 0;
    echo $x;
    echo " - ";
    echo ${'seat' . $x};
    echo "<br>";
  }
}

mysqli_close($conn);
?>
