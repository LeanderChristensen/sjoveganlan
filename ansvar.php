<?php
ob_start();
session_start();
require_once 'dbconnect.php';

// if session is not set this will redirect to login page
if( !isset($_SESSION['user']) ) {
 header("Location: http://sjovegan-ikt.no/index.php#login");
 exit;
}

// select loggedin users detail
$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);

$retval = '';

$userId = $_SESSION['user'];
$crew = $userRow['userCrew'];
$res=mysql_query("SELECT * FROM users WHERE userId='$userId'");
$row=mysql_fetch_array($res);
if ($crew == 1 ) {

}
if ($crew == 0 ) {
echo "Du er ikke crew!";
header("Location: http://sjovegan-ikt.no/index.php");
exit;
}

 //else if ($_SESSION['userCrew'] == 1 ) { header("Location: index.php"); exit;}

if(isset($_POST['ansvar'])) {
  $ansvar = trim($_POST['ansvar']);
  $ansvar = strip_tags($ansvar);
  $ansvar = htmlspecialchars($ansvar);
   $userId = $_SESSION['user'];
   $sql = "UPDATE users SET userRole='$ansvar' WHERE userId=$userId";
   $retval = mysql_query( $sql, $conn );
   unset($ansvar);
   header("Refresh:0");
   if(!$retval ) {
     $errTyp = "danger";
     $errMSG = "Noe gikk galt, prøv igjen senere...";
   }
}else {
   ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sjøvegan LAN - Crew</title>
<link rel="icon" href="/images/icon.ico">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
body {
  background-color: #0086b3;
  height: 100%;
}

p {
  font-size: 30px;
  text-align: center;
  margin-right: 75px;
  color: black;
}

a {
  color: black;
}

</style>

</head>
<body>
<div class="container" style="margin: auto; width: 650px;">
<p style="margin-top:44%;">Ditt ansvarsområde er:</p>
<p style="margin-bottom:3%;color:red;"><?php echo $userRow['userRole']; ?></p>
  <form method="post" action = "<?php $_PHP_SELF ?>">
     <div class="input-group">
      <span class="input-group-btn">
        <input name="update" type="submit" id="ansvarButton" value="Endre" class="btn btn-default submit">
      </span>

      <input name="ansvar" class="form-control" style="width:500px; margin: auto;" type="text" value="<?php echo $ansvar ?>" id="ansvarText">
      <span class="text-danger"><?php echo $ansvarError; ?></span>
     </div>
  </form>
<p style="margin-top:3%;">Her kan du skrive inn hva som skal vises i "Ansvarsområde" på <a href="http://lan.leanderchristensen.com/crew.php" target="_blank">Crew Siden</a></p>
<div style="text-align:center;margin-right:80px;margin-top:3%">
<a class="btn btn-default" href="http://lan.leanderchristensen.com/" role="link">Gå tilbake til nettsiden</a>
</div>
</div>

<?php
 }
  ?>
</body>
</html>
