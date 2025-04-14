<?php
session_start(); // Start the session to manage session data

// Destroy the session to log the user out
session_destroy();

// Redirect to admin login page after logout
header("Location: adminLogin.html");
exit(); // Ensure no further code is executed after the redirect
?>
