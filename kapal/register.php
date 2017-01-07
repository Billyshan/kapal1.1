<?php 
	session_start();
	// connect to database
	$db = mysqli_connect("localhost", "root", "", "kapal");
	if (isset($_POST['register_btn'])) {
		$username = mysqli_real_escape_string($_POST['username']);
		$email = mysqli_real_escape_string($_POST['email']);
		$password = mysqli_real_escape_string($_POST['password']);
		$password2 = mysqli_real_escape_string($_POST['password2']);
		if ($password == $password2) {

			$password = md5($password);
			$sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['message'] = "You are now logged in";
			$_SESSION['username'] = $username;
			header("location: home.php"); 
		}else{
			$_SESSION['message'] = "The two passwords do not match";
		}
	}
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Register</title>
		<meta charset="utf-8" />
		
		<link rel="stylesheet" href="assets/css/main.css" />
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/jquery.dropotron.min.js"></script>
		<script src="assets/js/jquery.scrollgress.min.js"></script>
		<script src="assets/js/skel.min.js"></script>
		<script src="assets/js/util.js"></script>
		<script src="assets/js/main.js"></script>

	</head>
	<body>
		<div id="page-wrapper">

			<!-- Main -->
				<section id="main" class="container 75%">
					<header>
						<h2>Register</h2>
						<p>Two more little step for write data.</p>
					</header>
					<div class="box">
						<form method="post" action="register.php">
							<div class="row uniform 50%">
								<div class="12u">
									<tr>
									<td>Username:</td>
									<td><input type="text" name="username" class="textInput"></td>
									</tr>
								</div>
							</div>
							<div class="row uniform 50%">
								<div class="12u">
								<tr>
								<td>Email:</td>
								<td><input type="email" name="email" class="textInput"></td>
								</tr>
								</div>
							</div>
							<div class="row uniform 50%">
								<div class="12u">
								<tr>
								<td>Password:</td>
								<td><input type="password" name="password" class="textInput"></td>
								</tr>
								</div>
							</div>
							<div class="row uniform 50%">
								<div class="12u">
								<tr>
								<td>Password again:</td>
								<td><input type="password" name="password2" class="textInput"></td>
								</tr>
								</div>
							</div>
							<div class="row uniform">
								<div class="12u">
								<ul class="actions align-center">
								<tr>
								<td></td>
								<td><input type="submit" name="register_btn" value="Register"></td>
								</tr>
									</ul>
								</div>
							</div>
						</form>
					</div>
				</section>
				<footer id="footer">
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

	</body>
</html>