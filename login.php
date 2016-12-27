<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login</title>
<link rel="stylesheet" type="text/css" href="login.css">
<link rel="stylesheet" href="jquery-ui.css">
<script src="jquery-1.10.2.js"></script>
<script src="jquery-ui.js"></script>
<script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>

</head>

<body>

<div class="container">
  <div class="header" style="height:115px">
   
  <div id="logo" style="float:left">
  <a href="http://www.iitg.ac.in/"><img src="iitg_logo.jpg" alt="Logo" name="logo" id="Insert_logo" style="background-color: #8090AB" /></a>
  </div>
  <div id="text" style="text-align:center; height:115px; padding-top:20px">
  <h2>IIT GUWAHATI STUDENT FEEDBACK</h2>
	</div>
  
 
    <!-- end .header --></div>
  <div class="content">
    

<?php
ob_start();
session_start();

function test_data($data)
{
	$data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$logerr = $message['roll'] = $message['email'] = $message['year'] = $message['pass'] = $message['dept'] = $message['prog']= $message['name']=$email= "";

include('db.php');
if(isset($_POST['action']))
{          
    if($_POST['action']=="login")
    {
		if($_POST['desgn']=="Student")
		{
			$email = mysqli_real_escape_string($connection,$_POST['email']);
			$password = mysqli_real_escape_string($connection,$_POST['password']);
			$strSQL = mysqli_query($connection,"select Name,Roll from student where Username='".$email."' and Password='".$password."'");
			$Results = mysqli_fetch_array($strSQL);
			if(count($Results)>=1)
			{
				$message = $Results['Name']." Login Sucessfully!!";
				
				//session_regenerate_id();
				$_SESSION['roll'] = $Results['Roll'];
				$_SESSION['name'] = $Results['Name'];
				//session_write_close();
				header('Location: studentpersonaldetail.php');
				
			}
			else
			{
				$logerr = "Invalid email or password!!";
				
				
			}
		}
		else
		{
			$email = mysqli_real_escape_string($connection,$_POST['email']);
			$password = mysqli_real_escape_string($connection,$_POST['password']);
			$strSQL = mysqli_query($connection,"select * from faculty where username='".$email."' and password='".$password."'");
			$Results = mysqli_fetch_array($strSQL);
			if(count($Results)>=1)
			{
				//$message = $Results['Name']." Login Sucessfully!!";
   			 $_SESSION['username'] = $Results['username'];
   			 //session_write_close();
   			 header('Location: fpersonal.php');
			
			}
			else
			{
				$logerr = "Invalid email or password!!";
			}
		}
    }
    elseif($_POST['action']=="signup")
    {
		if(empty(mysqli_real_escape_string($connection,$_POST['name'])))
		{
			$message['name']="Empty name";
			$flag=0;
		}
		else
		{
        	$name       = test_data(mysqli_real_escape_string($connection,$_POST['name']));
			$flag=1;
			//echo $name;
		}
		if(empty(mysqli_real_escape_string($connection,$_POST['email'])))
		{
			$message['email']="Empty email";
			$flag1=0;
		}
		else
		{
        	$email       = test_data(mysqli_real_escape_string($connection,$_POST['email']));
			$flag1=1;
		}
        //$email      = test_data(mysqli_real_escape_string($connection,$_POST['email']));
		if(empty(mysqli_real_escape_string($connection,$_POST['password'])))
		{
			$message['pass']="Empty password";
			$flag2=0;
		}
		else
		{
        	$password       = test_data(mysqli_real_escape_string($connection,$_POST['password']));
			$flag2=1;
			//echo $password;
		}
        //$password   = mysqli_real_escape_string($connection,$_POST['password']);
		if(empty(mysqli_real_escape_string($connection,$_POST['roll'])))
		{
			$message['roll']="Empty roll";
			$flag3=0;
		}
		else
		{
        	$roll       = test_data(mysqli_real_escape_string($connection,$_POST['roll']));
			$flag3=1;
		}
		if(empty(mysqli_real_escape_string($connection,$_POST['year'])))
		{
			$message['year']="Empty year";
			$flag4=0;
		}
		else
		{
        	$year       = test_data(mysqli_real_escape_string($connection,$_POST['year']));
			$flag4=1;
		}
		if(empty(mysqli_real_escape_string($connection,$_POST['dept'])))
		{
			$message['dept']="Empty dept";
			$flag5=0;
		}
		else
		{
        	$dept       = test_data(mysqli_real_escape_string($connection,$_POST['dept']));
			$flag5=1;
		}
		if(empty(mysqli_real_escape_string($connection,$_POST['program'])))
		{
			$message['prog']="Empty programme";
			$flag6=0;
		}
		else
		{
        	$program       = test_data(mysqli_real_escape_string($connection,$_POST['program']));
			$flag6=1;
		}
		
	    $query = "SELECT Username FROM student where Username='".$email."'";
        $result = mysqli_query($connection,$query);
        $numResults = mysqli_num_rows($result);
        //if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
        //{
          //  $message =  "Invalid email address please type a valid email!!";
        //}
        if($numResults>=1)
        {
            $message['email'] = $email." Email already exist!!";
        }
		else if($flag==0||$flag1==0||$flag2==0||$flag3==0||$flag4==0||$flag5==0||$flag6==0)
		{
			$error="Error";
			header('Location: login.php#name');

		}
        else
        {
			$query2="INSERT INTO student(Roll,Name,Department,Program,Year,Username,Password) VALUES ('".$roll."','".$name."','".$dept."','".$program."','".$year."','".$email."','".$password."')";
            mysqli_query($connection,$query2);
			$_SESSION['roll'] = $roll;
			$_SESSION['name'] = $name;
            $success = "Signup Sucessfully!!";
			header('Location: studentpersonaldetail.php');
        }
    }
}
 
?>


<!-- Login and Signup forms -->
<div id="tabs">
  <ul>
    <li><a href="#tabs-1">Login</a></li>
    <li><a href="#tabs-2" class="active">Signup</a></li>
 
  </ul>                 
  <div id="tabs-1" style="height:395px">
  <form action="" method="post">
    <p><input id="email" name="email" type="text" placeholder="Email">@iitg.ernet.in</p>
    <p><input id="password" name="password" type="password" placeholder="Password"><span class="error">* <?php echo $logerr;?></span>
    <p><input id="desgn" name="desgn" type="radio" value="Student" checked="checked">Student
    	<input id="desgn" name="desgn" type="radio" value="Faculty">Faculty
    </p>
    <input name="action" type="hidden" value="login" /></p>
    <p><input type="submit" value="Login" /></p>
  </form>
  </div>
  <div id="tabs-2">
    <form action="" method="post">
    <p><input id="name" name="name" type="text" placeholder="Name"><span class="error">* <?php echo $message['name'];?></span></p>
    <p><input id="roll" name="roll" type="number" placeholder="Roll Number"><span class="error">* <?php echo $message['roll'];?></span></p>
    <p>Department:
    	<select name="dept">
        <option value="cse">CSE</option>
        <option value="mnc">MnC</option>
        <option value="ep">EP</option>
        <option value="me">ME</option>
        <option value="cl">CL</option>
        <option value="ce">CE</option>
        <option value="bt">BT</option>
        <option value="eee">EEE</option>
        <option value="ece">ECE</option>
        <option value="design">DESIGN</option>
        </select>
        <span class="error">* <?php echo $message['dept'];?></span>
    
    </p>
    <p>Programme:
    <select name="program">
        <option value="btech">B.Tech</option>
        <option value="mtech">M.Tech</option>
        <option value="phd">PhD</option>
    </select>
    <span class="error">* <?php echo $message['prog'];?></span>
    </p>
    <p><input id="year" name="year" type="number" placeholder="Year of Enrollment"><span class="error">* <?php echo $message['year'];?></span></p>
    <p><input id="email" name="email" type="text" placeholder="Email">@iitg.ernet.in<span class="error">* <?php echo $message['email'];?></span></p>
    <p><input id="password" name="password" type="password" placeholder="Password">
    <input name="action" type="hidden" value="signup" /><span class="error">* <?php echo $message['pass'];?></span></p>
    <p><input type="submit" value="Signup" /></p>
  </form>
  </div>
</div>

    <!-- end .content --></div>
  <div class="footer">
  <div style="float:left">
    <p align="center">©Heisenberg</p>
  </div>
    <p align="center"><a href="contactus.php"><font color="#FFFFFF">Contact Us</font></a></p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>