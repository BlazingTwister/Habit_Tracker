<?php

session_start();

// Unset session variables
unset($_SESSION["username"]);

// Destroy session data and cookies
session_destroy();

// Redirect to login page
header("Location: Login_view.php");

// Exit 
exit();

?>