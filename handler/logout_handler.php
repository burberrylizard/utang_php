<?php

session_start();

unset($_SESSION['access_token']);

setcookie("access_token", "", time() - 3600, "/"); // Expire the cookie by setting the time in the past

session_destroy();

header("Location: ../utang.php");
exit;