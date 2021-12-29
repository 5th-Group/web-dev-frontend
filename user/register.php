<?php
include("saveRegister.php");
$p = new register();
?>
<!doctype html>
<html>

<head>
	<meta charset="utf-8">
	<title>Market</title>
</head>

<body>
	<div class="frame">
		<form method="post" action="">
			<h1 class="frame-title">Register</h1>
			<p class="frame-text">Your's first name:</p>
			<input type="text" class="frame-input" name="first_name">
			<p class="frame-text">Your's last name:</p>
			<input type="text" class="frame-input" name="last_name">
			<p class="frame-text">Your's username:</p>
			<input type="text" class="frame-input" name="username">
			<p class="frame-text">Password:</p>
			<input type="password" class="frame-input" name="pass">
			<p class="frame-text">Address:</p>
			<input type="text" class="frame-input" name="address">
			<p class="frame-text">Email:</p>
			<input type="text" class="frame-input" name="email">
			<p class="frame-text">Phone number:</p>
			<input type="text" class="frame-input" name="phone_number">
			<div class="submit">
				<button class="submit-decoration frame-text" name="submit" value="Register" type="submit">Register</button>
			</div>
			<?php
			if (isset($_POST['submit'])) {
				switch ($_POST['submit']) {
					case 'Register': {
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
								$fn = $_REQUEST['first_name'];
								$ln = $_REQUEST['last_name'];
								$username = $_REQUEST['username'];
								$pass = password_hash($_REQUEST['pass'], PASSWORD_DEFAULT);
								$adr = $_REQUEST['address'];
								$email = $_REQUEST['email'];
								$phone_number = $_REQUEST['phone_number'];
								if ($fn != "" && $ln != "" && $username != "" && $pass != "" && $adr != "" && $email != "" && $phone_number != "") {
									$p->saveregister($fn, $ln, $username, $pass, $adr, $email, $phone_number);
								} else {
									echo "unknown error";
								}
							}
						}
				}
			}

			?>
		</form>
	</div>
</body>
<style>
	body {
		margin: 0;
	}

	input {
		padding-left: 15px;
	}

	.frame {
		width: 350px;
		height: 500px;
		border: 1px solid #bfbfbf;
		margin: 5% 0px 0px 5%;
	}

	.frame-title {
		margin: 0px 0px 0px 3%;
		font-family: Arial;
		font-weight: bold;
	}

	.frame-text {
		margin: 5% 0px 1% 3%;
		font-family: Arial;
		font-size: 20px;
	}

	.frame-input {
		margin: 1% 0px 1% 3%;
		width: 88%;
		height: 40px;
		border-radius: 5px;
		border: 1px solid #bfbfbf;
	}

	.submit-decoration {
		border: none;
		background-color: #17a3b8;
		color: white;
		padding: 10px 15px 9px 15px;
		border-radius: 8px;
		margin-top: 6%;
	}
</style>

</html>