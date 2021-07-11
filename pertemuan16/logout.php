<?php 

session_start();
$_SESSION = []; // hanya untuk meyakinkan
session_unset(); // hanya untuk meyakinkan
session_destroy();

header("Location: login.php");
exit;

?>