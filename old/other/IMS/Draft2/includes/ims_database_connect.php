<?php

$username="robf06_admin";
$password="Admin1";
$database="robf06_ims";
	
mysql_connect('mysql1206.hostexcellence.com',$username,$password);
@mysql_select_db($database) or die('Unable to select database');


?>