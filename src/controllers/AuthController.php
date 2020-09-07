<?php 

require __DIR__ . '../../models/User.php';

$user = new User();

if(isset($_POST['register'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$register = $user->Register($email,$password);
	if($register) {
		echo "OK";
	}else{
		echo "Error";
	}
}