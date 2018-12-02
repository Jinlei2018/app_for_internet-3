<?php

require_once './resources/fragments/start.php';
use TastyRecipes\Controller\SessionManager;

if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
	echo '<script language="JavaScript">;alert("You must log in to send a comment!");location.href="login.php";</script>;';
}

if (!empty($_POST['comment'])) {
	$time = date("Y-m-d H:i:s");
	$controller = SessionManager::getController();
    $result_feedback = $controller->insertComment($_SESSION['username'], $_POST['comment'], $time, $recipe);
	if($result_feedback){
		echo '<script language="JavaScript">;alert("Your comment has been successfully sent!");</script>;';
	}
} else{
		echo '<script language="JavaScript">;alert("The comment is empty!!");</script>;';	
}		
echo '<meta http-equiv="refresh" content="0">';