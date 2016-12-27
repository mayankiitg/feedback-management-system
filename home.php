<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 
<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "");
// Selecting Database
$db = mysqli_select_db($connection,"login");
ob_start();
session_start();// Startingi Session
// Storing Session
$user_check=$_SESSION['roll'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($connection,"select Roll from student where Roll='".$user_check."'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['Roll'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('Location: login.php'); // Redirecting To Home Page
}
?>

</body>
</html>