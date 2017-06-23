<!DOCTYPE html>
<html>
<head>
	<title>Mero Mobile</title>
	<link rel="stylesheet" type="text/css" href="css/newindexcss.css">
	<link rel="stylesheet" type="text/css" href="css/user_home.css">
 
</head>
<body>
<div class="main">
<div class="banner">
<img src="images/header.png">
<div class="welcome_message">
<?php 
require 'connect_mysql.php';
require 'core.inc.php';
require 'connect_mysql.php';
//echo $current_file;
if (loggedin()) {
	echo 'Welcome   '.getuserfield('phone').'<br>'.'<a href="logout.php">Log out</a>';
	}else{
		 header('Location: index.php');
		
	} //getuserfield('firstname');
	
?>
</div>
</div>
<div class="menu">
<ul>
	<li><a href="#">Home</a></li>
	<li><a href="#">About Us</a></li>
	<li><a href="show_gpslocation.php">Location</a></li>
	<li><a href="mobcontacts.php">Contact</a></li>
	<li><a href="sent_sms.php">Sent-Sms</li>
	<li><a href="inbox_sms.php">Inbox-Sms</a></li>
	 <li><a href="call_log_show.php">Call-Logs</a></li>

</ul>

</div>
<div class="body">



</div>

<div class="footer">
<img src="images/footer.png">
</div>
</div>
</body>
</html>