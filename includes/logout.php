<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
unset($_SESSION["auth"]);
session_destroy();
 
// Redirect to login page
header("location: ../index.php?msg=You%20have%20been%20logged%20out!&type=information");
exit;
?>