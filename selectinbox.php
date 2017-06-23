<?php
include_once 'dbconnect.php';

$sql="Select * from inboxsms";
$r=mysql_query($sql);
$arr=array();
while($row=mysql_fetch_assoc($r)){
$arr[]=$row;
}
header('Content-Type:application/json');
echo json_encode($arr);   
?>
