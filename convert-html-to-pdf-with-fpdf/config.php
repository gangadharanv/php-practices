<?php
$host1 = "localhost";
$db = "pdf_formate";
$username = "root";
$password = "root";

mysql_connect($host1, $username, $password) or die(mysql_error());
mysql_select_db($db) or die("Cannot select Database");
?>