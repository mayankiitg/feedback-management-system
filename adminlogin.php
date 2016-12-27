<?php

ob_start();
session_start();

	if(isset($_POST['action']))
	{
		$email = $_POST['email'];
		$password=$_POST['password'];
		if($email=="admin"&&$password=="1234")
		{
				$message="success";
			header('Location: admin1.php');
			$_SESSION['email']=$email;
		}
		else
		{
				$message="invalid credentials";
			
		}
		echo $message;
	}


?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>
</head>

<body>

<h1 align="center">Admin Login</h1>
<form action="" method="post">
    <p><input id="email" name="email" type="text" placeholder="Email"></p>
    <p><input id="password" name="password" type="password" placeholder="Password">
    </p>
    <p>
    <input type="submit" name="action" value="login" /></p>
    </form>


</body>
</html>