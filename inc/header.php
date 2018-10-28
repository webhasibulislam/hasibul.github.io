	<?php
		$filepath = realpath(dirname(__FILE__));
		include_once $filepath.'/../lib/Session.php';
		Session::init(); 
	?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login || Registration System</title>
		<link rel="stylesheet" type="text/css" href="inc/bootstrap.min.css">
		<script src="inc/bootstrap.min.js"></script>
		<script src="inc/jquery-1.12.0.min.js"></script>
	</head>

	<?php
		if (isset($_GET['action']) && $_GET['action'] == "logout") {
			Session::destory();
		}

	?>


	<body>
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="index.php">Login Registar System with PHP & PDO</a>
					</div>
					<ul class="nav navbar-nav pull-right">
						

				<?php 
					$id = Session::get("id");
					$userlogin = Session::get("login");
					if ($userlogin == true) {
						
				?>		
						<li><a href="index.php">Home</a></li>
						<li><a href="profile.php?id=<?php echo $id; ?>">Profile</a></li>
						<li><a href="?action=logout">LogOut</a></li>

				<?php } else{ ?>
						<li><a href="login.php">LogIn</a></li>
						<li><a href="register.php">Register</a></li>
				<?php } ?>
					</ul>
				</div>
			</nav>
