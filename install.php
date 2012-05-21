<?php
/*---------------------------------------------
Installation File - Should Create Database
----------------------------------------------*/

include('config.php');
echo 'Checking configuration file...<br>';
if ($database == '') {
	die('You did not edit your config.php file. Please update it, then run this script again.')
}
echo 'Success!<br>';
echo 'Creating Users Table...<br>';
$sql = "CREATE TABLE `$database`.`$tableprefix_users` (`userid` INT(100) NOT NULL AUTO_INCREMENT PRIMARY KEY, `username` VARCHAR(255) NOT NULL, `userfullname` VARCHAR(255) NOT NULL, `usertimezone` VARCHAR(5) NOT NULL, `userparty` VARCHAR(255) NOT NULL, `useremail` VARCHAR(255) NOT NULL, `userpassword` VARCHAR(255) NOT NULL, `usercreated` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP, UNIQUE (`username`)) ENGINE = MyISAM;";
mysql_query($sql);
echo 'Success!<br>';
echo 'Creating Projects Table...<br>';
$sql = "CREATE TABLE `$database`.`$tableprefix_projects` (`projectid` INT(255) NOT NULL AUTO_INCREMENT PRIMARY KEY, `projectshortdesc` VARCHAR(140) NOT NULL, `projectlongdesc` TEXT NOT NULL, `projectreponame` VARCHAR(255) NOT NULL, `projectrepohost` VARCHAR(255) NOT NULL, `projectrepourl` VARCHAR(255) NOT NULL, `projecttype` VARCHAR(255) NOT NULL, `projectlanguage` VARCHAR(25) NOT NULL, `projectname` VARCHAR(255) NOT NULL, `projectcreated` DATETIME NOT NULL, `projectupdated` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL) ENGINE = MyISAM;";
mysql_query($sql);
echo 'Success!<br>';
echo 'Successfully completed installation, please delete the file "install.php" from your server, as it can cause a security risk and more than likely will screw things up if anyone accidently goes to it.<br>';
?>