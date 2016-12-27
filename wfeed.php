<?php
include('home.php');
$Query="select CID,Cname from courses where Roll='".$user_check."'";
$Subject=mysqli_query($connection,$Query);
$i=-1;

while($row = mysqli_fetch_array($Subject))
{
    $i++;

    $Scode[$i]['CID']=$row['CID'];
    $Scode[$i]['Cname']=$row['Cname'];

}

if(isset($_POST['action']))
{
	$temp3=$_GET['week'];
	$temp1=$_GET['cid'];
	$temp=$_GET['fac'];
	$q1=mysqli_real_escape_string($connection,$_POST['q1']);	
	$q2=mysqli_real_escape_string($connection,$_POST['q2']);	
	$q3=mysqli_real_escape_string($connection,$_POST['q3']);	
	$q4=mysqli_real_escape_string($connection,$_POST['q4']);
	$comment=mysqli_real_escape_string($connection,$_POST['comment']);	
	$query="INSERT INTO feedback(Roll,CID,FID,Q1,Q2,Q3,Q4,Remarks,Week) VALUES ('".$user_check."','".$temp1."','".$temp."','".$q1."','".$q2."','".$q3."','".$q4."','".$comment."','".$temp3."')";
	mysqli_query($connection,$query);
	header('Location: profile_stud.php');
	
}
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
  <p ><b>Welcome <?php echo $_SESSION['name']; ?></b>
  
  <a href="logout.php"><font color="#FFFFFF" style="text-align:right">Logout</font></a></p>
 
  </div>
  <div style="text-align:right; float:right">
 
	</div>
    
    <!-- end .header --></div>
  <div class="sidebar1" style="float:left">
    <ul class="nav">
      <li><a href="profile_stud.php#<?php echo $Scode[0]['CID']; ?>">
	  <?php if(!empty($Scode[0]['CID']))
	  {
		  echo $Scode[0]['CID'];
	  }
	  else
	  {
		  echo "";
	}
		?>
      </a></li>
      <li><a href="profile_stud.php#<?php echo $Scode[1]['CID']; ?>"><?php if(!empty($Scode[1]['CID']))
	  {
		  echo $Scode[1]['CID'];
	  }
	  else
	  {
		  echo "";
	}
		?></a></li>
      <li><a href="profile_stud.php#<?php echo $Scode[2]['CID']; ?>"><?php if(!empty($Scode[2]['CID']))
	  {
		  echo $Scode[2]['CID'];
	  }
	  else
	  {
		  echo "";
	}
		?></a></li>
      <li><a href="profile_stud.php#<?php echo $Scode[3]['CID']; ?>"><?php if(!empty($Scode[3]['CID']))
	  {
		  echo $Scode[3]['CID'];
	  }
	  else
	  {
		  echo "";
	}
		?></a></li>
        <li><a href="profile_stud.php#<?php echo $Scode[4]['CID']; ?>"><?php if(!empty($Scode[4]['CID']))
	  {
		  echo $Scode[4]['CID'];
	  }
	  else
	  {
		  echo "";
	}
		?></a></li>
        <li><a href="profile_stud.php#<?php echo $Scode[5]['CID']; ?>"><?php if(!empty($Scode[5]['CID']))
	  {
		  echo $Scode[5]['CID'];
	  }
	  else
	  {
		  echo "";
	}
		?></a></li>
        <li><a href="profile_stud.php#<?php echo $Scode[6]['CID']; ?>"><?php if(!empty($Scode[6]['CID']))
	  {
		  echo $Scode[6]['CID'];
	  }
	  else
	  {
		  echo "";
	}
		?></a></li>
        <li><a href="profile_stud.php#<?php echo $Scode[7]['CID']; ?>"><?php if(!empty($Scode[7]['CID']))
	  {
		  echo $Scode[7]['CID'];
	  }
	  else
	  {
		  echo "";
	}
		?></a></li>
    </ul>
    <!-- end .sidebar1 --></div>
  <div class="content" style="float:right" >
  <h3 align="center">Being honest never hurts anyone. Being a liar hurts only you.</h3>
  <br />

  

	<h2><?php 
	$temp3=$_GET['week'];
	echo "Week ".$temp3;
	?></h2>
   <form action="" method="post">
  <table align="center">
  <tr>
  <td><h7><?php
  	$temp=$_GET['fac'];
	$temp1=$_GET['cid'];
	echo ''.$temp.'<br/>';
	echo ''.$temp1.'<br/>';
   ?></h7></td>
  </tr>
  <tr align="center">
  <td></td>
    <td>Strongly Disagree</td>
    <td>Disagree</td>		
    <td>Neutral</td>
    <td>Agree</td>
    <td>Strongly Agree</td>
  </tr>
  <tr align="center">
    <td align="justify">1. The instructor was well versed with the topic.</td>
    <td><input type="radio" name="q1" value="1" /></td>		
    <td><input type="radio" name="q1" value="2" /></td>
    <td><input type="radio" name="q1" value="3" checked="checked" /></td>	
 <td><input type="radio" name="q1" value="4" /></td>	
 <td><input type="radio" name="q1" value="5" /></td>	
 
  </tr>
  <tr align="center">
    <td align="justify">2. The instructor was able to deliver the topic very well. </td>
    <td><input type="radio" name="q2" value="1" /></td>		
    <td><input type="radio" name="q2" value="2" /></td>
    <td><input type="radio" name="q2" value="3" checked="checked" /></td>	
 <td><input type="radio" name="q2" value="4" /></td>	
 <td><input type="radio" name="q2" value="5" /></td>
  </tr>
  <tr align="center">
    <td align="justify">3. The instructor stimulated my interest in the topic.</td>
   <td><input type="radio" name="q3" value="1" /></td>		
    <td><input type="radio" name="q3" value="2" /></td>
    <td><input type="radio" name="q3" value="3" checked="checked" /></td>	
 <td><input type="radio" name="q3" value="4" /></td>	
 <td><input type="radio" name="q3" value="5" /></td>
  </tr>
   <tr align="center">
    <td align="justify">4. The instructor was well prepared for the topic </td>
   <td><input type="radio" name="q4" value="1" /></td>		
    <td><input type="radio" name="q4" value="2" /></td>
    <td><input type="radio" name="q4" value="3" checked="checked" /></td>	
 <td><input type="radio" name="q4" value="4" /></td>	
 <td><input type="radio" name="q4" value="5" /></td>
  </tr>
</table>
  
  <br />
  Please leave a comment:<br />
  (max 140 characters)<br />
  <textarea cols="80" rows="5" maxlength="140" name="comment"></textarea>
  
  <input type="submit" name="action" value="Submit" />
   </form>
   
    
  <!-- end .content --></div>
  <div class="footer">
    <div class="footer">
      <div style="float:left">
        <p align="center">©Heisenberg</p>
      </div>
      <p align="center"><a href="contactus.php"><font color="#FFFFFF">Contact Us</font></a></p>
      <!-- end .footer -->
    </div>
  </div>
  <!-- end .container --></div>
</body>
</html>