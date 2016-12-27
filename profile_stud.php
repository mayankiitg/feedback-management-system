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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="temp1.css">
<title>Profile</title>
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
  <div class="sidebar1">
    <ul class="nav">
      <li><a href="#<?php echo $Scode[0]['CID']; ?>">
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
      <li><a href="#<?php echo $Scode[1]['CID']; ?>"><?php if(!empty($Scode[1]['CID']))
	  {
		  echo $Scode[1]['CID'];
	  }
	  else
	  {
		  echo "";
	}
		?></a></li>
      <li><a href="#<?php echo $Scode[2]['CID']; ?>"><?php if(!empty($Scode[2]['CID']))
	  {
		  echo $Scode[2]['CID'];
	  }
	  else
	  {
		  echo "";
	}
		?></a></li>
      <li><a href="#<?php echo $Scode[3]['CID']; ?>"><?php if(!empty($Scode[3]['CID']))
	  {
		  echo $Scode[3]['CID'];
	  }
	  else
	  {
		  echo "";
	}
		?></a></li>
        <li><a href="#<?php echo $Scode[4]['CID']; ?>"><?php if(!empty($Scode[4]['CID']))
	  {
		  echo $Scode[4]['CID'];
	  }
	  else
	  {
		  echo "";
	}
		?></a></li>
        <li><a href="#<?php echo $Scode[5]['CID']; ?>"><?php if(!empty($Scode[5]['CID']))
	  {
		  echo $Scode[5]['CID'];
	  }
	  else
	  {
		  echo "";
	}
		?></a></li>
        <li><a href="#<?php echo $Scode[6]['CID']; ?>"><?php if(!empty($Scode[6]['CID']))
	  {
		  echo $Scode[6]['CID'];
	  }
	  else
	  {
		  echo "";
	}
		?></a></li>
        <li><a href="#<?php echo $Scode[7]['CID']; ?>"><?php if(!empty($Scode[7]['CID']))
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
  <div class="content">
   <?php
   $i=0;
   while(!empty($Scode[$i]))
	{
		$temp1=$Scode[$i]['CID'];
		$temp2=$Scode[$i]['Cname'];
		echo '<h2 id="'.$temp1.'">'.$temp1.'</h2>';
		echo "<font size=\"+2\">$temp2</font><br/>";
		
		
		$query12="SELECT Name,image,username FROM faculty WHERE cid1='".$temp1."' or cid2='".$temp1."'";
		$faculty=mysqli_query($connection,$query12);
		$y=-1;
		while($row1 = mysqli_fetch_array($faculty))
		{
    		$y++;

    		$fac[$y]['Name']=$row1['Name'];
    		$fac[$y]['image']=$row1['image'];
			$temp1=$fac[$y]['Name'];
			$temp2=$fac[$y]['image'];
			$fac[$y]['username']=$row1['username'];
			echo'<a href="course.php?fac='.$fac[$y]['username'].'&cid='.$Scode[$i]['CID'].'"><img src="'.$temp2.'"height="150px" width="150px" ></a>';
			echo"<h3>$temp1</h3>";
		}
		$i++;
		
		
	}
   
   ?>
   
    
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