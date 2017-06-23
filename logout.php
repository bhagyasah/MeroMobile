 <?php
 require 'core.inc.php';
//echo $http_referer;
 session_destroy();
 echo $http_referer;
//header('Location: '.$http_referer);
header('Location: index.php');

 ?>