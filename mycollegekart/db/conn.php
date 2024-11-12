<?php
$servername = "localhost";
$username = "u428953917_college_search";
$password = "collegeSearch@$&4346";
$dbname = "u428953917_college_search";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>