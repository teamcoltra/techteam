<?php
$user_check = $_SESSION['username'];

$ses_sql = mysql_query("select username from ".$tableprefix."_users where username='$user_check' ");

$row=mysql_fetch_array($ses_sql);

$login_session=$row['username'];

if(!isset($login_session))
{
				$host  = $_SERVER['HTTP_HOST'];
				$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
				$extra = 'login.php?message=notloggedin';
				header("Location: http://$host$uri/$extra");
}
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
?>