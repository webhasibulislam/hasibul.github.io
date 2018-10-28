<?php
	include 'inc/header.php';
	include 'lib/User.php';
?>
<?php
	$user = new User();

	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])){
		$usrRegi = $user->userRegistration($_POST);
	}
?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>User Registration</h2>
				</div>

				<div class="panel-body">
					<div style="width: 600px;margin: 0px auto;">
	<?php
		if(isset($usrRegi)){
			echo $usrRegi;
		}
	?>
						<form action="" method="POST">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" name="name" class="form-control">
							</div>
							<div class="form-group">
								<label for="username">User Name</label>
								<input type="text" name="username" class="form-control">
							</div>
							<div class="form-group">
								<label for="email">Email Address</label>
								<input type="email" name="email" id="email" class="form-control">
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" id="password" class="form-control">
							</div>
							<button type="submit" name="register" class="btn btn-success">Register</button>
						</form>
					</div>
				</div>
			</div>

<?php
	include 'inc/footer.php';
?>