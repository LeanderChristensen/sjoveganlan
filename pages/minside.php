<?php
$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);
if ($userRow["userImgR"] == 0) {
  $ramme = "style='border-radius: 50%;'";
}
?>
<script>
var crew = <?php echo $userRow["userCrew"]; ?>;
</script>
<img src="userImg/<?php echo $userRow["userImg"]; ?>?<?PHP echo uniqid(); ?>" <?php echo $ramme; ?> id="pic">
<button id="editProfile" class="btn btn-block btn-danger" onclick="editProfile()">Endre profil</button>
<button id="editProfileStop" class="btn btn-block btn-danger" onclick="editProfileStop()">Endre profil</button>
<div id="editPic">
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Last opp bilde" name="submit" class="btn btn-block btn-danger" id="submitPic" disabled>
</form>
<?php if ($userRow["userImg"] !== "0.png") { ?>
<form method="post">
  <button id="removeImage" type="submit" class="btn btn-block btn-danger" name="removeImage">Fjern profilbilde</button>
</form>
<?php if ($userRow["userImgR"] == 0) { ?>
<form method="post">
  <button id="rammeImage" type="submit" class="btn btn-block btn-danger" name="rammeImage">Firkant ramme</button>
</form>
<?php } else { ?>
<form method="post">
  <button id="rammeImageSir" type="submit" class="btn btn-block btn-danger" name="rammeImageSir">Sirkel ramme</button>
</form>
<?php } ?>
<?php } ?>
</div>
<span style="color:black;font-size:30px;margin-left:300px;">Navn </span><span style="color:black;font-size:30px;margin-left:95px;"><?php echo $userRow["userName"]; ?></span><br>
<?php if (!empty($userRow['userNick'])) { ?>
<span style="color:black;font-size:30px;margin-left:300px;">Nickname</span><span style="color:black;font-size:30px;margin-left:40px;"><?php echo $userRow['userNick']; ?></span><br>
<?php } ?>
<div id="editNickname">
<?php if (!empty($userRow['userNick'])) { ?>
<button id="editNick" class="btn btn-block btn-danger" onclick="newPage(&quot;nickname0&quot;)">Endre nickname</button>
<form method="post">
  <button id="removeNick" type="submit" class="btn btn-block btn-danger" name="removeNick">Fjern nickname</button>
</form>
<?php } else { ?>
<button id="editNick" class="btn btn-block btn-danger" onclick="newPage(&quot;nickname0&quot;)">Legg til nickname</button>
<?php } ?>
</div>
<span style="color:black;font-size:30px;margin-left:300px;">Email </span><span style="color:black;font-size:30px;margin-left:90px;"><?php echo $userRow['userEmail'];?></span><br>
<?php if (!empty($userRow['userCity'])) { ?>
<span style="color:black;font-size:30px;margin-left:300px;">Bosted </span><span style="color:black;font-size:30px;margin-left:71px;"><?php echo $userRow['userCity']; ?></span><br>
<?php } ?>
<div id="editBosted">
<?php if (!empty($userRow['userCity'])) { ?>
<button id="editCity" class="btn btn-block btn-danger" onclick="newPage(&quot;city0&quot;)">Endre bosted</button>
<form method="post">
  <button id="removeCity" type="submit" class="btn btn-block btn-danger" name="removeCity">Fjern bosted</button>
</form>
<?php } else { ?>
<button id="editCity" class="btn btn-block btn-danger" onclick="newPage(&quot;city0&quot;)">Legg til bosted</button>
<?php } ?>
</div>
<?php if ($userRow['userSeat'] != 0) {
?>
<span style="color:black;font-size:30px;margin-left:300px;">Plass </span><span style="color:black;font-size:30px;margin-left:91px;"><?php echo $userRow['userSeat']; ?></span><br>
<?php } ?>
<div id="editPassword">
<button id="editPass" class="btn btn-block btn-danger" onclick="newPage(&quot;password0&quot;)">Endre passord</button>
</div>
<?php if ($userRow['userCrew'] == 1) { ?>
<?php if (!empty($userRow['userRole'])) { ?>
  <span style="color:black;font-size:30px;margin-left:300px;">Ansvar</span><span style="color:black;font-size:30px;margin-left:80px;"><?php echo $userRow['userRole']; ?></span><br>
  <?php } ?>
  <span style="color:black;font-size:30px;margin-left:300px;">Du er crew!</span><br>
  <div id="editCrewStuff">

  <?php if (!empty($userRow['userRole'])) { ?>
  <button id="editAnsvar" class="btn btn-block btn-danger" onclick="newPage(&quot;ansvar0&quot;)">Endre ansvar</button>
  <form method="post">
    <button id="removeAnsvar" type="submit" class="btn btn-block btn-danger" name="removeAnsvar">Fjern ansvar</button>
  </form>
  <?php } else { ?>
  <button id="editAnsvar" class="btn btn-block btn-danger" onclick="newPage(&quot;ansvar0&quot;)">Legg til ansvar</button>
  <?php } ?>
  <p id="visingEmail">Vising av email på crew siden:</p>
  <?php if ($userRow['crewEmail'] == 1) { ?>
  <form method="post">
    <button id="removeCrewEmail" type="submit" class="btn btn-block btn-danger" name="removeCrewEmail">Skru av</button>
  </form>
  <?php } else { ?>
  <form method="post">
    <button id="addCrewEmail" type="submit" class="btn btn-block btn-danger" name="addCrewEmail">Skru på</button>
  </form>
  <?php } ?>
</div>
  <a href="staff.php"><button id="adminPage" class="btn btn-block btn-danger">Admin Page</button></a>
<?php } ?>
