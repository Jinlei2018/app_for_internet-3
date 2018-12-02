<?php 
/**
 * Make sure the user can read the comments.
 */
require_once './resources/fragments/start.php';
use TastyRecipes\Controller\SessionManager;

$controller = SessionManager::getController();
$result_array = $controller->getComments($recipe);


