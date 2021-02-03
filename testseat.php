<!DOCTYPE html>
<html>
<head>
<script language="javascript" type="text/javascript" src="http://leanderchristensen.com/libraries/p5.js/p5.js"></script>
<script language="javascript" type="text/javascript" src="js/seatmap.js"></script>
<?php
require_once "head.php";
require_once "taken.php";
//require_once "dbconnect.php";
?>
<style></style>
</head>
<body>

<form>
<select name="users" onchange="showUser(this.value)">
  <option value="">Select a seat:</option>
  <option value="1">Seat 1</option>
  <option value="2">Seat 2</option>
  <option value="3">Seat 3</option>
  <option value="4">Seat 4</option>
  </select>
</form>
<br>

<div id="txtHint"><b>Seat info will be listed here...</b></div>
</body>
</html>
