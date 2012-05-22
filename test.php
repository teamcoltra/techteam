<?php
include('config.php');
include('check.php');
include('language.php');
//Before Including Template You Can Define Custom Things:
$sitepage = 'Dashboard'; //will make the <title> display your current location
//$default_links = '
//            <li class="active"><a href="#">Dashboard</a></li>
//            <li><a href="#">Active</a></li>
//            <li><a href="#">Completed</a></li>
//            <li><a href="#" data-method="delete" rel="nofollow">Logout</a></li>';
//Default Links Changes The Links At Top
include('template.php');

print_r(get_defined_vars());
?>