<div id="login-form" style="margin-right:30px">
<form method="post" id="login-form000" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="on">

<div class="form-group">
  <h2 id="loginText">Logg inn</h2>
</div>

<div class="form-group">
  <hr class="loginHR">
</div>

<?php if ( isset($errMSG2) ) { ?>
<div class="form-group registerSuccess">
  <div class="alert alert-danger"> <?php echo $errMSG2; ?></div>
</div>
<?php } elseif ( isset($errMSG) ) { ?>
  <div class="alert registerSuccess alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
     <?php echo $errMSG; ?>
  </div>
<?php } ?>

<div class="form-group">
 <div id="email" class="input-group">
    <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>" maxlength="40">
  </div>
    <span class="text-danger marginIDK"><?php echo $emailError2; ?></span>
</div>
<?php if ( $error == true ) { ?>
<p style="margin-bottom:20px;"></p>
<?php } ?>
<div class="form-group">
  <div id="password1" class="input-group">
    <input type="password" name="pass" class="form-control" placeholder="Passord" maxlength="15">
  </div>
  <span class="text-danger marginIDK"><?php echo $passError2; ?></span>
</div>
<?php if ( $error == true ) { ?>
<p style="margin-bottom:20px;"></p>
<?php } ?>

<div class="form-group">
 <hr class="loginHR">
</div>

<div class="form-group">
 <button id="login" type="submit" class="btn btn-block btn-danger" name="btn-login">Logg inn</button>
</div>

</form>
</div>
