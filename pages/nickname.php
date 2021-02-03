<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
<fieldset>
<div class="col-md-12">

  <div class="form-group">
    <h2 style="text-align:center;">Endre nickname</h2>
  </div>

  <div class="form-group">
    <hr class="loginHR">
  </div>

<?php if ( isset($errMSG) ) { ?>
  <div class="form-group">
    <div class="alert alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
      <?php echo $errMSG; ?>
    </div>
  </div>
<?php } ?>

  <div class="form-group">
    <div class="input-group form000">
      <input type="text" name="nick" class="form-control" placeholder="Nickname" maxlength="40" value="<?php echo $nick ?>" />
    </div>
      <span class="text-danger"><?php echo $nickError; ?></span>
  </div>

<div class="form-group">
<hr class="loginHR">
</div>

<div class="form-group form000">
<button type="submit" class="btn btn-block btn-danger" name="updateNickname">Endre</button>
</div>

</div>
</fieldset>
</form>
