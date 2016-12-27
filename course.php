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
  <div class="sidebar1">
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
  <div class="content">
   <?php 
   	$temp=$_GET['fac'];
	$temp1=$_GET['cid'];
	$q="SELECT Name,image,sdate,edate FROM faculty WHERE username='".$temp."'";
	$q1=mysqli_query($connection,$q);
	$row1=mysqli_fetch_array($q1);
	
	
	?>
    <img src="<?php echo $row1['image']; ?>" height="200px" width="200px" />
    <h3><?php echo $row1['Name'];?> </h3>
    <h4><?php echo $temp1;?></h4>
    
    <a href="
	<?php $dt = $row1['sdate'];

	$x = strtotime($dt);
	$day = date("z", $x);
	$day=$day + 7;
	$w=date("z");
	$y=$w - $day;
	$week="1";
	$q2="SELECT Roll FROM feedback WHERE CID='".$temp1."' AND FID='".$temp."' AND Roll='".$user_check."' AND week='1'";
	$que2=mysqli_query($connection,$q2);
	$row2=mysqli_fetch_array($que2);
	
	if($y<0)
		echo "#";
	else if(empty($row2['Roll']))
	{
		echo 'wfeed.php?fac='.$temp.'&cid='.$temp1.'&week=1';
		
	}
	else
	{
		echo "#";
	}
		 ?>" 
    style="color:<?php
	$dt = $row1['sdate'];

	$x = strtotime($dt);
	$day = date("z", $x);
	$day=$day + 7;
	$w=date("z");
	$y=$w - $day; 
	 if($y<0)
	 	{
			echo "gray";
		}
	else if(empty($row2['Roll']))
		{echo "green";}
	else 
	{
		echo "red";
	}
	 ?>" >Week 1</a>
     <a href="
	<?php $dt = $row1['sdate'];

	$x = strtotime($dt);
	$day = date("z", $x);
	$day=$day + 14;
	$w=date("z");
	$y=$w - $day;
	$week="2";
	$q2="SELECT Roll FROM feedback WHERE CID='".$temp1."' AND FID='".$temp."' AND Roll='".$user_check."' AND week='2'";
	$que2=mysqli_query($connection,$q2);
	$row2=mysqli_fetch_array($que2);
	
	if($y<0)
		echo "#";
	else if(empty($row2['Roll']))
	{
		echo 'wfeed.php?fac='.$temp.'&cid='.$temp1.'&week=2';
		
	}
	else
	{
		echo "#";
	}
		 ?>" 
    style="color:<?php
	$dt = $row1['sdate'];

	$x = strtotime($dt);
	$day = date("z", $x);
	$day=$day + 14;
	$w=date("z");
	$y=$w - $day; 
	 if($y<0)
	 	{
			echo "gray";
		}
	else if(empty($row2['Roll']))
		{echo "green";}
	else 
	{
		echo "red";
	}
	 ?>" >Week 2</a>
     <a href="
	<?php $dt = $row1['sdate'];

	$x = strtotime($dt);
	$day = date("z", $x);
	$day=$day + 21;
	$w=date("z");
	$y=$w - $day;
	$week="3";
	$q2="SELECT Roll FROM feedback WHERE CID='".$temp1."' AND FID='".$temp."' AND Roll='".$user_check."' AND week='3'";
	$que2=mysqli_query($connection,$q2);
	$row2=mysqli_fetch_array($que2);
	
	if($y<0)
		echo "#";
	else if(empty($row2['Roll']))
	{
		echo 'wfeed.php?fac='.$temp.'&cid='.$temp1.'&week=3';
		
	}
	else
	{
		echo "#";
	}
		 ?>" 
    style="color:<?php
	$dt = $row1['sdate'];

	$x = strtotime($dt);
	$day = date("z", $x);
	$day=$day + 21;
	$w=date("z");
	$y=$w - $day; 
	 if($y<0)
	 	{
			echo "gray";
		}
	else if(empty($row2['Roll']))
		{echo "green";}
	else 
	{
		echo "red";
	}
	 ?>" >Week 3</a>
     <a href="
	<?php $dt = $row1['sdate'];

	$x = strtotime($dt);
	$day = date("z", $x);
	$day=$day + 28;
	$w=date("z");
	$y=$w - $day;
	$week="4";
	$q2="SELECT Roll FROM feedback WHERE CID='".$temp1."' AND FID='".$temp."' AND Roll='".$user_check."' AND week='4'";
	$que2=mysqli_query($connection,$q2);
	$row2=mysqli_fetch_array($que2);
	
	if($y<0)
		echo "#";
	else if(empty($row2['Roll']))
	{
		echo 'wfeed.php?fac='.$temp.'&cid='.$temp1.'&week=4';
		
	}
	else
	{
		echo "#";
	}
		 ?>" 
    style="color:<?php
	$dt = $row1['sdate'];

	$x = strtotime($dt);
	$day = date("z", $x);
	$day=$day + 28;
	$w=date("z");																															
	$y=$w - $day; 
	 if($y<0)
	 	{
			echo "gray";
		}
	else if(empty($row2['Roll']))
		{echo "green";}
	else 
	{
		echo "red";
	}
	 ?>" >Week 4</a>
     <a href="
	<?php $dt = $row1['sdate'];

	$x = strtotime($dt);
	$day = date("z", $x);
	$day=$day + 35;
	$w=date("z");
	$y=$w - $day;
	$week="5";
	$q2="SELECT Roll FROM feedback WHERE CID='".$temp1."' AND FID='".$temp."' AND Roll='".$user_check."' AND week='5'";
	$que2=mysqli_query($connection,$q2);
	$row2=mysqli_fetch_array($que2);
	
	if($y<0)
		echo "#";
	else if(empty($row2['Roll']))
	{
		echo 'wfeed.php?fac='.$temp.'&cid='.$temp1.'&week=5';
		
	}
	else
	{
		echo "#";
	}
		 ?>" 
    style="color:<?php
	$dt = $row1['sdate'];

	$x = strtotime($dt);
	$day = date("z", $x);
	$day=$day + 35;
	$w=date("z");
	$y=$w - $day; 
	 if($y<0)
	 	{
			echo "gray";
		}
	else if(empty($row2['Roll']))
		{echo "green";}
	else 
	{
		echo "red";
	}
	 ?>" >Week 5</a>
     <a href="
	<?php $dt = $row1['sdate'];

	$x = strtotime($dt);
	$day = date("z", $x);
	$day=$day + 42;
	$w=date("z");
	$y=$w - $day;
	$week="1";
	$q2="SELECT Roll FROM feedback WHERE CID='".$temp1."' AND FID='".$temp."' AND Roll='".$user_check."' AND week='6'";
	$que2=mysqli_query($connection,$q2);
	$row2=mysqli_fetch_array($que2);
	
	if($y<0)
		echo "#";
	else if(empty($row2['Roll']))
	{
		echo 'wfeed.php?fac='.$temp.'&cid='.$temp1.'&week=6';
		
	}
	else
	{
		echo "#";
	}
		 ?>" 
    style="color:<?php
	$dt = $row1['sdate'];

	$x = strtotime($dt);
	$day = date("z", $x);
	$day=$day + 42;
	$w=date("z");
	$y=$w - $day; 
	 if($y<0)
	 	{
			echo "gray";
		}
	else if(empty($row2['Roll']))
		{echo "green";}
	else 
	{
		echo "red";
	}
	 ?>" >Week 6</a>
     <a href="
	<?php $dt = $row1['sdate'];

	$x = strtotime($dt);
	$day = date("z", $x);
	$day=$day + 200;
	$w=date("z");
	$y=$w - $day;
	$week="1";
	$q2="SELECT Roll FROM feedback WHERE CID='".$temp1."' AND FID='".$temp."' AND Roll='".$user_check."' AND week='7'";
	$que2=mysqli_query($connection,$q2);
	$row2=mysqli_fetch_array($que2);
	
	if($y<0)
		echo "#";
	else if(empty($row2['Roll']))
	{
		echo 'wfeed.php?fac='.$temp.'&cid='.$temp1.'&week=7';
		
	}
	else
	{
		echo "#";
	}
		 ?>" 
    style="color:<?php
	$dt = $row1['sdate'];

	$x = strtotime($dt);
	$day = date("z", $x);
	$day=$day + 200;
	$w=date("z");
	$y=$w - $day; 
	 if($y<0)
	 	{
			echo "gray";
		}
	else if(empty($row2['Roll']))
		{echo "green";}
	else 
	{
		echo "red";
	}
	 ?>" >Week 7</a>
     <a href="
	<?php $dt1 = $row1['edate'];

	$x1 = strtotime($dt);
	$day1 = date("z", $x);
	$w1=date("z");
	$y1=$w1 - $day1;
	$q3="SELECT Roll FROM endsem WHERE CID='".$temp1."' AND FID='".$temp."' AND Roll='".$user_check."'";
	$que3=mysqli_query($connection,$q3);
	$row3=mysqli_fetch_array($que3);
	
	if($y1<0)
		echo "#";
	else if(empty($row3['Roll']))
	{
		echo 'efeed.php?fac='.$temp.'&cid='.$temp1.'';
		
	}
	else
	{
		echo "#";
	}
		 ?>" 
    style="color:<?php
	
	 if($y1<0)
	 	{
			echo "gray";
		}
	else if(empty($row3['Roll']))
		{echo "green";}
	else 
	{
		echo "red";
	}
	 ?>" >Endsem</a>
    
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