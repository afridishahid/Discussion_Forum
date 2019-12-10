<?php
$host = "localhost";
$user = "root";
$pwd  = "";
$db   = "confer";

$conn = mysqli_connect($host,$user,$pwd) or die("Could not connect");
mysqli_select_db($conn,'confer') or die("No database");

?>