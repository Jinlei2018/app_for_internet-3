<?php
/**
 * Validates a form.
 */

require_once './resources/fragments/start.php';
//$errorUser = $errorPassword = $error = "";
if ($username == "") {
    //$errorUser = "Username is required";
	echo '<script language="JavaScript">;alert("Username is required!");location.href="register.php";</script>;';
}
elseif ($password == "") {
    //$errorPassword = "Password is required";
	echo '<script language="JavaScript">;alert("Password is required!");location.href="register.php";</script>;';
}
elseif ($confirmPassword == "") {
    //$errorPassword = "Password is required";
	echo '<script language="JavaScript">;alert("Confirm password is required!");location.href="register.php";</script>;';
}
elseif ($password != $confirmPassword) {
    echo '<script language="JavaScript">;alert("The password is not equal to the confirmed password!");location.href="register.php";</script>;';
}

else{
	
	if (!ctype_alnum($username) OR !ctype_alnum($password)) {
                //$error = "Only letters and digits allowed!";
				echo '<script language="JavaScript">;alert("Only letters and digits allowed!");</script>;';
				include 'register.php';
            } else {
                $formpassed = TRUE;
            }
       
}  