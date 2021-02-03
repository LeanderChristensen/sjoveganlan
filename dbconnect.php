<?php

 // this will avoid mysql_connect() deprecation error.
 error_reporting( ~E_DEPRECATED & ~E_NOTICE );
 // but I strongly suggest you to use PDO or MySQLi.

 define('DBHOST', 'hidden');
 define('DBUSER', 'hidden');
 define('DBPASS', 'hidden');
 define('DBNAME', 'hidden');

 $conn = mysql_connect(DBHOST,DBUSER,DBPASS);
 $dbcon = mysql_select_db(DBNAME);
 //$conn = mysqli_connect($servername, $username, $password, $dbname);

 //if (!$con) {
//    die('Could not connect: ' . mysqli_error($con));
 //}

 if ( !$conn ) {
  die("Connection failed : " . mysql_error());
 }

 if ( !$dbcon ) {
  die("Database Connection failed : " . mysql_error());
}
