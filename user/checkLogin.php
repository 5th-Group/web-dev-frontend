<?php
ob_start();
if (!isset($_SESSION)) {
	session_start();
}


class login
{
	public function checklogin($user, $pass)
	{
		include("../connection.php");
		$p = new connect();
		$link = $p->connection();
		$sql = $link->prepare("select user_id, user_name, password, user_role from " . "(user) " . "where user_name=?" . "limit 1");
		$sql->bind_param('s', $user);

		$sql->execute();

		$sql->bind_result($userId, $username, $password, $userRole);

		if ($sql->num_rows() == 1) {
			if (password_verify($pass, $password)) {
				$_SESSION['login'] = true;
				echo 'logged in';
				$_SESSION['userId'] = $userId;
				$_SESSION['username'] = $username;
				$_SESSION['userRole'] = $userRole;
				header('Location:http://localhost/WebDevMain');
			} else {
				$wlogin = "Tài khoản không trùng khớp!";
				$_SESSION['wlogin'] = $wlogin;
			}
		} else {
			$wlogin = "Tài khoản không tồn tại!";
			$_SESSION['wlogin'] = $wlogin;
		}

		if (isset($_SESSION['wlogin'])) {
			echo "<p class='frame-text' style='color:red'>* " . $_SESSION['wlogin'] . "</p>";
		}


		$sql->close();
		$link->close();
	}
}
