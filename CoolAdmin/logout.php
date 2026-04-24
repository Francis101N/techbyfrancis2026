<?php
echo "confirm(Are you sure you want to logout ?)";
session_start();

unset($_SESSION['admin_user']);

session_destroy();

// Redirect to login page (adjust the path as needed)
header("Location: index.php");
exit;
?>
