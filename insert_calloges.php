<?php
$con = mysqli_connect('localhost','root','');

if(!$con)
{
	echo'not connected to the server';
	 
}
if(!mysqli_select_db($con,'mobiledata')){
	echo'Database not selected';	
} 
$mobile_no=$_POST['mobile_no'];
$call_type=$_POST['call_type'];
$date_time=$_POST['date_time'];
$call_duration=$_POST['call_duration'];

 $sql="INSERT INTO call_log (mobile_no,call_type,date_time,call_duration) VALUES ('$mobile_no','$call_type','$date_time','$call_duration')";
 if(!mysqli_query($con,$sql)){
 echo'Not Inerted';
 }
 else{	 
	 echo'Inserted';
 }
 header ("refresh:2; url=index.html");  
?>
