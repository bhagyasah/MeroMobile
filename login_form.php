<?php 
if (isset($_POST['username']) && isset($_POST['Password'])) {
$usernamevalue = $_POST['username'];
$passwordvalue = $_POST['Password'];
$password_hash = md5($passwordvalue);


	if (!empty($usernamevalue) && !empty($passwordvalue)) {
		# code...
		$query1 = "SELECT id FROM users WHERE username='".mysql_real_escape_string($usernamevalue)."' AND password='".mysql_real_escape_string($password_hash)."'";
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
			 header('Location: login_user.php');
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
	
Username:<input type="text" name="username"><br><br>
Password:<input type="Password" name="Password"><br><br>
<input type="submit" name="submit" value="log in">

</form>