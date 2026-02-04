<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "JNP";


$conn = new mysqli($server, $user, $pass, $db);

if ($conn->connect_error) {
  die("Sorry, We can't connect ");
}
