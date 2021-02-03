<?php
ob_start();
//session_start();
//require_once 'dbconnect.php';
//$q = intval($_GET['q']);

$servername = "hidden";
$username = "hidden";
$password = "hidden";
$dbname = "hidden";

//Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql="SELECT userId FROM users WHERE userCrew ='0'";
$result = mysqli_query($conn,$sql);

$sql1="SELECT userId FROM users WHERE userSeat > '0' AND userSeat < '81'";
$result1 = mysqli_query($conn,$sql1);

$sql2="SELECT userId FROM users WHERE userImgR ='1'";
$result2 = mysqli_query($conn,$sql2);

$sql3="SELECT userId FROM users WHERE userNick =''";
$result3 = mysqli_query($conn,$sql3);

$sql4="SELECT userId FROM users WHERE userCity =''";
$result4 = mysqli_query($conn,$sql4);

$sql5="SELECT userId FROM users WHERE userImg ='0.png'";
$result5 = mysqli_query($conn,$sql5);

$sql6="SELECT userId FROM users WHERE userCrew ='1'";
$result6 = mysqli_query($conn,$sql6);

$sql7="SELECT userId FROM users WHERE userCity ='Sjøvegan'";
$result7 = mysqli_query($conn,$sql7);
$sql75="SELECT userId FROM users WHERE userCity ='Salangen'";
$result75 = mysqli_query($conn,$sql75);

$sql8="SELECT userId FROM users WHERE userSeat > '80' AND userSeat < '97'";
$result8 = mysqli_query($conn,$sql8);

$a = mysqli_num_rows($result7);
$b = mysqli_num_rows($result75);
$c = mysqli_num_rows($result6);
$d = mysqli_num_rows($result);
$e = mysqli_num_rows($result1);
?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="/images/logoSmall.png">
<link rel="stylesheet" type="text/css" href="libraries/leander.css"></script>
<link href="libraries/roboto.css" rel="stylesheet">
<style>
body {
  padding: 0;
  margin: 0;
  background-color: #0d0d0d;
  position: fixed;
}
#stats {
  position: fixed;
  width: 95%;
  max-width: 95%;
  height: 92%;
  margin-left: 2.5%;
  margin-right: 2%;
  margin-top: 2%;
  background-color: #252525;
}
#customers0 {
  /*font-size: 100px;*/
  font-size: 650%;
  max-width: 100%;
  position: fixed;
  padding: 0;
  margin-right: 0;
  color: #ccc;
  font-family: 'Roboto', sans-serif !important;
  margin-left: 1%;
}
#customers {
  font-size: 3250%;
  position: fixed;
  color: #fff;
  font-family: 'Roboto', sans-serif !important;
}
#disc {
  position: fixed;
  bottom: 4%;
  color: #fff;
  font-family: 'Roboto', sans-serif !important;
  font-size: 75%;
}
#minor {
  right: 2.5%;
  top: 4%;
  position: fixed;
  width: 30%;
  height: 82%;
  float: right;
  padding-top: 7.5%;
}
.minorStats {
  color: #fff;
  font-family: 'Roboto', sans-serif !important;
  position: static;
  font-size: 150%;
  top: 5%;
}

.minorNumbers {
  color: #fff;
  font-family: 'Roboto', sans-serif !important;
  position: static;
  top: 5%;
  font-size: 150%;
}
</style>
</head>
<body>
<div id="stats">
<span id="customers0">REGISTRERTE DELTAKERE</span>
<br>
<span id="customers"><?php echo mysqli_num_rows($result); ?></span>
<div id="minor">
<table style="width:75%">
<tr><td><span class="minorStats">Registered users </span></td><td><span class="minorNumbers"><?php echo $c + $d; ?></span></td></tr>
<tr><td><span class="minorStats">Seats left (non-crew)</span></td><td><span class="minorNumbers"><?php echo 80 - $e; ?></span></td></tr>
<tr><td><span class="minorStats">Seats taken (non-crew)</span></td><td><span class="minorNumbers"><?php echo mysqli_num_rows($result1); ?></span></td></tr>
<tr><td><span class="minorStats">Rectangle frame </span></td><td><span class="minorNumbers"><?php echo mysqli_num_rows($result2); ?></span></td></tr>
<tr><td><span class="minorStats">No nickname </span></td><td><span class="minorNumbers"><?php echo mysqli_num_rows($result3); ?></span></td></tr>
<tr><td><span class="minorStats">No bosted </span></td><td><span class="minorNumbers"><?php echo mysqli_num_rows($result4); ?></span></td></tr>
<tr><td><span class="minorStats">No image </span></td><td><span class="minorNumbers"><?php echo mysqli_num_rows($result5); ?></span></td></tr>
<tr><td><span class="minorStats">Crew </span></td><td><span class="minorNumbers"><?php echo mysqli_num_rows($result6); ?></span></td></tr>
<tr><td><span class="minorStats">Crew seats taken</span></td><td><span class="minorNumbers"><?php echo mysqli_num_rows($result8); ?></span></td></tr>
<tr><td><span class="minorStats">Salangen/Sjøvegan </span></td><td><span class="minorNumbers"><?php echo $a + $b; ?></span></td></tr>
</table>
</div>
</div>
</body>
</html>
