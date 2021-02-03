<h2 class="center" style="margin-bottom:25px;">Ditt ansvarsområde er<br><?php echo $userRow['userRole']; ?></h2>
  <form method="post" action = "<?php $_PHP_SELF ?>">
      <input style="margin-left:275px !important;" name="ansvarText" placeholder="Ansvar" class="form-control form000" type="text" value="<?php echo $ansvar ?>" id="ansvarText">
      <span class="text-danger"><?php echo $ansvarError; ?></span>
      <button style="margin-left:275px !important;" type="submit" class="btn btn-block btn-danger form000" name="ansvar">Endre ansvar</button>
  </form>
<p class="center" style="margin-top:10px;">Her kan du skrive inn hva som skal vises i "Ansvar" på <a href="http://sjovegan-ikt.no/index.php#crew" target="_blank">Crew Siden</a></p>
