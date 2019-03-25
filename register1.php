<?php include('server1.php') ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	
	<form method="post" action="register1.php">

		<?php include('errors1.php'); ?>

			<div class="login-wrap">

				<div class="login-html">
					<input id="tab-2" type="radio" name="tab" class="sign-up"checked ><label for="tab-2" class="tab">Sign Up</label>
					

					
					<div class="login-form">
						<div class="sign-in-htm">
							<div class="group">
								<label for="user" class="label">Username</label>
								<input id="user"  name="username" type="text" class="input">
							</div>
							<div class="group">
								<label for="pass" class="label">Password</label>
								<input id="pass"  name="password" type="password" class="input" data-type="password">
							</div>
							<div class="group">
								<input id="check" type="checkbox" class="check" checked>
								<label for="check"><span class="icon"></span> Keep me Signed in</label>
							</div>
							<div class="group">
								<input type="submit" name="login_user" class="button" value="Sign In">
							</div>
							<div class="hr"></div>
							<div class="foot-lnk">
								<a href="register1.php">Not A Member Yet?</a>
							</div>
						</div>

					<div class="sign-up-htm">
								
						<div class="group">
							<label for="user" class="label">Username</label>
							<input type="text" class="input" name="username" value="<?php echo $username; ?>">
						</div>
						<div class="group">
							<label for="pass" class="label">Email Address</label>
							<input type="email" class="input" name="email" value="<?php echo $email; ?>">
						</div>
						<div class="group">
							<label for="pass" class="label">Password</label>
							<input type="password" class="input" name="password_1">
						</div>
						<div class="group">
							<label for="pass" class="label">Confirm Password</label>
							<input type="password" class="input" name="password_2">
						</div>
						<div class="group">
							<input type="submit" class="button" name="reg_user" value="Sign Up">
						</div>
						<div class="hr"></div>
						<div class="foot-lnk">
								<a href="login.php"> Already Member?</a>
						</div>
					
					</div>
			</div>
		</div>
	</form>
</body>
</html>