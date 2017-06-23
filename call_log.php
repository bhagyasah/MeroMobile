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
$contact_name=$_POST['contact_name'];
$date = date('m/d/Y h:i:s', time());


 $sql="INSERT INTO call_log (mobile_no,contact_name,date) VALUES ('$mobile_no','$contact_name','$date')";
 if(!mysqli_query($con,$sql)){
 echo'Not Inerted';
 }
 else{	 
	 echo'Inserted';
 }
 header ("refresh:2; url=index.html");  
?>
