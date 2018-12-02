<?php

require_once './resources/fragments/start.php';

if (empty($username) ) {
	echo '<script language="JavaScript">;alert("Username is required!");</script>;';
	include "login.php";
}
elseif (empty($password)) {
	echo '<script language="JavaScript">;alert("Password is required!");</script>;';
	include "login.php";
}


else{
	if (!ctype_alnum($username) OR !ctype_alnum($password)) {
				echo '<script language="JavaScript">;alert("Only letters and digits allowed!");</script>;';
				include 'login.php';
            } else {
                $passed = TRUE;
            }
       
}  