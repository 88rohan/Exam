<?php
// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
echo "Logout successfull.";


//hmko phle logout successfull print kraye uske baad back krne pr login page me jaye
header("location: login.php");
exit;
?>