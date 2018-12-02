
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
                <form action="register_process.php" method="POST">
					Your username:
					<input type="text" name="username" size="20" maxlength="15" >
					<br><br>
					Your password:
					<input type="password" name="password" size="20" maxlength="15">
					<br><br>
					Confirm password：
					<input type="password" name="confirmPassword" size="20" maxlength="15">
					<br><br>
					
					<input type="submit" name="submit" value="Register">
					<input type="reset" name="cancel" value="Cancel">
				</form>
				</div>
					<br><br><br>
		</div>
		</div>
	</body>
</html>
