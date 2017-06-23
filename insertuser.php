<?php
$con = mysqli_connect('localhost','root','');

if(!$con)
{
	echo'not connected to the server';
	 
}
if(!mysqli_select_db($con,'mobiledata')){
	echo'Database not selected';	
} 
$username=$_POST['username'];
$password=$_POST['password'];
$phone=$_POST['phone'];


 $sql="INSERT INTO usertable (username,password,phone) VALUES ('$username','$password','$phone')";
 if(!mysqli_query($con,$sql)){
 echo'Not Inerted';
 }
 else{	 
	 echo'Inserted';
 }
 header ("refresh:2; url=index.html");  
?>
