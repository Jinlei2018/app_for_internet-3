
<!doctype html>
<html lang="en">
	<head>
		<title>Login</title>
		<?php 
		include TASTY_RECIPES_FRAGMENTS . 'css.php';
		?>
	</head>
	<body>
		<div class="container">
		<header>
			<?php
			include TASTY_RECIPES_FRAGMENTS . 'header.php';
			?>
		</header>

		<div class="main">
				<div class="divrow">
						<br>
						<form action="login_process.php" method="POST">
							Username:
							<input type="text" name="username" size="20" maxlength="15" >
							<br><br>
							Password:
							<input type="password" name="password" size="20" maxlength="15">
							<br><br>
							<input type="submit" value="Log in" name="loginButton">
							<input type="button" onclick="window.location.href='register.php'" value="Sign up">
						</form>
				</div>
					<br><br><br>
		</div>
		</div>
	</body>
</html>
