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

 $sql = "SELECT userId, userName, userNick, userEmail, userCity, userSeat, userCrew, userImg FROM users";
 $result = mysqli_query($conn, $sql);

if(isset($_POST['ansvarButton'])) {
  $ansvar = trim($_POST['ansvar']);
  $ansvar = strip_tags($ansvar);
  $ansvar = htmlspecialchars($ansvar);
   $userId = $_SESSION['user'];
   $sql2 = "UPDATE users SET userRole='$ansvar' WHERE userId=$userId";
   $retval = mysqli_query($conn,$sql2);
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
<?php
  require_once "head.php";
?>
<script>
     function validatePassword() {
     var currentPassword,newPassword,confirmPassword,output = true;

     currentPassword = document.frmChange.currentPassword;
     newPassword = document.frmChange.newPassword;
     confirmPassword = document.frmChange.confirmPassword;

     if(!currentPassword.value) {
     currentPassword.focus();
     document.getElementById("currentPassword").innerHTML = "required";
     output = false;
     }
     else if(!newPassword.value) {
     newPassword.focus();
     document.getElementById("newPassword").innerHTML = "required";
     output = false;
     }
     else if(!confirmPassword.value) {
     confirmPassword.focus();
     document.getElementById("confirmPassword").innerHTML = "required";
     output = false;
     }
     if(newPassword.value != confirmPassword.value) {
     newPassword.value="";
     confirmPassword.value="";
     newPassword.focus();
     document.getElementById("confirmPassword").innerHTML = "not same";
     output = false;
     }
     return output;
     }

     var currentPage = "index0";

   </script>

   <style>

   </style>

   </head>
   <body>
   <div id="wrapper">
     <nav class="navbar-default navbar-inverse" style="position:relative;">
       <div class="container">
         <div class="navbar-header">
           <a style="cursor:pointer;" class="active navbar-brand" id="title" href="http://sjovegan-ikt.no/index.php"><img id="tittel" src="images/logoSmall.png" alt="Sjøvegan LAN 2017"></a>
           <!-- <a class="active navbar-brand" id="titleMobile" href="http://lan.leanderchristensen.com/index.php">SLAN 2017</a> -->
         </div>
         <ul class="nav navbar-nav">
           <li class="nav-item"><a href="http://sjovegan-ikt.no/index.php#minside" style="cursor:pointer;">Tilbake til nettsiden</a></li>
         </ul>
       </div>
       </div>
     </nav>
<div class="container main" id="main">
<h1 style="text-align:center;">Admin Page</h1>
<a href="stats.php" target="_blank"><button id="adminPage" class="btn btn-block btn-danger">Statistics</button></a>
<?php
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
mysql_query("UPDATE users set userPass='" . $newPassword . "' WHERE userId='" . $_SESSION["user"] . "'");
$message = "Password Changed";
} else {
  $message = "Current Password is not correct";
}
}
 ?>
<!--
 <form class="center" name="frmChange" method="post" action="" onSubmit="return validatePassword()">
 <div class="center" style="width:100%;">
 <div class="message center"><?php //if(isset($message)) { echo $message; } ?></div>
 <table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
 <tr class="tableheader">
 <td class="center" colspan="2" style="margin-left:25px;font-size:24px;margin-bottom: 25px !important;">Change Password</td>
 </tr>
 <tr>
 <td class="center" width="100%"><label>Current Password</label></td>
 <td class="center" width="100%"><input type="password" name="currentPassword" class="txtField"/><span id="currentPassword"  class="required"></span></td>
 </tr>
 <tr>
 <td class="center"><label>New Password</label></td>
 <td><input type="password" name="newPassword" class="txtField"/><span id="newPassword" class="required"></span></td>
 </tr>
 <td><label>Confirm Password</label></td>
 <td><input type="password" name="confirmPassword" class="txtField"/><span id="confirmPassword" class="required"></span></td>
 </tr>
 <tr>
 <td colspan="2"><input type="submit" name="submit" value="Submit" class="btn btnSubmit"></td>
 </tr>
 </table>
 </div>
 </form>
 <p class="center" style="margin-top:25px;">Ditt ansvarsområde er:</p>
 <p class="center"><?php //echo $userRow['userRole']; ?></p>
   <form method="post" action = "<?php //$_PHP_SELF ?>">
      <div class="input-group center">
       <span class="input-group-btn center">
         <input style="margin-left: 235px;" name="ansvarButton" type="submit" id="ansvarButton" value="Endre" class="btn btn-default submit">
       </span>

       <input name="ansvar" class="form-control center" style="width:500px; display: block; margin-left: 0px;" type="text" value="<?php //echo $ansvar ?>" id="ansvarText">
       <span class="text-danger center"><?php //echo $ansvarError; ?></span>
      </div>
   </form>
 <p class="center">Her kan du skrive inn hva som skal vises i "Ansvarsområde" på <a href="http://sjovegan-ikt.no/index.php#crew" target="_blank">Crew Siden</a></p>
-->
 <div style="text-align:center;margin-right:80px;margin-top:3%">
<h1 style="margin-top:0px;margin-bottom:0px;">Database</h1>
  <table style="width:100%;margin-left:50px;">
    <tr>
      <th>userId</th>
      <th>userName</th>
      <th>userNick</th>
      <th>userEmail</th>
      <th>userCity</th>
      <th>userSeat</th>
      <th>userCrew</th>
      <th>userImg</th>
    </tr>
    <?php
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "<tr><th>" . $row["userId"]. "</th><th>" . $row["userName"]. "</th><th>" . $row["userNick"]. "</th><th>" . $row["userEmail"]. "</th><th>" . $row["userCity"]. "</th><th>" . $row["userSeat"]. "</th><th>" . $row["userCrew"]. "</th><th>" . $row["userImg"]. "</th></tr>";
        }
    } else {
        echo "0 results";
    }
    ?>
  </table>
</div>
<?php
 }
 mysqli_close($conn);
  ?>
<div class="container" id="footer">
<hr id="footerHR">
<p id="footerP">Utviklet av Leander Christensen</p>

</div>
</body>
</html>
