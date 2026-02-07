<?php

// Get the server name to determine the environment
$server_name = $_SERVER['SERVER_NAME'];

if ($server_name === 'localhost' || $server_name === '127.0.0.1') {
  $server = "localhost";
  $user = "root";
  $pass = "";
  $db = "jnp";
} else {
  $server = "localhost";
  $user = "u775436957_jnp";
  $pass = "Jnp@2026";
  $db = "u775436957_jnp";
}

$conn = new mysqli($server, $user, $pass, $db);

if ($conn->connect_error) {
  die("Sorry, We can't connect ");
}
