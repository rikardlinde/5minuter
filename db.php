<?php // db.php

$dbhost = "...";
$dbuser = "...";
$dbpass = "...";
$dbname = "...";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);

$conn->set_charset("utf8");

if(! $conn ) {

  die('Could not connect: ' . mysqli_error());

}

?>
