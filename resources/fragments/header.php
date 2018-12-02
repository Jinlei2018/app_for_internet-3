

<div class="logo">
			<div><img src="resources/images/bar2.jpg" alt="Tasty recipes" style="width:100%"></div>
			<div class="logo_text">Welcome to Tasty Recipes</div>
			</div>
			<div class="menu">
				<div class="menuitem"><a href="index.php"> Homepage</a></div>
				<div class="menuitem"><a href="meatballs.php">Meatballs</a></div>
				<div class="menuitem"><a href="pancakes.php">Pancakes</a></div>
				<div class="menuitem"><a href="calendar.php"> Calendar</a></div>
				<div class="login">				
					<?php
						if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {
							echo "Welcome! ".$_SESSION['username']."! ";
						}else{
							echo " <a href='login.php'>Log in</a>";
						}
					?>
				</div>
			</div>

