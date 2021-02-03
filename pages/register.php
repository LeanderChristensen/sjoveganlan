 <div id="login-form" style="margin-right:30px">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" autocomplete="off">
    <fieldset>
     <div class="col-md-12">

         <div class="form-group">
             <h2 style="text-align:center;">Registrer ny bruker</h2>
            </div>

         <div class="form-group">
             <hr class="loginHR">
            </div>

            <?php
   if ( isset($errMSG) ) {

    ?>
    <div class="form-group">
             <div class="alert registerSuccess alert-<?php echo ($errTyp=="success") ? "success" : $errTyp; ?>">
                <?php echo $errMSG; ?>
                </div>
             </div>
                <?php
   }
   ?>

            <div class="form-group">
             <div class="input-group form000">
             <input type="text" name="name" class="form-control" placeholder="Fulle navn" maxlength="50" value="<?php echo $name ?>" />
                </div>
                <span class="text-danger"><?php echo $nameError; ?></span>
            </div>

            <?php if ( $error == true ) { ?>
            <p style="margin-bottom:20px;"></p>
            <?php } ?>

            <div class="form-group">
             <div class="input-group form000">
             <input type="email" name="email" class="form-control" placeholder="Email" maxlength="40" value="<?php echo $email ?>" />
                </div>
                <span class="text-danger"><?php echo $emailError; ?></span>
            </div>

            <?php if ( $error == true ) { ?>
            <p style="margin-bottom:20px;"></p>
            <?php } ?>

            <div class="form-group">
             <div class="input-group form000">
             <input type="password" id="password" name="pass" class="form-control required" placeholder="Passord" maxlength="40" />
                </div>
                <span class="text-danger"><?php echo $passError; ?></span>
            </div>

            <?php if ( $error == true ) { ?>
            <p style="margin-bottom:20px;"></p>
            <?php } ?>

            <div class="form-group">
             <div class="input-group form000">
             <input type="password" id="passwordConfirm" name="passConfirm" class="form-control" placeholder="Gjenta Passord" maxlength="40" />
                </div>
                <span class="text-danger"><?php echo $passError; ?></span>
            </div>

            <?php if ( $error == true ) { ?>
            <p style="margin-bottom:20px;"></p>
            <?php } ?>

            <div class="form-group">
             <div class="input-group form000">
             <input type="text" name="nick" class="form-control" placeholder="Nickname (Valgfri)" maxlength="40" value="<?php echo $nick ?>" />
                </div>
                <span class="text-danger"><?php echo $nickError; ?></span>
            </div>

            <?php if ( $error == true ) { ?>
            <p style="margin-bottom:20px;"></p>
            <?php } ?>

            <div class="form-group">
              <div class="input-group form000">
                <input type="text" name="city" class="form-control" placeholder="Bosted (Valgfri)" maxlength="30" value="<?php echo $city ?>" />
              </div>
                <span class="text-danger"><?php echo $cityError; ?></span>
            </div>

            <?php if ( $error == true ) { ?>
            <p style="margin-bottom:20px;"></p>
            <?php } ?>

            <div class="form-group">
             <hr class="loginHR">
            </div>

            <div class="form-group form000">
             <button type="submit" class="btn btn-block btn-danger" name="btn-signup">Registrer</button>
            </div>

        </div>
    </fieldset>
    </form>
</div>
