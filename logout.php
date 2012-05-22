<?php
// Lets Log Out!

session_destroy();
$host  = $_SERVER['HTTP_HOST'];
$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
$extra = 'login.php?message=loggedout';
header("Location: http://$host$uri/$extra");

?>