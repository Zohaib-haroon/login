<?php

session_reset();
$_SESSION = array();
session_destroy();
header("location: login.php");

?>