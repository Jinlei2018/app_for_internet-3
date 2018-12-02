<?php
require_once './resources/fragments/start.php';
use TastyRecipes\Controller\SessionManager;
$formpassed = false;

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    $confirmPassword = $_POST["confirmPassword"]; 	
    include 'registerFormValidation.php';

    if ($formpassed === TRUE) {
        $controller = SessionManager::getController();
		
		$loginCheck=$controller->signUp($username, $password);
		
		if ($loginCheck==="Username exist!") {
			echo '<script language="JavaScript">;alert("Username exists, try another one!");</script>;';
			include 'register.php';
				SessionManager::storeController($controller);
		}else{
			echo '<script language="JavaScript">;alert("Register successful!");</script>;';
			include 'login.php';
		}
    } 
}
