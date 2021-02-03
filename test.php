<?php
//ob_start();
//session_start();
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

//$res=mysql_query("SELECT * FROM users WHERE");
//$row=mysql_fetch_array($res);

//$sql = "SELECT * FROM users WHERE userSeat=2";
//$result = mysqli_query($conn, $sql);

//$res=mysql_query("SELECT * FROM users WHERE userId=1");
//$row=mysql_fetch_array($res);

//$row_cnt = $res->num_rows;

//if (mysqli_num_rows($result) > 0) {
//    // output data of each row
//    while($row = mysqli_fetch_assoc($result)) {
//        echo "userId: " . $row["userId"]. " - userName and userNick: " . $row["userName"]. " " . $row["userNick"]. "<br>";
//    }
//} else {
//    echo "0 results";
//}

//$res=mysql_query("SELECT userPass FROM users WHERE userId=2");
//$row=mysql_fetch_array($res);
//echo $row["userPass"];

/*
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
*/

?>
<table style="width:100%">
  <tr>
    <th>Navn</th>
    <th>Plass</th>
  </tr>
<?php
$sql5 = "SELECT userSeat, userName FROM users WHERE userSeat>0 ORDER BY userSeat";
$result5 = mysqli_query($conn, $sql5);
//$row5 = mysqli_fetch_array($result5, MYSQLI_NUM);

//while ($row5 = mysqli_fetch_array($result5, MYSQLI_NUM)) {     LIKE '%$q%'
//    print_r($row5);
//    echo "<br>";
//}

//echo $row5["userId"];  LIMIT 20
//echo "<br>";
//echo $row5[0];
//echo "<br>";
if (mysqli_num_rows($result5) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result5)) {
        echo "<tr><th>" . $row["userName"]. "</th><th>" . $row["userSeat"]. "</th></tr>";
    }
} else {
    echo "0 results";
}
?>
</table>
<?php
mysqli_close($conn);
?>
