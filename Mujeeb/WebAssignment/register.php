<?php include('functions.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="signup">
		<h2 class="header">Register</h2>
		<form method="POST" action="register.php">
			<?php echo display_error(); ?>
			<div class="input-group">
				<input type="text" name="username" placeholder="Your Name" value="<?php echo $username; ?>"value="<?php echo $username; ?>">
			</div>
			<div class="input-group">
				<input type="text" name="address" placeholder="Address">
			</div>
			<div class="input-group">
				<input type="text" name="telephone" placeholder="Phone Number">
			</div>
			<div class="input-group">
				<input type="Email" name="email" placeholder="Email" value="<?php echo $email; ?>">
			</div>
			<div class="input-group">
				<input type="Password" name="pass" placeholder="Password">
			</div>
			<div class="input-group">
				<input type="Password" name="cpass" placeholder="Confirm Password">
			</div>

			<div class="input-group">
				<button type="submit" class="btn" name="register_btn">Register</button>
			</div>

			<p>
				Already a member? <a href="login.php">Sign in</a>
			</p>

		</form>
	</div>
</body>
</html>