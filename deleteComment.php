<?php

require_once './resources/fragments/start.php';
use TastyRecipes\Controller\SessionManager;

if (isset($_POST["delete"])) {
    $time = $_POST["time"];
    $controller = SessionManager::getController();
    $deleteResult=$controller->deleteComment($time, $recipe);
	
	if($deleteResult){
		echo '<script language="JavaScript">;alert("Your comment has been successfully deleted!");</script>;';
		echo '<meta http-equiv="refresh" content="0">';
	}
}
 