<?php
if (!isset($_SESSION)) {
	session_start();
}
include("checkLogin.php");
$p = new login();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Login Page</title>
	<!-- <base href="/web-dev-frontend/" /> -->
	<!-- Bootstrap CDN -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
	<!-- End Bootstrap CDN -->
	<!-- Icon -->
	<link rel="stylesheet" href="../icon/css/all.min.css" />
	<!-- End Icon -->
	<!-- CSS -->

	<link rel="stylesheet" href="../css/style.css" />

	<!-- End CSS -->
	<!-- Font CND -->
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link href="https://fonts.googleapis.com/css2?family=Limelight&display=swap" rel="stylesheet" />
</head>

<body>
	<!-- Login -->
	<div class="wrapper fadeInDown">
		<div id="formContent">
			<!-- Tabs Titles -->

			<!-- Icon -->
			<div class="fadeIn first">
				<i class="icon fas fa-book-open py-4"></i>
			</div>
			<!-- End Icon -->

			<!-- Login Form -->
			<form>
				<input type="text" id="login" class="fadeIn second" name="username" placeholder="username" />
				<input type="text" id="password" class="fadeIn third" name="password" placeholder="password" />
				<input type="submit" class="login-btn fadeIn fourth" value="Log In" />
				<?php
				if (isset($_POST['submit'])) {
					$user = $_REQUEST['username'];
					$pass = $_REQUEST['password'];
					if ($user != '' && $pass != '') {
						$p->checklogin($user, $pass);
					} else if ($user == "" && $pass == "") {
						$wlogin = "Vui lòng điền tài khoản mật khẩu !";
						$_SESSION['wlogin'] = $wlogin;
					} else if ($user == "") {
						$wlogin = "Vui lòng điền tài khoản !";
						$_SESSION['wlogin'] = $wlogin;
					} else if ($pass == "") {
						$wlogin = "Vui lòng điền mật khẩu !";
						$_SESSION['wlogin'] = $wlogin;
					} else {
						$wlogin = "Lỗi không xác định !";
						$_SESSION['wlogin'] = $wlogin;
					}
				}


				if (isset($_SESSION['wlogin']))
					echo "<p class='frame-text' style='color:red'>* " . $_SESSION['wlogin'] . "</p>";

				?>
			</form>
			<!-- End Login Form -->

			<!-- Remind Passowrd -->
			<div id="formFooter">
				<a class="underlineHover" href="#">Forgot Password?</a>
				<div><a class="underlineHover" href="#">Register</a></div>
			</div>
			<!-- End Remind Passowrd -->
			<!-- End Tabs Titles -->
		</div>
	</div>
	<!-- End Login -->
	<!-- Bootstrap script -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
	<!-- End Bootstrap script -->
</body>

</html>