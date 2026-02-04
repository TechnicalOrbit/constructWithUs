<?php

session_unset();

session_destroy();

if (!isset($_SESSION['loggedin']) && $_SESSION['loggedin'] != true) {
  header("location: index.php");
}
