<?php
//start session
session_start();

unset($_SESSION['username']); //delete the username

//session_destroy(); //delete all the session keys

header('location: login.php'); //redirect to login.php
?>