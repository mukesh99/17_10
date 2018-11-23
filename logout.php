<?php
ob_start();
session_start();
require 'dbconnect.php';

if(isset($_SESSION['user']) && $_SESSION['user'] != "") {
	$id = $_SESSION['user'];
	$sql1="UPDATE `users` SET `status` = 'inactive' WHERE `users`.`id` = $id";
	$res1=mysqli_query($conn, $sql1);
}
else
{
	header("Location: login.php");
}

session_destroy();
unset($_SESSION['user']);
unset($_SESSION['user_type']);
exit;
