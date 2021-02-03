<?php
ob_start();
session_start();
//require_once 'dbconnect.php';
$q = intval($_GET['q']);

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

mysqli_select_db($conn,"hidden");
$sql="SELECT * FROM users WHERE userSeat = '".$q."'";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($result);

if (isset($_SESSION['user'])) {
$sql2="SELECT * FROM users WHERE userId=".$_SESSION['user'];
$result2 = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_array($result2);
}


if (mysqli_num_rows($result) > 0) {
  if ($row["userImgR"] == 0) {
    $ramme = "style='border-radius: 50%;'";
  }
?>
<img src="userImg/<?php echo $row["userImg"]; ?>" <?php echo $ramme; ?> id="pic2">
<?php
    echo "<span class=seatName>Navn:</span><span class=seatName2>" . $row['userName'] . "</span><br>";
    if (!empty($row['userNick'])) {
      echo "<span class=seatNick>Nickname:</span><span class=seatNick2>" . $row['userNick'] . "</span><br>";
    }
    if (!empty($row['userCity'])) {
      echo "<span class=seatCity>Bosted:</span><span class=seatCity2>" . $row['userCity'] . "</span><br>";
    }
  if ($row2['userSeat'] == $q && isset($_SESSION['user'])) {
    echo "<form method='post'> <button id='removeSeat' type='submit' class='btn btn-block btn-danger' name='removeSeat'>Fjern reservasjon</button> </form>";
  }
} else {
  if ($q > 80 && $q < 97) {
    echo "<p>Dette er en crew plass.</p>";
    if ($row2['userCrew'] == 1 && $row2['userSeat'] == 0) {
      echo "<p>Denne plassen er ledig!</p>";
      echo "<form method='post'> <button id='reserveSeat' type='submit' value='" . $q . "' class='btn btn-block btn-danger' name='reserveSeat'>Reserver plass</button> </form>";
    } elseif ($row2['userCrew'] == 1 && $row2['userSeat'] != 0) {
      echo "<p>Denne plassen er ledig!</p>";
      echo "<p>Du har allerede reservert plass: " . $row2['userSeat'] . "</p>";
    }
  } else {
    if ($row2['userSeat'] == 0 && isset($_SESSION['user'])) {
      echo "<p>Denne plassen er ledig!</p>";
      echo "<form method='post'> <button id='reserveSeat' type='submit' value='" . $q . "' class='btn btn-block btn-danger' name='reserveSeat'>Reserver plass</button> </form>";
      //echo "Seatmappen er stengt, den åpner 10. februar 2017 - klokken 18:00";
    } elseif ($row2['userSeat'] != 0 && isset($_SESSION['user'])) {
      echo "<p>Denne plassen er ledig!</p>";
      echo "<p>Du har allerede reservert plass: " . $row2['userSeat'] . "</p>";
    } else {
      echo "<p>Denne plassen er ledig!</p>";
      //echo "Seatmappen er stengt, den åpner 10. februar 2017 - klokken 18:00";
    }
  }
}
mysqli_close($conn);
?>
