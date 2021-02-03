<?php
 session_start();
 if( isset($_SESSION['user'])!="" ){
  header("Location: index2.php");
 }
 include_once 'dbconnect.php';

 $error = false;
 header('Content-type: text/html; charset=utf-8');
 if( isset($_POST['btn-login']) ) {

  // prevent sql injections/ clear user invalid inputs
  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);

  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  // prevent sql injections / clear user invalid inputs

  if(empty($email)){
   $error = true;
   $emailError = "Please enter your email address.";
  } else if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Please enter valid email address.";
  }

  if(empty($pass)){
   $error = true;
   $passError = "Please enter your password.";
  }

  // if there's no error, continue to login
  if (!$error) {

   $password = hash('sha256', $pass); // password hashing using SHA256

   $res=mysql_query("SELECT userId, userName, userPass FROM users WHERE userEmail='$email'");
   $row=mysql_fetch_array($res);
   $count = mysql_num_rows($res); // if uname/pass correct it returns must be 1 row

   if( $count == 1 && $row['userPass']==$password ) {
    $_SESSION['user'] = $row['userId'];
    header("Location: minside.php");
  } else {
    $errMSG = "Incorrect Credentials, Try again...";
   }

  }

 }
 if ( isset($_POST['btn-signup']) ) {

$date = date('dd-mm-YY', strtotime($date_from_sql)); //date format

  // clean user inputs to prevent sql injections
  $name = trim($_POST['name']);
  $name = strip_tags($name);
  $name = htmlspecialchars($name);

  $nick = trim($_POST['nick']);
  $nick = strip_tags($nick);
  $nick = htmlspecialchars($nick);

  $email = trim($_POST['email']);
  $email = strip_tags($email);
  $email = htmlspecialchars($email);

  $pass = trim($_POST['pass']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);

  $date = trim($_POST['date']);
  $date = strip_tags($date);
  $date = htmlspecialchars($date);

  $city = trim($_POST['city']);
  $city = strip_tags($city);
  $city = htmlspecialchars($city);

  // basic name validation
  if (empty($name)) {
   $error = true;
   $nameError = "Skriv inn ditt fulle navn.";
  } else if (strlen($name) < 3) {
   $error = true;
   $nameError = "Navnet må bestå av minst 3 tegn.";
 } else if (!preg_match("%^[-a-zA-Z æøåÆØÅ\/]+$%",$name)) {
   $error = true;
   $nameError = "Navnet må inneholde bokstaver og mellomrom.";
  }

  // basic nickname validation
  if (empty($nick)) {
   $error = true;
   $nickError = "Skriv inn ditt nickname";
 } else if (strlen($nick) < 3) {
   $error = true;
   $nickError = "Ditt nickname må bestå av minst 3 tegn.";
 } else if (!preg_match("%^[-a-zA-Z æøåÆØÅ\/]+$%",$nick)) {
   $error = true;
   $nickError = "Ditt nickname må inneholde bokstaver og mellomrom.";
  }

  // basic city validation
  if (empty($city)) {
   $error = true;
   $cityError = "Skriv inn ditt bosted.";
 } else if (strlen($city) < 3) {
   $error = true;
   $cityError = "Ditt bosted må bestå av minst 3 tegn.";
 } else if (!preg_match("%^[-a-zA-Z æøåÆØÅ\/]+$%",$city)) {
   $error = true;
   $cityError = "Ditt bosted må inneholde bokstaver og mellomrom.";
  }

  //basic email validation
  if ( !filter_var($email,FILTER_VALIDATE_EMAIL) ) {
   $error = true;
   $emailError = "Skriv inn en gyldig email.";
  } else {
   // check email exist or not
   $query = "SELECT userEmail FROM users WHERE userEmail='$email'";
   $result = mysql_query($query);
   $count = mysql_num_rows($result);
   if($count!=0){
    $error = true;
    $emailError = "Email allerede i bruk.";
   }
  }
  // password validation
  if (empty($pass)){
   $error = true;
   $passError = "Skriv inn et passord.";
  } else if(strlen($pass) < 6) {
   $error = true;
   $passError = "Passordet må bestå av minst 6 tegn.";
  }

  if ($_POST["pass"] == $_POST["passConfirm"]) {
    $errTyp = "success";
  }
  else {
    $error = true;
    $passError = "Passordene matcher ikke!";
  }

  if(!isset($error)){

      //hash the password
      $hashedpassword = $user->password_hash($_POST['password'], PASSWORD_BCRYPT);

}

  // password encrypt using SHA256();
  $password = hash('sha256', $pass);

  // if there's no error, continue to signup
  if( !$error ) {

   $query = "INSERT INTO users(userName,userNick,userEmail,userPass,userDate,userCity) VALUES('$name','$nick','$email','$password','$date','$city')";
   $res = mysql_query($query);

   if ($res) {
    $errTyp = "success";
    $errMSG = "Du er nå registrert, du kan nå logge inn";
    unset($name);
    unset($nick);
    unset($email);
    unset($pass);
    unset($date);
    unset($city);
   } else {
    $errTyp = "danger";
    $errMSG = "Noe gikk galt, prøv igjen senere...";
   }

  }


 }
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sjøvegan LAN</title>
<link rel="icon" href="/images/icon.ico">
<link rel="stylesheet" type="text/css" href="css/style.css">
<?php
require_once 'head.php';
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="js/script.js"></script>
<script src="https://raw.githubusercontent.com/phstc/jquery-dateFormat/master/dist/jquery-dateFormat.js"></script>
<script src="https://raw.githubusercontent.com/phstc/jquery-dateFormat/master/dist/jquery-dateFormat.min.js"></script>
<style>

</style>

<script>

</script>

</head>
<body>
<div id="wrapper">

<div class="container" id="main">

<!-- START START START START START START START START START START START START START START START START START START START START START START START START START START START -->

<div id="RegisteR">
 <div id="login-form" style="margin-right:30px">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    <fieldset>
     <div class="col-md-12">

         <div class="form-group">
             <h2 class="">Registrer ny bruker</h2>
            </div>

         <div class="form-group">
             <hr />
            </div>

            <?php
   if ( isset($errMSG) ) {

    ?>
    <div class="form-group">
             <div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
    <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                </div>
             </div>
                <?php
   }
   ?>

            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
             <input type="text" name="name" class="form-control" placeholder="Fulle navn" maxlength="50" value="<?php echo $name ?>" />
                </div>
                <span class="text-danger"><?php echo $nameError; ?></span>
            </div>

            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
             <input type="text" name="nick" class="form-control" placeholder="Nickname" maxlength="20" value="<?php echo $nick ?>" />
                </div>
                <span class="text-danger"><?php echo $nickError; ?></span>
            </div>

            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
             <input type="email" name="email" class="form-control" placeholder="Email" maxlength="40" value="<?php echo $email ?>" />
                </div>
                <span class="text-danger"><?php echo $emailError; ?></span>
            </div>

            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
             <input type="password" id="password" name="pass" class="form-control" placeholder="Passord" maxlength="15" />
                </div>
                <span class="text-danger"><?php echo $passError; ?></span>
            </div>

            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
             <input type="password" id="passwordConfirm" name="passConfirm" class="form-control" placeholder="Gjenta Passord" maxlength="15" />
                </div>
                <span class="text-danger"><?php echo $passError; ?></span>
            </div>
<!--
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-gift"></span></span>
                <input type="text" id="date" placeholder="Fødselsdato" name="date" class="form-control" value="?php echo $date ?" />
              </div>
              <span class="text-danger"></span>
            </div>
-->
            <div class="form-group">
             <div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-home"></span></span>
             <input type="text" name="city" class="form-control" placeholder="Bosted" maxlength="30" value="<?php echo $city ?>" />
                </div>
                <span class="text-danger"><?php echo $cityError; ?></span>
            </div>

            <div class="form-group">
             <hr />
            </div>

            <div class="form-group">
             <button type="submit" class="btn btn-block btn-danger" name="btn-signup">Registrer</button>
            </div>

<!--
            <div class="form-group">
             <hr />
            </div>

            <div class="form-group">
             <a href="login.php">Logg inn her ...</a>
            </div>
-->
        </div>
    </fieldset>
    </form>
</div>
</div>

<div id="LogiN">
  <div id="login-form" style="margin-right:30px">
     <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="on">

          <div class="form-group">
              <h2 class="">Logg inn</h2>
             </div>

          <div class="form-group">
              <hr />
             </div>

             <?php
    if ( isset($errMSG) ) {

     ?>
     <div class="form-group">
              <div class="alert alert-danger">
     <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                 </div>
              </div>
                 <?php
    }
    ?>

             <div class="form-group">
              <div class="input-group">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
              <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>" maxlength="40" />
                 </div>
                 <span class="text-danger"><?php echo $emailError; ?></span>
             </div>

             <div class="form-group">
              <div class="input-group">
                 <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
              <input type="password" name="pass" class="form-control" placeholder="Passord" maxlength="15" />
                 </div>
                 <span class="text-danger"><?php echo $passError; ?></span>
             </div>

             <div class="form-group">
              <hr />
             </div>

             <div class="form-group">
              <button type="submit" class="btn btn-block btn-danger" name="btn-login">Logg inn</button>
             </div>
  <!--
             <div class="form-group">
              <hr />
             </div>

             <div class="form-group">
              <a href="register.php">Registrer deg her ...</a>
             </div>
  -->
         </div>
                 <p style="padding-bottom:1080px;"></p>
     </form>
  </div>
</div>

<!-- STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP STOP  -->

<p style="padding-bottom:1080px;"></p>
</div>
</div>
<div class="container" id="footer">
<hr style="padding-top:10px;">
<p style="padding-bottom:10px;">Copyright © <?php echo Date(Y);?> Laget av Leander Christensen</p>
</div>
</div>
</body>
</html>
<?php ob_end_flush(); ?>
