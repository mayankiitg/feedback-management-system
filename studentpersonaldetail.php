
<?php 
include('home.php');
$query1=mysqli_query($connection,"SELECT * FROM student WHERE Roll='".$user_check."'");
$result=mysqli_fetch_array($query1);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="temp1.css">
<title>Untitled Document</title>
</head>

<body>

<div class="container">
  <div class="header" style="height: 116px; padding-bottom: 0px;">
  <div id="logo" style="float:left">
  <a href="http://www.iitg.ac.in/"><img src="iitg_logo.jpg" alt="Logo" name="logo" id="Insert_logo" style="background-color: #8090AB" /></a>
  </div>
  <div id="text" style="text-align:center; height:115px; padding-top:20px; float:inherit">
  <h2>IIT GUWAHATI STUDENT FEEDBACK</h2>
  <p style="text-align:right"><a href="logout.php"><font color="#FFFFFF">Logout</font></a></p>
  </div>
    
    <!-- end .header --></div>
 
  <div class="content" align="center">
  <table  align="center">
  <tr>
    <td>Name</td>
    <td><?php echo $result['Name']; ?></td>		
  </tr>
  <tr>
    <td>Roll Number</td>
    <td><?php echo $result['Roll']; ?></td>		
  </tr>
  <tr>
    <td>E-Mail</td>
    <td><?php echo $result['Username']; ?>@iitg.ernet.in</td>		
  </tr>
  <tr>
    <td>Department</td>
    <td><?php echo $result['Department']; ?></td>		
  </tr>
  <tr>
    <td>Year Of Enrollment</td>
    <td><?php echo $result['Year']; ?></td>		
  </tr>
  <tr>
    <td>Programme</td>
    <td><?php echo $result['Program']; ?></td>		
  </tr>
</table>

<br/>

<form action="profile_stud.php">
  <input align="absmiddle" type="submit" value="Proceed" />
</form>
<br />

<form  action="contactus.php">
  <input type="submit" align="absmiddle" value="Report Error" />
</form>


    
    
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