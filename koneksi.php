<?php

$host     = "127.0.0.1"; //umumnya menggunakan localhost
$username = "root";
$pass     = "";
$db       = "bangunrumah";

$con = mysql_connect($host, $username, $pass) or die(mysql_error());
mysql_select_db($db, $con) or die(mysql_error());

?>