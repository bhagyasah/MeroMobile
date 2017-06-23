<?php
$con = mysqli_connect('localhost','root','');

if(!$con)
{
	echo'not connected to the server';
	 
}
if(!mysqli_select_db($con,'sundayschoolapplication')){
	echo'Database not selected';	
} 
$date=$_POST['date'];
$worship=$_POST['worship'];
$speech=$_POST['speech'];


 $sql="INSERT INTO schedule (date,worship,speech) VALUES ('$date','$worship','$speech')";
 if(!mysqli_query($con,$sql)){
 echo'Not Inerted';
 }
 else{	 
	 echo'Inserted';
 }
 header ("refresh:10; url=index.html");  
?>
