<?php

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}


$_SESSION = array();

// Destroy the session.
session_destroy();

// Redirect to login page
header("location: login.php");
exit; 
?>