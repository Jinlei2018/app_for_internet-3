
<!doctype html>
<html lang="en">
	<head>
		<title>Tasty Pancakes</title>
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
			<br>
			<?php
			$recipeNr = 1;

			include TASTY_RECIPES_FRAGMENTS . 'parseRecipeXml.php';
			?>
			<br>
			
			
			
			<div id="comments">
				<?php
				$recipe = 'pancakes';
				include TASTY_RECIPES_FRAGMENTS . 'commentPart.php';
				?>
			</div>

			
		</div>
		</div>
	</body>
</html>
