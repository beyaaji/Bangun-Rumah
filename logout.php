<?php
error_reporting(0);

if(isset($_GET['logout'])){
	session_start();
	session_destroy();
	header("Location: vLogin.php");
}
?>