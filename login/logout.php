<?php

// if we have reached this page the user is attempting to logout
session_start();

session_destroy();
// unset the login session value

unset( $_SESSION['logged_in']);

header('location:login.php?action=logout');








?>