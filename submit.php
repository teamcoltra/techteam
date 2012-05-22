<?php
/*=========================
Submit Script - All Posts Lead Here
==========================*/
include ('config.php');

if($_SERVER["REQUEST_METHOD"] == "POST")
{
	if ($_POST['return'] != NULL) {
		if ($_POST['return'] == 'signup') {
			if ($_POST['password'] == $_POST['confirmation']) {
				$fullname = mysql_real_escape_string($_POST['fullname']);
				$username = mysql_real_escape_string($_POST['username']);
				$timezone = mysql_real_escape_string($_POST['timezone']);
				$country = mysql_real_escape_string($_POST['country']);
				$email = mysql_real_escape_string($_POST['email']);
				$password = md5($_POST['password']);
				mysql_query("INSERT INTO ".$tableprefix."_users 
					(username, userfullname, usertimezone, userparty, useremail, userpassword) VALUES('$username', '$fullname', '$timezone', '$country', '$email', '$password' ) ") or die(mysql_error()); 
				$host  = $_SERVER['HTTP_HOST'];
				$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
				$extra = 'dashboard.php?message=registered';
				header("Location: http://$host$uri/$extra");
			}
		}
		if ($_POST['return'] == 'addproject') {
			include('check.php');
				$projectname = mysql_real_escape_string($_POST['projectname']);
				$projectdescriptionshort = mysql_real_escape_string($_POST['projectdescriptionshort']);
				$projectdescriptionlong = mysql_real_escape_string($_POST['projectdescriptionlong']);
				$projectreponame = mysql_real_escape_string($_POST['projectreponame']);
				$projectrepohost = mysql_real_escape_string($_POST['projectrepohost']);
				$projectrepouser = mysql_real_escape_string($_POST['projectrepouser']);
				$projectrepourl = mysql_real_escape_string($_POST['projectrepourl']);
				$projectrepotype = mysql_real_escape_string($_POST['projectrepotype']);
				$projectlanguage = mysql_real_escape_string($_POST['projectlanguage']);
				$projectcreated = date("m-d-y");
				$projectowner = $_SESSION['userid'];
				mysql_query("INSERT INTO ".$tableprefix."_projects 
					(projectshortdesc, projectlongdesc, projectcreatedby, projectreponame, projectrepohost, projectrepouser, projectrepourl, projecttype, projectlanguage, projectname, projectcreated ) VALUES('$projectdescriptionshort', '$projectdescriptionlong', '$projectowner', '$projectreponame', '$projectrepohost', '$projectrepouser', '$projectrepourl', '$projectrepotype', '$projectlanguage', '$projectname', '$projectcreated' ) ") or die(mysql_error()); 
				$host  = $_SERVER['HTTP_HOST'];
				$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
				$extra = 'dashboard.php?message=addedproject';
				header("Location: http://$host$uri/$extra");
		}
		if ($_POST['return'] == 'login') {
				$username = mysql_real_escape_string($_POST['username']);
				$password = md5($_POST['password']);

				$sql="SELECT userid FROM ".$tableprefix."_users WHERE username='$username' and userpassword='$password'";
				$result=mysql_query($sql);
				$row=mysql_fetch_array($result);
				$id=$row['userid'];
				$count=mysql_num_rows($result);


				// If result matched $myusername and $mypassword, table row must be 1 row
				if($count==1)
				{
					$login_session=$row['username'];
					$_SESSION['username'] = $username;
					$_SESSION['userid'] = $id;
					$host  = $_SERVER['HTTP_HOST'];
					$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
					$extra = 'dashboard.php?message=loggedin';
					header("Location: http://$host$uri/$extra");
				}
				else
				{
					$host  = $_SERVER['HTTP_HOST'];
					$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
					$extra = 'login.php?message=failed';
					header("Location: http://$host$uri/$extra");
					/*echo $sql;
					echo "<br>";
					echo $active;
					echo "<br>";
					echo $count;
					echo "<br>";*/

				}

		}
	}
} else if($_SERVER["REQUEST_METHOD"] == "GET") {
	die('no get requests yet');
}
?>