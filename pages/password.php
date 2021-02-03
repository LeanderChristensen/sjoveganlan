  <form name="frmChange" method="post" action="" onSubmit="return validatePassword()" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
  <h2 style="text-align:center;">Endre passord</h2>
  <div class="center"><span class="message"><?php if(isset($message)) { echo $message; } ?></span></div>
  <input id="currentPassword2" type="password" placeholder="Gammelt passord" name="currentPassword" class="form-control form000pass"><p id="currentPassword"  class="required center someWarnings"></p>
  <input id="newPassword2" type="password" placeholder="Nytt passord" name="newPassword" class="form-control form000pass"><p id="newPassword" class="required center someWarnings"></p>
  <input id="confirmPassword2" type="password" placeholder="Bekreft passord" name="confirmPassword" class="form-control form000pass"><p id="confirmPassword" class="required center someWarnings"></p>
  <input id="newPasswordButton" type="submit" name="changePass" value="Submit" class="btn btn-danger form000pass">
  </form>
