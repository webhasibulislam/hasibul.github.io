<?php
	include 'inc/header.php';
	include 'lib/User.php';
	Session::checkSession();
?>

<?php
	if (isset($_GET['id'])) {
		$userid = (int)$_GET['id'];
	}
	$user = new User();

	if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])){
		$updateusr = $user->updateUserData($userid, $_POST);
	}
?>
			<div class="panel panel-default">
				<div class="panel-heading">
					<h2>User Profile<span class="pull-right"><a class="btn btn-primary" href="index.php">Back</a></h2>
				</div>

				<div class="panel-body">
					<div style="width: 600px;margin: 0px auto;">
			<?php
				if (isset($updateusr)) {
					echo $updateusr;
				}
			?>

	<?php  
		$userdata = $user->getUserById($userid);
		if ($userdata) {
			
	?>
						<form action="" method="POST">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" name="name" class="form-control" value="<?php echo $userdata->name ?>">
							</div>
							<div class="form-group">
								<label for="username">User Name</label>
								<input type="text" name="username" class="form-control" value="<?php echo $userdata->username ?>">
							</div>
							<div class="form-group">
								<label for="email">Email Address</label>
								<input type="email" name="email" id="email" class="form-control" value="<?php echo $userdata->email ?>">
							</div>

					<?php
						$sesId = Session::get("id");
						if ($userid == $sesId) {
					?>
							<button type="submit" name="update" class="btn btn-success">Update</button>
							<a class="btn btn-info" href="changepass.php?id=<?php echo $userid; ?>">Password Change</a>

					<?php } ?>
						</form>

		<?php } ?>
					</div>
				</div>
			</div>

<?php
	include 'inc/footer.php';
?>