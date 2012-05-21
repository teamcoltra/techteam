<?php
/*-----------------------------------------------------------
Configuration File, Please Fill Everything Below
-----------------------------------------------------------*/

//---------------Site Defaults ----------------------
$sitename = 'PPI Tech Team';
$defaultlang = 'en'; // Set default site language

//---------------Database Config---------------------
$dbhost = 'localhost'; // Leave this alone unless you know you need to change it.
$dbuser = ''; // username to your database
$dbpass = ''; // password to your username
$database = ''; // Database your username is attached to, where data will be stored.
$tableprefix = 'ppitech'; // this is to identify your PPI Tech Team script if you have multiple scripts running on the same DB. Usually leave this alone.


$conn = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Error connecting to mysql');

$dbname = 'petstore';
mysql_select_db($dbname);

?>