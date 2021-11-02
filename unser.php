<?php
// start a session
session_start();

// initialize a session variable
$_SESSION['logged_in_user_id'] = '1';

// unset a session variable
unset($_SESSION['logged_in_user_id']);
?>