<?php
require'config.inc.php';
//echo "test";
if (!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db)) {
	die(mysql_error());
	# code...
}
?>