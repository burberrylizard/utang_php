<?php

session_start();

if (isset($_SESSION['access_token']) || isset($_COOKIE['access_token'])) {
  header("Location: Views/home.php");
  exit;
}