<?php include('server1.php') ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>
			<div class="login-wrap">

				<div class="login-html">
					<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
					<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>

					<div class="login-form">
						<div class="sign-in-htm">
							<div class="group">
								<label for="user" class="label">Username</label>
								<input id="user"  name="username" type="text" class="input">
							</div>
							<div class="group">
								<label for="pass" class="label">Password</label>
								<input id="pass"  name="password" type="password" class="input">
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
					</div>
				</div>

			</div>
	</form>


</body>
</html>