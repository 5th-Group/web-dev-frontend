<?php
ob_start();
class register
{
	public function saveregister($fn, $ln, $username, $pass, $adr, $email, $phone_number)
	{
		include("../connection.php");
		$p = new connect();
		echo '$username', '$pass', '$fn', '$ln', '$phone_number', '$email', '$adr';
		$sql = "insert into user" . "(userId, user_name, password, first_name, last_name, phone_number, email,address) " . " values " . "('NULL','$username','$pass','$fn', '$ln','$phone_number','$email','$adr')";
		$link = $p->connection();
		mysqli_query($link, $sql);

		header('Location:http://localhost/WebDevMain');
	}
}
