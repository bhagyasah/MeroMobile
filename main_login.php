<!DOCTYPE html>
<html>
<head>
	<title>Mero Mobile</title>
	<link rel="stylesheet" type="text/css" href="css/newindexcss.css">
</head>
<body>
<div class="main">
<div class="banner">
<img src="images/header.png">
</div>
<div class="menu">
<ul>
	<li><a href="#">Home</a></li>
	<li><a href="#">About Us</a></li>
	<li><a href="#">Contact Us</a></li>
</ul>
</div>
<div class="body">
<div class="login" align="center">

<?php
//echo "you r in the php page";
if (isset($_POST['username']) && isset($_POST['Password'])) {
$usernamevalue = $_POST['username'];
$passwordvalue = $_POST['Password'];
//$password_hash = md5($passwordvalue);
	if (!empty($usernamevalue) && !empty($passwordvalue)) {
		# code...
		$query1 = "SELECT id FROM usertable WHERE username='".mysql_real_escape_string($usernamevalue)."' AND password='".mysql_real_escape_string($passwordvalue)."'";
		if ($query_run=mysql_query($query1)) 
		{
			$query_num_rows = mysql_num_rows($query_run);
			if ($query_num_rows==0) {
				echo "invalid username and password combination";
			 	# code...
			 }else if($query_num_rows==1){
			 	//echo "login succesfull";
			 echo	$user_id = mysql_result($query_run, 0,'id');
			 $_SESSION['user_id']=$user_id;
			 header('Location: user_home.php');
			 } 
			# code...
		}else{
			echo 'query failed';
		}

	}else{
		echo 'you must supply username and password';
	}
	# code...
}
?>

<form action="<?php echo $current_file; ?>" method="POST">
<h2>Enter Your Login Id</h2>
	<label for="id">Username</label>
    <input class="idfield" type="input" name="username" id="id"><br>
    <label for="password">Password</label>
    <input class="passwordfield" type="password" name="Password" id="password"><br>
    <input class="loginbutton" type="submit" name="submit" value="Log In"> 
</form>
</div>
</div>

<div class="footer">
<img src="images/footer.png">
</div>
</div>
</body>
</html>