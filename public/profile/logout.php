<?php
session_start();  // Start the session

// Destroy all session data
session_unset();  // Unset all session variables
session_destroy();  // Destroy the session itself

// Redirect the user to the login page after logging out
header("Location: login.php");
exit();