<?php
ob_start();
//session_start();
require_once 'dbconnect.php';

$q = 1;
$q = intval($_GET['q']);
$ppwajvcnox = 13;

if ($q == 13) {
  $u = 13;
} else {
  header("Location: http://sjovegan-ikt.no/index.php");
  exit;
}

//if($q == 0) {
// header("Location: http://sjovegan-ikt.no/index.php");
// exit;
//}

echo $q;

$currentPass = trim($_POST['currentPassword']);
$currentPass = strip_tags($currentPass);
$currentPass = htmlspecialchars($currentPass);

$newPass = trim($_POST['newPassword']);
$newPass = strip_tags($newPass);
$newPass = htmlspecialchars($newPass);

if(count($_POST)>0) {
$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);

$password = hash('sha256', $currentPass);
$newPassword = hash('sha256', $newPass);

if($password == $userRow["userPass"]) {
mysql_query("UPDATE users set userPass='" . $newPassword . "' WHERE userId='" . $u . "'");
$message = "Password Changed";
} else {
  $message = "Current Password is not correct";
}
}
?>

<!DOCTYPE html>
<html>
<head>
<?php
require_once 'head.php';
?>
<style>
.message {
color: #FF0000;
}
</style>
<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
currentPassword.focus();
document.getElementById("currentPassword").innerHTML = "Vennligst skriv ditt passord";
output = false;
}
else if(!newPassword.value) {
newPassword.focus();
document.getElementById("newPassword").innerHTML = "Vennligst skriv et passord";
output = false;
}
else if(!confirmPassword.value) {
confirmPassword.focus();
document.getElementById("confirmPassword").innerHTML = "Vennligst gjenta passordet";
output = false;
}
if(newPassword.value != confirmPassword.value) {
newPassword.value="";
confirmPassword.value="";
newPassword.focus();
document.getElementById("confirmPassword").innerHTML = "Passordene matcher ikke";
output = false;
}
return output;
}
</script>
</head>
<body style="min-height: 100%;height:100%;">
  <nav class="navbar-default navbar-inverse" style="position:relative;">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" id="title" href="http://lan.leanderchristensen.com/index.php"><img id="tittel" src="images/logoSmall.png" alt="Sjøvegan LAN 2017"></img></a>
        <!-- <a class="active navbar-brand" id="titleMobile" href="http://lan.leanderchristensen.com/index.php">SLAN 2017</a> -->
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="nav-item"><a href="http://lan.leanderchristensen.com/info.php">Informasjon</a></li>
        <li class="nav-item"><a href="http://lan.leanderchristensen.com/regler.php">Regler</a></li>
        <li class="nav-item"><a href="http://lan.leanderchristensen.com/compo.php">Compo</a></li>
        <li class="nav-item"><a href="http://lan.leanderchristensen.com/crew.php">Crew</a></li>
        <li class="nav-item"><a href="http://lan.leanderchristensen.com/kontaktoss.php">Kontakt Oss</a></li>
        <li class="nav-item"><a href="http://lan.leanderchristensen.com/seatmap.php">Seatmap</a></li>
        <?php
        if(isset($_SESSION['user']) && !empty($_SESSION['user'])) {
        ?>
          <li class="nav-item" id="right"><a href="http://lan.leanderchristensen.com/minside.php">Min Side</a></li>
          <li class="nav-item"><a href="http://lan.leanderchristensen.com/logout.php">Logg ut</a></li>
        <?php } else { ?>
          <li class="nav-item" id="right"><a href="http://lan.leanderchristensen.com/login.php">Logg inn</a></li>
          <li class="nav-item"><a href="http://lan.leanderchristensen.com/register.php">Registrer ny bruker</a></li>
        <?php
        }
        ?>
      </ul>
    </div>
    </div>
  </nav>
<div class="container" style="width:1055px;background-color:#a6a6a6;margin:auto;min-height: 100%;height:100%;">

  <form name="frmChange" method="post" action="" onSubmit="return validatePassword()">
  <div style="width:500px;">
  <div class="message"><?php if(isset($message)) { echo $message; } ?></div>
  <table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
  <tr class="tableheader">
  <td colspan="2">Change Password</td>
  </tr>
  <tr>
  <td width="40%"><label>Current Password</label></td>
  <td width="60%"><input type="password" name="currentPassword" class="txtField"><span id="currentPassword"  class="required"></span></td>
  </tr>
  <tr>
  <td><label>New Password</label></td>
  <td><input type="password" name="newPassword" class="txtField"><span id="newPassword" class="required"></span></td>
  </tr>
  <td><label>Confirm Password</label></td>
  <td><input type="password" name="confirmPassword" class="txtField"><span id="confirmPassword" class="required"></span></td>
  </tr>
  <tr>
  <td colspan="2"><input type="submit" name="changePass" value="Submit" class="btn btnSubmit"></td>
  </tr>
  </table>
  </div>
  </form>

</div>

</div>
</div>

<div class="container" style="width:1055px;background-color:#a6a6a6;" id="footer">

  <hr style="padding-top:10px;">
  <p style="padding-bottom:10px;">Copyright © <?php echo Date(Y);?> Laget av Leander Christensen</p>
</div>
</body>
</html>
