<?php
$con = mysqli_connect('localhost','root','');

if(!$con)
{
	echo'not connected to the server';
	 
}
if(!mysqli_select_db($con,'mobiledata')){
	echo'Database not selected';	
} 
$contactname=$_POST['contactname'];
$contactno=$_POST['contactno'];

 $sql="INSERT INTO contactdata (contactname,contactno) VALUES ('$contactname','$contactno')";
 if(!mysqli_query($con,$sql)){
 echo'Not Inerted';
 }
 else{	 
	 echo'Inserted';
 }
 header ("refresh:2; url=index.html");  
?>
