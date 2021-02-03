<?php
ob_start();
session_start();
require_once 'dbconnect.php';
header('Content-type: text/html; charset=utf-8');

if( isset($_POST['reserveSeat']) ) {
  $seatid = $_POST['reserveSeat'];
  $query2 = "SELECT userSeat FROM users WHERE userSeat='$seatid'";
  $result2 = mysql_query($query2);
  $count = mysql_num_rows($result2);
  if($count!=0){
    header( 'Location: http://sjovegan-ikt.no/index.php#seatmap' ) ;
    echo "Plass er opptatt.";
  } else {
  $sql = "UPDATE users SET userSeat=$seatid WHERE userId=".$_SESSION['user'];
  $retval = mysql_query( $sql, $conn );
  if ($retval) {
    header( 'Location: http://sjovegan-ikt.no/index.php#seatmap' ) ;
  } else {
    echo "Noe gikk galt, prøv igjen senere eller kontakt support ...";
  }
}
}

if( isset($_POST['removeImage']) ) {
  $query = "UPDATE users SET userImg='0.png' WHERE userId='" . $_SESSION["user"] . "'";
  $res = mysql_query($query);
  if ($res) {
    header( 'Location: http://sjovegan-ikt.no/index.php#minside2' ) ;
  } else {
    echo "Noe gikk galt, prøv igjen senere eller kontakt support ...";
  }
}

if( isset($_POST['rammeImage']) ) {
  $query = "UPDATE users SET userImgR='1' WHERE userId='" . $_SESSION["user"] . "'";
  $res = mysql_query($query);
  if ($res) {
    header( 'Location: http://sjovegan-ikt.no/index.php#minside2' ) ;
  } else {
    echo "Noe gikk galt, prøv igjen senere eller kontakt support ...";
  }
}

if( isset($_POST['rammeImageSir']) ) {
  $query = "UPDATE users SET userImgR='0' WHERE userId='" . $_SESSION["user"] . "'";
  $res = mysql_query($query);
  if ($res) {
    header( 'Location: http://sjovegan-ikt.no/index.php#minside2' ) ;
  } else {
    echo "Noe gikk galt, prøv igjen senere eller kontakt support ...";
  }
}

if( isset($_POST['removeSeat']) ) {
  $sql = "UPDATE users SET userSeat='0' WHERE userId=".$_SESSION['user'];
  $retval = mysql_query( $sql, $conn );
  if ($retval) {
    header( 'Location: http://sjovegan-ikt.no/index.php#seatmap' ) ;
  } else {
    echo "Noe gikk galt, prøv igjen senere eller kontakt support ...";
    echo '<script type="text/javascript">';
    echo 'location.hash = "#seatmap"';
    echo '</script>';
  }
}

if( isset($_POST['removeNick']) ) {
  $sql = "UPDATE users SET userNick='' WHERE userId=".$_SESSION['user'];
  $retval = mysql_query( $sql, $conn );
  if ($retval) {
    header( 'Location: http://sjovegan-ikt.no/index.php#minside2' ) ;
  } else {
    echo "Noe gikk galt, prøv igjen senere eller kontakt support ...";
    echo '<script type="text/javascript">';
    echo 'location.hash = "#minside2"';
    echo '</script>';
  }
}

if( isset($_POST['removeCity']) ) {
  $sql = "UPDATE users SET userCity='' WHERE userId=".$_SESSION['user'];
  $retval = mysql_query( $sql, $conn );
  if ($retval) {
    header( 'Location: http://sjovegan-ikt.no/index.php#minside2' ) ;
  } else {
    echo "Noe gikk galt, prøv igjen senere eller kontakt support ...";
    echo '<script type="text/javascript">';
    echo 'location.hash = "#minside2"';
    echo '</script>';
  }
}

if( isset($_POST['removeAnsvar']) ) {
  $sql = "UPDATE users SET userRole='' WHERE userId=".$_SESSION['user'];
  $retval = mysql_query( $sql, $conn );
  if ($retval) {
    header( 'Location: http://sjovegan-ikt.no/index.php#minside2' ) ;
  } else {
    echo "Noe gikk galt, prøv igjen senere eller kontakt support ...";
    echo '<script type="text/javascript">';
    echo 'location.hash = "#minside2"';
    echo '</script>';
  }
}

if( isset($_POST['removeCrewEmail']) ) {
  $sql = "UPDATE users SET crewEmail='0' WHERE userId=".$_SESSION['user'];
  $retval = mysql_query( $sql, $conn );
  if ($retval) {
    header( 'Location: http://sjovegan-ikt.no/index.php#minside2' ) ;
  } else {
    echo "Noe gikk galt, prøv igjen senere eller kontakt support ...";
    echo '<script type="text/javascript">';
    echo 'location.hash = "#minside2"';
    echo '</script>';
  }
}

if( isset($_POST['addCrewEmail']) ) {
  $sql = "UPDATE users SET crewEmail='1' WHERE userId=".$_SESSION['user'];
  $retval = mysql_query( $sql, $conn );
  if ($retval) {
    header( 'Location: http://sjovegan-ikt.no/index.php#minside2' ) ;
  } else {
    echo "Noe gikk galt, prøv igjen senere eller kontakt support ...";
    echo '<script type="text/javascript">';
    echo 'location.hash = "#minside2"';
    echo '</script>';
  }
}


if( isset($_POST['btn-login']) ) {

 $email = trim($_POST['email']);
 $email = strip_tags($email);
 $email = htmlspecialchars($email);

 $pass = trim($_POST['pass']);
 $pass = strip_tags($pass);
 $pass = htmlspecialchars($pass);

 if(empty($email)){
  $error = true;
  $emailError2 = "Skriv inn din email.";
  echo '<script type="text/javascript">';
  echo 'location.hash = "#login"';
  echo '</script>';
 } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
  $error = true;
  $emailError2 = "Skriv inn en gyldig email.";
  echo '<script type="text/javascript">';
  echo 'location.hash = "#login"';
  echo '</script>';
 }

 if(empty($pass)){
  $error = true;
  $passError2 = "Skriv inn ditt passord.";
  echo '<script type="text/javascript">';
  echo 'location.hash = "#login"';
  echo '</script>';
 }

 // if there's no error, continue to login
 if (!$error) {

  $password = hash('sha256', $pass); // password hashing using SHA256

  $res=mysql_query("SELECT userId, userName, userPass FROM users WHERE userEmail='$email'");
  $row=mysql_fetch_array($res);
  $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row

  if( $count == 1 && $row['userPass']==$password ) {
   $_SESSION['user'] = $row['userId'];
   header( 'Location: http://sjovegan-ikt.no/index.php#minside' ) ;
 } else {
   $error = true;
   $errMSG2 = "Brukernavn eller passord er feil, prøv igjen!";
   echo '<script type="text/javascript">';
   echo 'location.hash = "#login"';
   echo '</script>';
  }
 }
}

if ( isset($_POST['updateNickname']) ) {

 if (!empty($_POST['nick'])) {
   $nick = trim($_POST['nick']);
   $nick = strip_tags($nick);
   $nick = htmlspecialchars($nick);
 }

 if (!empty($nick)) {
   if (strlen($nick) < 3) {
     $error = true;
     $nickError = "Ditt nickname må bestå av minst 3 tegn.";
     echo '<script type="text/javascript">';
     echo 'location.hash = "#nickname"';
     echo '</script>';
   }
 }

  if (!empty($nick)) {
  if( !$error ) {
    $nickQuery = "UPDATE users SET userNick='$nick' WHERE userId='" . $_SESSION["user"] . "'";
    $nickRes = mysql_query($nickQuery);
    if (!$nickRes) {
      $error = true;
      $nickError = "Klarte ikke å sette nickname!";
      echo '<script type="text/javascript">';
      echo 'location.hash = "#nickname"';
      echo '</script>';
    } else {
      header( 'Location: http://sjovegan-ikt.no/index.php#minside2' ) ;
    }
  } else {
    $errTyp = "danger";
    $errMSG = "Noe gikk galt, prøv igjen senere eller kontakt support ...";
    echo '<script type="text/javascript">';
    echo 'location.hash = "#nickname"';
    echo '</script>';
  }
}
else {
  header( 'Location: http://sjovegan-ikt.no/index.php#minside2' ) ;
}
}

if(isset($_POST['ansvar'])) {
  $ansvar = trim($_POST['ansvarText']);
  $ansvar = strip_tags($ansvar);
  $ansvar = htmlspecialchars($ansvar);
   $userId = $_SESSION['user'];
   $sql = "UPDATE users SET userRole='$ansvar' WHERE userId=$userId";
   $retval = mysql_query( $sql, $conn );
   if($retval ) {
     header( "Location: http://sjovegan-ikt.no/index.php#minside2" ) ;
   } else {
     $errTyp = "danger";
     $errMSG = "Noe gikk galt, prøv igjen senere...";
   }
}

if ( isset($_POST['changePass']) ) {
$currentPass = trim($_POST['currentPassword']);
$currentPass = strip_tags($currentPass);
$currentPass = htmlspecialchars($currentPass);

$newPass = trim($_POST['newPassword']);
$newPass = strip_tags($newPass);
$newPass = htmlspecialchars($newPass);

if(count($_POST)>0) {
  $servername22 = "hidden";
  $username22 = "hidden";
  $password22 = "hidden";
  $dbname22 = "hidden";

  // Create connection
  $conn22 = mysqli_connect($servername22, $username22, $password22, $dbname22);
  // Check connection
  if (!$conn22) {
      die("Connection failed: " . mysqli_connect_error());
  }
$sql22="SELECT userPass FROM users WHERE userId=".$_SESSION['user'];
$res22=mysqli_query($conn22, $sql22);
$userRow22=mysqli_fetch_array($res22);

$password22 = hash('sha256', $currentPass);
$newPassword = hash('sha256', $newPass);

$userId22 = $_SESSION['user'];

if($password22 == $userRow22['userPass']) {
$sql23="UPDATE users SET userPass='" . $newPassword . "' WHERE userId='" . $userId22 . "'";
$retval23=mysqli_query($conn22, $sql23);
$message = "Passord endret ...";
//echo $userRow["userPass"];
if ($retval23) {
header( "Location: http://sjovegan-ikt.no/index.php#minside2" ) ;
} else {
  $message = "Noe gikk galt, prøv igjen senere eller kontakt support ... <br>Feilmelding: " . mysqli_error($conn22) . $retval23;
  echo "<br>";
  echo $userId22;
  echo '<script type="text/javascript">';
  echo 'location.hash = "#password"';
  echo '</script>';
}
} else {
  $message = "Gammelt passord er feil.";
  echo '<script type="text/javascript">';
  echo 'location.hash = "#password"';
  echo '</script>';
}
} else {
  $message = "Noe gikk galt, prøv igjen senere eller kontakt support ...";
  echo '<script type="text/javascript">';
  echo 'location.hash = "#password"';
  echo '</script>';
}
}

if ( isset($_POST['updateCity']) ) {

   if (!empty($_POST['city'])) {
     $city = trim($_POST['city']);
     $city = strip_tags($city);
     $city = htmlspecialchars($city);
   }

   if (!empty($city)) {
     if (strlen($city) < 3) {
       $error = true;
       $cityError = "Ditt bosted må bestå av minst 3 tegn.";
       echo '<script type="text/javascript">';
       echo 'location.hash = "#city"';
       echo '</script>';
     }
   }

    if (!empty($city)) {
    if( !$error ) {
      $cityQuery = "UPDATE users SET userCity='$city' WHERE userId='" . $_SESSION["user"] . "'";
      $cityRes = mysql_query($cityQuery);
      if (!$cityRes) {
        $error = true;
        $cityError = "Klarte ikke å sette bosted!";
        echo '<script type="text/javascript">';
        echo 'location.hash = "#city"';
        echo '</script>';
      } else {
        header( 'Location: http://sjovegan-ikt.no/index.php#minside2' ) ;
      }
    } else {
      $errTyp = "danger";
      $errMSG = "Noe gikk galt, prøv igjen senere eller kontakt support ...";
      echo '<script type="text/javascript">';
      echo 'location.hash = "#city"';
      echo '</script>';
    }
  }
  else {
    header( 'Location: http://sjovegan-ikt.no/index.php#minside2' ) ;
  }
}

if ( isset($_POST['btn-signup']) ) {

 // clean user inputs to prevent sql injections
 $name = trim($_POST['name']);
 $name = strip_tags($name);
 $name = htmlspecialchars($name);

 if (!empty($_POST['nick'])) {
   $nick = trim($_POST['nick']);
   $nick = strip_tags($nick);
   $nick = htmlspecialchars($nick);
 }

 $email = trim($_POST['email']);
 $email = strip_tags($email);
 $email = htmlspecialchars($email);

 $pass = trim($_POST['pass']);
 $pass = strip_tags($pass);
 $pass = htmlspecialchars($pass);

if (!empty($_POST['city'])) {
 $city = trim($_POST['city']);
 $city = strip_tags($city);
 $city = htmlspecialchars($city);
}

 // basic name validation
 if (empty($name)) {
  $error = true;
  $nameError = "Skriv inn ditt fulle navn.";
  echo '<script type="text/javascript">';
  echo 'location.hash = "#register"';
  echo '</script>';
 } else if (strlen($name) < 3) {
  $error = true;
  $nameError = "Navnet må bestå av minst 3 tegn.";
  echo '<script type="text/javascript">';
  echo 'location.hash = "#register"';
  echo '</script>';
}

 // basic nickname validation
 if (!empty($nick)) {
   if (strlen($nick) < 3) {
     $error = true;
     $nickError = "Ditt nickname må bestå av minst 3 tegn.";
     echo '<script type="text/javascript">';
     echo 'location.hash = "#register"';
     echo '</script>';
   }
 }

if (!empty($_POST['city'])) {
 if (strlen($city) < 3) {
  $error = true;
  $cityError = "Ditt bosted må bestå av minst 3 tegn.";
  echo '<script type="text/javascript">';
  echo 'location.hash = "#register"';
  echo '</script>';
} else if (!preg_match("%^[-a-zA-Z æøåÆØÅ\/]+$%",$city)) {
  $error = true;
  $cityError = "Ditt bosted må inneholde bokstaver og mellomrom.";
  echo '<script type="text/javascript">';
  echo 'location.hash = "#register"';
  echo '</script>';
 }
}

 //basic email validation
 if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
  $error = true;
  $emailError = "Skriv inn en gyldig email.";
  echo '<script type="text/javascript">';
  echo 'location.hash = "#register"';
  echo '</script>';
 } else {
  // check email exist or not
  $query = "SELECT userEmail FROM users WHERE userEmail='$email'";
  $result = mysql_query($query);
  $count = mysql_num_rows($result);
  if($count!=0){
   $error = true;
   $emailError = "Email allerede i bruk.";
   echo '<script type="text/javascript">';
   echo 'location.hash = "#register"';
   echo '</script>';
  }
 }
 // password validation
 if (empty($pass)){
  $error = true;
  $passError = "Skriv inn et passord.";
  echo '<script type="text/javascript">';
  echo 'location.hash = "#register"';
  echo '</script>';
 } else if(strlen($pass) < 6) {
  $error = true;
  $passError = "Passordet må bestå av minst 6 tegn.";
  echo '<script type="text/javascript">';
  echo 'location.hash = "#register"';
  echo '</script>';
 }

 if ($_POST["pass"] == $_POST["passConfirm"]) {
   $errTyp = "success";
 }
 else {
   $error = true;
   $passError = "Passordene matcher ikke!";
   echo '<script type="text/javascript">';
   echo 'location.hash = "#register"';
   echo '</script>';
 }

 // password encrypt using SHA256();
 $password = hash('sha256', $pass);

 // if there's no error, continue to signup
 if( !$error ) {

  $query = "INSERT INTO users(userName,userNick,userEmail,userPass,userCity) VALUES('$name','$nick','$email','$password','$city')";
  $res = mysql_query($query);

  if ($res) {
   $errTyp = "success";
   $errMSG = "Du er nå registrert, du kan nå logge inn";
   unset($name);
   unset($nick);
   unset($email);
   unset($pass);
   unset($city);
   echo '<script type="text/javascript">';
   echo 'location.hash = "#login"';
   echo '</script>';
  } else {
   $errTyp = "danger";
   $errMSG = "Noe gikk galt, prøv igjen senere...";
   echo '<script type="text/javascript">';
   echo 'location.hash = "#register"';
   echo '</script>';
  }
 }
}
?>

<!DOCTYPE html>
<html>
<head>
<!--
Code written by Leander Christensen with great inspiration from the previous LAN-party site (Wayback Machine)
Website made with HTML, CSS, PHP, SQL and Javascript
-->
<?php
require_once "head.php";
require_once "taken.php";
require_once "dbconnect.php";
?>
<script>

</script>

<style>

</style>

</head>
<body>
<div id="wrapper">
  <nav class="navbar-default navbar-inverse" style="position:relative;">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a style="cursor:pointer;" class="active navbar-brand" id="title" onclick="newPage(&quot;index0&quot;)"><img id="tittel" src="images/logoSmall.png" alt="Sjøvegan LAN 2017"></a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="nav-item"><a onclick="newPage(&quot;info0&quot;)" style="cursor:pointer;">Informasjon</a></li>
        <li class="nav-item"><a onclick="newPage(&quot;regler0&quot;)" style="cursor:pointer;">Regler</a></li>
        <li class="nav-item"><a onclick="newPage(&quot;compo0&quot;)" style="cursor:pointer;">Compo</a></li>
        <li class="nav-item"><a onclick="newPage(&quot;crew0&quot;)" style="cursor:pointer;">Crew</a></li>
        <li class="nav-item"><a onclick="newPage(&quot;kontaktoss0&quot;)" style="cursor:pointer;">Kontakt Oss</a></li>
        <li class="nav-item"><a onclick="newPage(&quot;seatmap0&quot;)" style="cursor:pointer;">Seatmap</a></li>
        <?php
        if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
        ?>
          <li class="nav-item" id="right"><a onclick="newPage(&quot;minside0&quot;)" style="cursor:pointer;">Min Side</a></li>
          <li class="nav-item"><a href="logout.php">Logg ut</a></li>
        <?php } else { ?>
          <li class="nav-item" id="right"><a onclick="newPage(&quot;login0&quot;)">Logg inn</a></li>
          <li class="nav-item"><a onclick="newPage(&quot;register0&quot;)">Registrer ny bruker</a></li>
        <?php
        }
        ?>
      </ul>
    </div>
    </div>
  </nav>
<div class="container main" id="main">
<div id="index0">
  <?php
    require_once("pages/index.php");
  ?>
</div>
<div id="info0">
  <?php
    require_once("pages/info.php");
  ?>
</div>
<div id="regler0">
  <?php
    require_once("pages/regler.php");
  ?>
</div>
<div id="compo0">
  <?php
    require_once("pages/compo.php");
  ?>
</div>
<div id="crew0">
  <?php
    require_once("pages/crew.php");
  ?>
</div>
<div id="kontaktoss0">
  <?php
    require_once("pages/kontaktoss.php");
  ?>
</div>
<div id="seatmap0">
  <?php
    require_once("pages/seatmap.php");
  ?>
</div>
<div id="minside0">
  <?php
  if (isset($_SESSION['user'])) {
    require_once("pages/minside.php");
  }
  ?>
</div>
<div id="nickname0">
  <?php
  if (isset($_SESSION['user'])) {
    require_once("pages/nickname.php");
  }
  ?>
</div>
<div id="city0">
  <?php
  if (isset($_SESSION['user'])) {
    require_once("pages/city.php");
  }
  ?>
</div>
<div id="password0">
  <?php
  if (isset($_SESSION['user'])) {
    require_once("pages/password.php");
  }
  ?>
</div>
<div id="ansvar0">
  <?php
  if (isset($_SESSION['user'])) {
    require_once("pages/ansvar.php");
  }
  ?>
</div>
<div id="login0">
  <?php
  if (!isset($_SESSION['user'])) {
    require_once("pages/login.php");
  }
  ?>
</div>
<div id="register0">
  <?php
  if (!isset($_SESSION['user'])) {
    require_once("pages/register.php");
  }
  ?>
</div>
</div>
<div class="container" id="footer">
<hr id="footerHR">
<p id="footerP">Utviklet av <a href="http://leanderchristensen.com" target="_blank">Leander Christensen</a></p>
</div>
</body>
</html>
