
<?php 
include('fhome.php');
$query1=mysqli_query($connection,"SELECT * FROM faculty WHERE username='".$user_check."'");
$result=mysqli_fetch_array($query1);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="fpersonal.css">
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
  <?php 
  $name=$result['Name'];
  echo 'Welcome : ';
  echo '<font color="#33FF99"> '."$name".' </font>';
  
  
  ?>
  <p style="text-align:right"><a href="logout.php"><font color="#FFFFFF">Logout</font></a></p>
  </div>
  <div style="text-align:right; float:right">

	</div>
    
    <!-- end .header --></div>
 
  <div class="content" align="center">
  <?php echo'<img src="'.$result['image'].'" height="200px" width="200px">'; ?> 
  
  <table style="width:40%" align="center">
  <tr>
    <td>Name</td>
    <td><?php echo $result['Name']; ?></td>		
  </tr>
  
  <tr >
    <td>E-Mail</td>
    <td><?php echo $result['username']; ?>@iitg.ernet.in</td>		
  </tr>
  <tr >
    <td>Department</td>
    <td><?php echo $result['Department']; ?></td>		
  </tr>
  
  <tr >
    <td>Course id</td>
    <td><?php echo $result['cid1']; ?></td>		
  </tr>
</table>



<br />

<form action="profile_fac.php">
  <input type="submit" value="Proceed" />
</form>
<br />
<form action="contactus.php">
  <input type="submit" value="Report Error" />
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