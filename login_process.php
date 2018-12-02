<?php
require_once './resources/fragments/start.php';
use TastyRecipes\Controller\SessionManager;

$passed=false;
if(isset($_POST['loginButton'])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    include 'loginFormValidation.php';
    if ($passed === TRUE) {
        $controller = SessionManager::getController();
        $loginResult = $controller->login($username, $password);
        if ($loginResult === True) {
            $_SESSION["username"] = $username;
            echo '<script language="JavaScript">;alert("Login successful! Welcome!");</script>;';
            SessionManager::storeController($controller);
            include 'index.php';
        }
else{
	echo '<script language="JavaScript">;alert("Wrong username or password! Login Failed!");</script>;'; 
	include 'login.php';
}	
    } 
}
?>