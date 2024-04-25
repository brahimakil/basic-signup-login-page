<?php
// Start the session
session_start();

// Unset all of the session variables
$_SESSION = array();

// Destroy the session
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Logout</title>
</head>
<body>
<script>
// Display alert message using JavaScript
alert("Logged out successfully.");
// Redirect to the login page or any other page you want
window.location.href = "../index.php";
</script>
</body>
</html>
