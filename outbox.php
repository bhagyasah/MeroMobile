<?php
$con = mysqli_connect('localhost','root','');

if(!$con)
{
	echo'not connected to the server';
	 
}
if(!mysqli_select_db($con,'mobiledata')){
	echo'Database not selected';	
} 
$phoneno=$_POST['phoneno'];
$sms=$_POST['sms'];
$date=$_POST['date'];


 $sql="INSERT INTO outbox (phoneno,sms,date) VALUES ('$phoneno','$sms','$date')";
 if(!mysqli_query($con,$sql)){
 echo'Not Inerted';
 }
 else{	 
	 echo'Inserted';
 }
// header ("refresh:2; url=index.html");  
?>
