<?php
// Unset the 'email' cookie if it exists
if (isset($_COOKIE['email'])) {
    // Unset the cookie by setting its expiration time to a time in the past
    setcookie('email', '', time() - 3600, '/');
}
if (isset($_COOKIE['token'])) {
    // Unset the cookie by setting its expiration time to a time in the past
    setcookie('token', '', time() - 3600, '/');
}
// Destroy all session data
session_start(); // Start the session
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session

// Redirect to the index page
header("Location: index.php");
exit; // Ensure that the script stops executing after the redirection
?>
