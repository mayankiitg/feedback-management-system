<?php
include('fhome.php');
$query1=mysqli_query($connection,"SELECT * FROM faculty WHERE username='".$user_check."'");
$result=mysqli_fetch_array($query1);
$Query="select cid1,cid2 from faculty where username='".$user_check."'";
$Subject=mysqli_query($connection,$Query);
$row = mysqli_fetch_array($Subject);
$fid=$user_check;
$cid1=$row['cid1'];
$cid2=$row['cid2'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="profile_fac.css">
<title>Untitled Document</title>
</head>

<body>

<div class="container" style="background-color:#FFF" >
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
  <div class="sidebar1">
    <ul class="nav">
    <li><a href="http://localhost/firstsite/profile_fac.php"><img src="home.jpg" height="50px" /></a></li>
      <li><a href="feed_show.php?cid1=<?php echo $row['cid1']; ?>&cid2=<?php echo $row['cid2']; ?>&week=1&fid=<?php echo $fid;?>">week1</a></li>
      <li><a href="feed_show.php?cid1=<?php echo $row['cid1']; ?>&cid2=<?php echo $row['cid2']; ?>&week=2&fid=<?php echo $fid;?>">week2</a></li>
      <li><a href="feed_show.php?cid1=<?php echo $row['cid1']; ?>&cid2=<?php echo $row['cid2']; ?>&week=3&fid=<?php echo $fid;?>">week3</a></li>
      <li><a href="feed_show.php?cid1=<?php echo $row['cid1']; ?>&cid2=<?php echo $row['cid2']; ?>&week=4&fid=<?php echo $fid;?>">week4</a></li>
      <li><a href="feed_show.php?cid1=<?php echo $row['cid1']; ?>&cid2=<?php echo $row['cid2']; ?>&week=5&fid=<?php echo $fid;?>">week5</a></li>
      <li><a href="feed_show.php?cid1=<?php echo $row['cid1']; ?>&cid2=<?php echo $row['cid2']; ?>&week=6&fid=<?php echo $fid;?>">week6</a></li>
      <li><a href="feed_show.php?cid1=<?php echo $row['cid1']; ?>&cid2=<?php echo $row['cid2']; ?>&week=7&fid=<?php echo $fid;?>">week7</a></li>
      <li><a href="feed_show.php?cid1=<?php echo $row['cid1']; ?>&cid2=<?php echo $row['cid2']; ?>&week=8&fid=<?php echo $fid;?>">week8</a></li>
      <li><a href="feed_show.php?cid1=<?php echo $row['cid1']; ?>&cid2=<?php echo $row['cid2']; ?>&week=9&fid=<?php echo $fid;?>">week9</a></li>
      <li><a href="feed_show.php?cid1=<?php echo $row['cid1']; ?>&cid2=<?php echo $row['cid2']; ?>&week=10&fid=<?php echo $fid;?>">week10</a></li>
      <li><a href="feed_show.php?cid1=<?php echo $row['cid1']; ?>&cid2=<?php echo $row['cid2']; ?>&week=11&fid=<?php echo $fid;?>">week11</a></li>
      <li><a href="feed_show.php?cid1=<?php echo $row['cid1']; ?>&cid2=<?php echo $row['cid2']; ?>&week=12&fid=<?php echo $fid;?>">week12</a></li>
      <li><a href="feed_show.php?cid1=<?php echo $row['cid1']; ?>&cid2=<?php echo $row['cid2']; ?>&week=13&fid=<?php echo $fid;?>">week13</a></li>
      <li><a href="feed_show.php?cid1=<?php echo $row['cid1']; ?>&cid2=<?php echo $row['cid2']; ?>&week=14&fid=<?php echo $fid;?>">week14</a></li>
      <li><a href="feed_show.php?cid1=<?php echo $row['cid1']; ?>&cid2=<?php echo $row['cid2']; ?>&week=15&fid=<?php echo $fid;?>">week15</a></li>
      <li><a href="feed_show.php?cid1=<?php echo $row['cid1']; ?>&cid2=<?php echo $row['cid2']; ?>&week=16&fid=<?php echo $fid;?>">week16</a></li>
      <li><a href="feed_show.php?cid1=<?php echo $row['cid1']; ?>&cid2=<?php echo $row['cid2']; ?>&week=17&fid=<?php echo $fid;?>">week17</a></li>
      <li><a href="feed_show.php?cid1=<?php echo $row['cid1']; ?>&cid2=<?php echo $row['cid2']; ?>&week=0&fid=<?php echo $fid;?>">End Sem</a></li>
      
    </ul>
    <!-- end .sidebar1 --></div>
  <div class="content" style="background-color:#FFF; padding-left:40px">
  <h3><font color="#CC0000">Current courses : </font></h3>
  
  <div align="center"> <h2> <?php  echo $cid1; ?> </h2>  </div>
  
  <?php
 /////////////////////////////////////					start of calculation of professor score
	$query="SELECT Q1,Q2,Q3,Q4 from feedback WHERE CID='".$cid1."' AND FID='".$fid."' ";
	$feed=mysqli_query($connection,$query);

	$i=0;
	
	while($row = mysqli_fetch_array($feed))
	{
		$feedval[$i]['Q1']=$row['Q1']; 
		$feedval[$i]['Q2']=$row['Q2']; 
		$feedval[$i]['Q3']=$row['Q3']; 
		$feedval[$i]['Q4']=$row['Q4']; 
		$arr[$i]=$feedval[$i]['Q1']+$feedval[$i]['Q2']+$feedval[$i]['Q3']+$feedval[$i]['Q4'];
		$i++;
	}
		if($i!=0)
		{
			 $count = count($arr); $count=$count*4;
         	 $sum = array_sum($arr);
             $avg = $sum / $count; 
			 rsort($arr);
             $middle = round(count($arr) / 2);
             $med = $arr[$middle-1]/4;
			 $v = array_count_values($arr);
             arsort($v);
             foreach($v as $k => $v)
			 {$mode = $k; break;}
			 $mode=$mode/4;  
	///////////////////////////////////////////////////				end of calculation of professor score
	
			echo '<font color="#663399" size="+1">cumulative week score(average)</font>';
			echo "<p></p>";
			echo '<div style="float:left;padding-right:70px;"><img src="coursegraph.php?cid='.$cid1.'&fid='.$fid.'" ></div>';
			echo '<font color="#3333FF" size="+2"> Related questions</font>';
			echo "<div style='height:120px;width:440px;border:1px solid #ccc;font:16px/26px Georgia, Garamond,Serif;overflow:auto; padding-left: 10px;'>
			Q1. The instructor was well versed with the topic.<br/>
			Q2. The instructor was able to deliver the topic very well. <br/>
			Q3.The instructor stimulated my interest in the topic.<br/>
			Q4.The instructor was well prepared for the topic. <br/>
  			</div>";
			echo "<br/>";
			echo "<br/>";
			echo "<br/>";
			$avg=number_format((float)$avg, 2, '.', '');
			echo "<p>Mean score :".$avg;
			echo "<p>Median score: ".$med;
			echo "<p>Mode score: ".$mode;
			
					
		}
		else
			echo "there is no feedback given by any student till now";
  ?>
  <hr />
  <p></p>
  <div align="center"> <h2> <?php 
  
  if($cid2)
   echo $cid2; ?> </h2></div>
  <span class="content" style="background-color:#FFF; padding-left:40px">
  <?php
  
  if($cid2)

{

 /////////////////////////////////////					start of calculation of professor score
	$query="SELECT Q1,Q2,Q3,Q4 from feedback WHERE CID='".$cid2."' AND FID='".$fid."' ";
	$feed=mysqli_query($connection,$query);

	$i=0;
	
	while($row1 = mysqli_fetch_array($feed))
	{
		$feedval[$i]['Q1']=$row1['Q1']; 
		$feedval[$i]['Q2']=$row1['Q2']; 
		$feedval[$i]['Q3']=$row1['Q3']; 
		$feedval[$i]['Q4']=$row1['Q4']; 
		$arr[$i]=$feedval[$i]['Q1']+$feedval[$i]['Q2']+$feedval[$i]['Q3']+$feedval[$i]['Q4'];
		$i++;
	}
	
		if($i!=0)
		{
			 $count = count($arr); $count=$count*4;
         	 $sum = array_sum($arr);
             $avg = $sum / $count; 
			 rsort($arr);
             $middle = round(count($arr) / 2);
             $med = $arr[$middle-1]/4;
			 $v = array_count_values($arr);
             arsort($v);
             foreach($v as $k => $v)
			 {$mode = $k; break;}
			 $mode=$mode/4;  
	///////////////////////////////////////////////////				end of calculation of professor score
	
			echo '<font color="#663399" size="+1">cumulative week score(average)</font>';
			echo "<p></p>";
			echo '<div style="float:left;padding-right:70px;"><img src="coursegraph.php?cid='.$cid2.'&fid='.$fid.'" ></div>';
			echo '<font color="#3333FF" size="+2"> Related questions</font>';
			echo "<div style='height:120px;width:440px;border:1px solid #ccc;font:16px/26px Georgia, Garamond,Serif;overflow:auto; padding-left: 10px;'>
			Q1. The instructor was well versed with the topic.<br/>
			Q2. The instructor was able to deliver the topic very well. <br/>
			Q3.The instructor stimulated my interest in the topic.<br/>
			Q4.The instructor was well prepared for the topic. <br/>
  			</div>";
			echo "<br/>";
			echo "<br/>";
			echo "<br/>";
			$avg=number_format((float)$avg, 2, '.', '');
			echo "<p>Mean score :".$avg;
			echo "<p>Median score: ".$med;
			echo "<p>Mode score: ".$mode;
			
					
		}
		else
			echo "there is no feedback given by any student till now";
  
}
  ?>
  </span><!-- end .content --></div>
  <div class="footer" style="height:75px">
    <div style="float:left">
    <p align="center">©Heisenberg</p>
  </div>
    <p align="center"><a href="contactus.php"><font color="#FFFFFF">Contact Us</font></a></p>
    <!-- end .footer --></div>
  <!-- end .container --></div>
</body>
</html>