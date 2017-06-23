<?php
require "../connect_mysql.php";
$fcm_token=$_POST["fcm_token"];
$sql="Insert into fcm_info Values('".$fcm_token"');";
mysql_query($con,$sql);
mysql_close($con);
?>