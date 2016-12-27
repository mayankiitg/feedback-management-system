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
	
	$temp1=$_GET['cid'];
	$temp=$_GET['fac'];
	
	$ques[0]=mysqli_real_escape_string($connection,$_POST['q1']);
	$ques[1]=mysqli_real_escape_string($connection,$_POST['q2']);
	$ques[2]=mysqli_real_escape_string($connection,$_POST['q3']);
	$ques[3]=mysqli_real_escape_string($connection,$_POST['q4']);
	$ques[4]=mysqli_real_escape_string($connection,$_POST['q5']);
	$ques[5]=mysqli_real_escape_string($connection,$_POST['q6']);
	$ques[6]=mysqli_real_escape_string($connection,$_POST['q7']);
	$ques[7]=mysqli_real_escape_string($connection,$_POST['q8']);
	$ques[8]=mysqli_real_escape_string($connection,$_POST['q9']);
	$ques[9]=mysqli_real_escape_string($connection,$_POST['q10']);
	$ques[10]=mysqli_real_escape_string($connection,$_POST['q11']);
	$ques[11]=mysqli_real_escape_string($connection,$_POST['q12']);
	$ques[12]=mysqli_real_escape_string($connection,$_POST['q13']);
	$ques[13]=mysqli_real_escape_string($connection,$_POST['q14']);
	$ques[14]=mysqli_real_escape_string($connection,$_POST['q15']);
	$w=2+0.5*($ques[11]+$ques[12]+$ques[13]+$ques[14]);
	
	
	
	$comment=mysqli_real_escape_string($connection,$_POST['comment']);	
	$query="INSERT INTO endsem(Roll,CID,FID,Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,Q12,Q13,Q14,Q15,w,Remarks) VALUES ('".$user_check."','".$temp1."','".$temp."','".$ques[0]."','".$ques[1]."','".$ques[2]."','".$ques[3]."','".$ques[4]."','".$ques[5]."','".$ques[6]."','".$ques[7]."','".$ques[8]."','".$ques[9]."','".$ques[10]."','".$ques[11]."','".$ques[12]."','".$ques[13]."','".$ques[14]."','".$w."','".$comment."')";
	mysqli_query($connection,$query);
	header('Location:profile_stud.php');
	
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
  <p ><b>Welcome <?php echo $_SESSION['name']; ?></b><a href="logout.php"><font color="#FFFFFF">Logout</font></a></p>
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
  <div class="content" style="float:right">
  <h3 align="center">honesty quote</h3>
  <h2>Endsem Feedback </h2>
  <?php
  	$temp=$_GET['fac'];
	$temp1=$_GET['cid'];
	$strSQL = mysqli_query($connection,"select Name from faculty where username='".$temp."'");
	$result=mysqli_fetch_array($strSQL);
	echo '<b>'.$result['Name'].'</b><br/>';
	echo '<b>'.$temp1.'</b><br/>';
   ?>
  
  <form action="" method="post">
    <table>
  <tr>
  <td width="300">About the instructor
  </td>
  <td width="60">
  Strongly Disagree
  </td>
  <td width="60">
  Disagree
  </td>
  <td width="60">
  Neutral
  </td>
  <td width="60">
  Agree
  </td>
  <td width="60">
  Strongly Agree
  </td>
  </tr>
  <tr align="center">
  <td align="left">
  1. Overall, the instruction was excellent
  </td>
  <td>
  <input type="radio" name="q1" value="1" />
  </td>
  <td>
  <input type="radio" name="q1" value="2" />
  </td>
  <td>
  <input type="radio" name="q1" value="3" checked="checked" />
  </td>
  <td>
  <input type="radio" name="q1" value="4" />
  </td>
  <td>
  <input type="radio" name="q1" value="5" />
  </td>
  
  </tr>
  
  <tr align="center">
  <td align="left">
  2. The concepts were explained with clarity.
  </td>
  <td>
  <input type="radio" name="q2" value="1" />
  </td>
  <td>
  <input type="radio" name="q2" value="2" />
  </td>
  <td>
  <input type="radio" name="q2" value="3" checked="checked" />
  </td>
  <td>
  <input type="radio" name="q2" value="4" />
  </td>
  <td>
  <input type="radio" name="q2" value="5" />
  </td>
  
  </tr>
   <tr align="center">
  <td align="left">
  3. Questions and discussions were encouraged.
  </td>
  <td>
  <input type="radio" name="q3" value="1" />
  </td>
  <td>
  <input type="radio" name="q3" value="2" />
  </td>
  <td>
  <input type="radio" name="q3" value="3" checked="checked" />
  </td>
  <td>
  <input type="radio" name="q3" value="4" />
  </td>
  <td>
  <input type="radio" name="q3" value="5" />
  </td>
  
  </tr>
  
  <tr align="center">
  <td align="left">
  4. Allotted numbers of classes was held.
  </td>
  <td>
  <input type="radio" name="q4" value="1" />
  </td>
  <td>
  <input type="radio" name="q4" value="2" />
  </td>
  <td>
  <input type="radio" name="q4" value="3" checked="checked" />
  </td>
  <td>
  <input type="radio" name="q4" value="4" />
  </td>
  <td>
  <input type="radio" name="q4" value="5" />
  </td>
  
  </tr>
  
  
  <tr align="center">
  <td align="left">
  5. Evaluation was done regularly and feedback was given.
  </td>
  <td>
  <input type="radio" name="q5" value="1" />
  </td>
  <td>
  <input type="radio" name="q5" value="2" />
  </td>
  <td>
  <input type="radio" name="q5" value="3" checked="checked" />
  </td>
  <td>
  <input type="radio" name="q5" value="4" />
  </td>
  <td>
  <input type="radio" name="q5" value="5" />
  </td>
  
  </tr>
  <tr align="center">
  <td align="left">
  6. Same instructor should continue for the naext batch.
  </td>
  <td>
  <input type="radio" name="q6" value="1" />
  </td>
  <td>
  <input type="radio" name="q6" value="2" />
  </td>
  <td>
  <input type="radio" name="q6" value="3" checked="checked" />
  </td>
  <td>
  <input type="radio" name="q6" value="4" />
  </td>
  <td>
  <input type="radio" name="q6" value="5" />
  </td>
  
  </tr>
  </table>
  <br /><br />
  
  <table>
  <tr>
  <td width="300">About the course
  </td>
  <td width="60">
  Strongly Disagree
  </td>
  <td width="60">
  Disagree
  </td>
  <td width="60">
  Neutral
  </td>
  <td width="60">
  Agree
  </td>
  <td width="60">
  Strongly Agree
  </td>
  </tr>
  <tr align="center">
  <td align="left">
  1. The course was highly enjoyable
  </td>
  <td>
  <input type="radio" name="q7" value="1" />
  </td>
  <td>
  <input type="radio" name="q7" value="2" />
  </td>
  <td>
  <input type="radio" name="q7" value="3" checked="checked" />
  </td>
  <td>
  <input type="radio" name="q7" value="4" />
  </td>
  <td>
  <input type="radio" name="q7" value="5" />
  </td>
  
  </tr>
  
  <tr align="center">
  <td align="left">
  2. The content of the course was appropriate.
  </td>
  <td>
  <input type="radio" name="q8" value="1" />
  </td>
  <td>
  <input type="radio" name="q8" value="2" />
  </td>
  <td>
  <input type="radio" name="q8" value="3" checked="checked" />
  </td>
  <td>
  <input type="radio" name="q8" value="4" />
  </td>
  <td>
  <input type="radio" name="q8" value="5" />
  </td>
  
  </tr>
   <tr align="center">
  <td align="left">
  3. Text/Reference materials were appropriate for the course.
  </td>
  <td>
  <input type="radio" name="q9" value="1" />
  </td>
  <td>
  <input type="radio" name="q9" value="2" />
  </td>
  <td>
  <input type="radio" name="q9" value="3" checked="checked" />
  </td>
  <td>
  <input type="radio" name="q9" value="4" />
  </td>
  <td>
  <input type="radio" name="q9" value="5" />
  </td>
  
  </tr>
  
  <tr align="center">
  <td align="left">
  4. Pre-requisites mentioned were appropriate.
  </td>
  <td>
  <input type="radio" name="q10" value="1" />
  </td>
  <td>
  <input type="radio" name="q10" value="2" />
  </td>
  <td>
  <input type="radio" name="q10" value="3" checked="checked" />
  </td>
  <td>
  <input type="radio" name="q10" value="4" />
  </td>
  <td>
  <input type="radio" name="q10" value="5" />
  </td>
  
  </tr>
  
  
  <tr align="center">
  <td align="left">
  5. This course should be continued for future batches.
  </td>
  <td>
  <input type="radio" name="q11" value="1" />
  </td>
  <td>
  <input type="radio" name="q11" value="2" />
  </td>
  <td>
  <input type="radio" name="q11" value="3" checked="checked" />
  </td>
  <td>
  <input type="radio" name="q11" value="4" />
  </td>
  <td>
  <input type="radio" name="q11" value="5" />
  </td>
  
  </tr>
  </table>
  <br /><br />
  <table>
  <tr>
  <td width="400">About yourself
  </td>
  <td width="60">
  Yes
  </td>
  <td width="60">
  No
  </td>
  
  </tr>
  <tr align="center">
  <td align="left">
  1. I attended more than 75% classes.
  </td>
  <td>
  <input type="radio" name="q12" value="1" />
  </td>
  <td>
  <input type="radio" name="q12" value="0" checked="checked"/>
  </td>

  </tr>
  
  <tr align="center">
  <td align="left">
  2. I used the reference material provided.
  </td>
 <td>
  <input type="radio" name="q13" value="1" />
  </td>
  <td>
  <input type="radio" name="q13" value="0" checked="checked" />
  </td>
  
  </tr>
   <tr align="center">
  <td align="left">
  3. I came well prepared to the class.
  </td>
  <td>
  <input type="radio" name="q14" value="1" />
  </td>
  <td>
  <input type="radio" name="q14" value="0" checked="checked" />
  </td>
  
  </tr>
  
  <tr align="center">
  <td align="left">
  4. I completed the pre-requisites to the course.
  </td>
  <td>
  <input type="radio" name="q15" value="1" />
  </td>
  <td>
  <input type="radio" name="q15" value="0" checked="checked" />
  </td>
  
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