<?php

session_start();  // Start or resume the session
session_unset();  // Unset all session variables
session_destroy();  // Destroy the session
header("location:login.php");  // Redirect to the login page after logout

?>
