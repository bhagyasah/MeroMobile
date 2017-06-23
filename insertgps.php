<?php
$con = mysqli_connect('localhost','root','');

if(!$con)
{
	echo'not connected to the server';
	 
}
if(!mysqli_select_db($con,'mobiledata')){
	echo'Database not selected';	
} 
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];

 $sql="INSERT INTO gpslocation (latitude,longitude) VALUES ('$latitude','$longitude')";
 if(!mysqli_query($con,$sql)){
 echo'Not Inerted';
 }
 else{	 
	 echo'Inserted';
 }
 header ("refresh:2; url=index.html");  
?>
