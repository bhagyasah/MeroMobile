nn<?php  
require 'connect_mysql.php';
require 'core.inc.php';
require 'connect_mysql.php';
//echo $current_file;
if (loggedin()) {
	echo 'Welcome  '.getuserfield('firstname').'You are logged in <a href="logout.php">Log out</a>';
	 //getuserfield('firstname');
	# code...
}else{
include 'login.php';
}
?>