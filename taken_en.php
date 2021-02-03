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

//Select all regular seats and give them a background color and a title
for ($x = 1; $x <= 80; $x++) {
  $sql = "SELECT * FROM users WHERE userSeat=$x";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  if (mysqli_num_rows($result) > 0) {
    $userNameLoop = $row['userName'];
    ${'seat' . $x} = "$('#seat{$x}').attr('style', 'background-color: #cc0000 !important');$('#seat{$x}').attr('title', '{$userNameLoop}');";
    //echo $x;
    //echo " - ";
    //echo ${'seat' . $x};
    //echo "<br>";
  } else {
    ${'seat' . $x} = "$('#seat{$x}').attr('style', 'background-color: #2eb82e !important');$('#seat{$x}').attr('title', 'Available!');";
    //echo $x;
    //echo " - ";
    //echo ${'seat' . $x};
    //echo "<br>";
  }
}

//Select all crew seats and give them a background color and a title
for ($c = 81; $c <= 96; $c++) {
  $sql2 = "SELECT * FROM users WHERE userSeat=$c";
  $result2 = mysqli_query($conn, $sql2);
  $row2 = mysqli_fetch_assoc($result2);
  if (mysqli_num_rows($result2) > 0) {
    $userNameLoop = $row2['userName'];
    ${'seat' . $c} = "$('#seat{$c}').attr('style', 'background-color: #ff9900 !important');$('#seat{$c}').attr('title', '{$userNameLoop}');";
    //echo $x;
    //echo " - ";
    //echo ${'seat' . $x};
    //echo "<br>";
  } else {
    ${'seat' . $c} = "$('#seat{$c}').attr('style', 'background-color: #ff9900 !important');$('#seat{$c}').attr('title', 'Available!');";
    //echo $x;
    //echo " - ";
    //echo ${'seat' . $x};
    //echo "<br>";
  }
}

?>

<script>
$( document ).ready(function() {
    //$('#seat01').attr('style', 'background-color: #cc0000 !important');
    <?php
    for ($x2 = 1; $x2 <= 80; $x2++) {
      echo ${'seat' . $x2};
    }
    for ($y2 = 81; $y2 <= 96; $y2++) {
      echo ${'seat' . $y2};
    }
    ?>

    $('[data-tooltip="tooltip"]').tooltip();

    //$('#seat85').attr('data-placement', 'top');
    //$('#seat85').tooltip('show');
});
</script>
