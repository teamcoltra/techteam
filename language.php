<?php
/*------------------------------------------------------
Site Languages - For setting up a multi-language setup
------------------------------------------------------*/

if ($setlanguage != '') {
	$currentlanguage = $setlanguage;
} else {
	$currentlanguage = $defaultlang;
}
if ($currentlanguage = 'en') {
	//Site Links
	$lang_home = "Home";
	$lang_about = "About";
	$lang_active = "Active";
	$lang_completed = "Completed";
	$lang_logout = "Logout";
	$lang_login = "Login";
	$lang_signup = "Signup";
	$lang_dashboard = "Dashboard";

	//Dashboard
	$lang_shareprofile = "Share your current tasks with anyone";
	$lang_myprojects = "My Projects";
	$lang_projectname = "Name";
    $lang_description = "Description";
    $lang_starttime = "Start Time";
    $lang_language = "Language";
    $lang_page = "Page";
    $lang_noactivity = "No Projects! Why not <a href='submitproject.php'>create one</a>?";
	$lang_addrepo = "That's all! Why not <a href='submitproject.php'>add another one</a>?";
	//footer
	$lang_kopimi = "kopimi";

}

?>