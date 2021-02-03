<?php
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
?>
<div id="seat1">
          <?php
            $sql = "SELECT * FROM users WHERE userSeat=1";
            $result = mysqli_query($conn, $sql);
            $row1 = mysqli_fetch_assoc($result);
          ?>
          <?php
         if (mysqli_num_rows($result) > 0) {
          ?>
          <?php
          if($row1["userImg"] == 0) {
          ?>
          <a><img src="http://lan.leanderchristensen.com/images/logoSmall.png" id="pic2"></img></a>
          <?php } else { ?>
          <a><img src="http://lan.leanderchristensen.com/userImg/<?php echo $row1["userId"]; ?>.gif" id="pic2"></img></a>
          <?php } ?>
          <!-- src="http://leanderchristensen.com/images/placeholderlarge.png" -->
          <span id="seatName">Navn    </span><span id="seatName2"><?php echo $row1["userName"]; ?></span><br>
          <span id="seatNick">Nickname</span><span id="seatNick2"><?php echo $row1['userNick']; ?></span><br>
          <span id="seatEmail">Email  </span><span id="seatEmail2"><?php echo $row1['userEmail'];?></span><br>
          <span id="seatCity">Bosted  </span><span id="seatCity2"><?php echo $row1['userCity']; ?></span><br>
          <?php
      } else {
          ?>
  <p>Denne plassen er ledig!</p>
  <?php
  }
  ?>
</div>
<div id="seat2">
<p>Denne plassen er ledig!</p>
</div>
