<?php 
$filepath = realpath(dirname(__FILE__));
include_once($filepath.'/classes/User.php');
$usr = new User();
	$email = $_POST['email'];
	$name = $_POST['name'];
	$usrReg = $usr->userRegistration($email,$name);
?>