<?php
include('fhome.php');
$Query="select cid1,cid2 from faculty where username='".$user_check."'";
$query1=mysqli_query($connection,"SELECT * FROM faculty WHERE username='".$user_check."'");
$result=mysqli_fetch_array($query1);
$Subject1=mysqli_query($connection,$Query);
$row = mysqli_fetch_array($Subject1);
$fid=$user_check;
$cid1=$row['cid1'];
$cid2=$row['cid2'];
$Query="select CID,Cname from courses where Roll='".$user_check."'";
$Subject=mysqli_query($connection,$Query);
$i=-1;

while($row1 = mysqli_fetch_array($Subject))
{
    $i++;

    $Scode[$i]['CID']=$row1['CID'];
    $Scode[$i]['Cname']=$row1['Cname'];

}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="feedshow.css">
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
 	 <div class="sidebar1" style="height:600px">
     
   
    <ul class="nav">
    <li> <a href="http://localhost/firstsite/profile_fac.php"><img src="home.jpg" height="50px"/></a> </li>
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
  <div class="content" style="padding-left:40px">
  <ul>
  <li><a href="#First_course"> <?php  echo $row['cid1']; ?> </a> </li>
  
    
    
	<li><a href="#Second_course"> <?php  echo $row['cid2']; ?> </a> </li>
 </ul>
 <h3 id="First_course"><font color="#00CC66">Report of  <?php  echo $row['cid1']; ?>. </font></h3>
  <?php 
  	$cid1=$_GET['cid1'];
	$cid2=$_GET['cid2'];
	$week=$_GET['week'];
	$fid=$_GET['fid'];
  
 if($cid1)
 {	
     
    if($week!=0) // it is not endsem;
	{
		/////////////////////////////////////					start of calculation of professor score

	$query="SELECT Q1,Q2,Q3,Q4 from feedback WHERE CID='".$cid1."' AND FID='".$fid."' AND Week='".$week."' ";
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
			
			echo '<font color="#CC0000">Week '."$week".'</font>';
			echo "<p></p>";
			echo '<div style="float:left;padding-right: 50px;"><img src="weekgraph.php?cid='.$cid1.'&week='.$week.'&fid='.$fid.'" ></div>';
			echo "<div style='height:120px;width:500px;border:1px solid #ccc;font:16px/26px Georgia, Garamond,Serif;overflow:auto; padding-left: 10px;'>
			Q1. The instructor was well versed with the topic.<br/>
			Q2. The instructor was able to deliver the topic very well. <br/>
			Q3.The instructor stimulated my interest in the topic.<br/>
			Q4.The instructor was well prepared for the topic. <br/>
  			</div>";
			$avg=number_format((float)$avg, 2, '.', '');
			echo "<p> Mean score: ".$avg." on a scale of 5";
			echo "<p> Median score: ".$med." on a scale of 5";
			echo "<p> Mode score: ".$mode." on a scale of 5";
			echo '<font color="#3366FF"><h4>Remarks: </h4></font>';
					
		}
		else
			echo "there is no feedback given by any student till now";
	}
	else    // it is endsem
	{
		$query="SELECT * from endsem WHERE CID='".$cid1."' AND FID='".$fid."' ";
		$feed=mysqli_query($connection,$query);
	
		$i=0;
		$s1=0;$s2=0;$s3=0;$s4=0;$s4=0;$s5=0;$s6=0;$s7=0;$s8=0;$s9=0;$s10=0;$s11=0;
		$w1=0;$w=0;
		for($x=0;$x<=55;$x++)
			$bell[$x]=0;
		while($row = mysqli_fetch_array($feed))
		{
			$w=$row['w'];
			$feedval[$i]['Q1']=$row['Q1']; $s1=$s1+$feedval[$i]['Q1']*$w;
			$feedval[$i]['Q2']=$row['Q2']; $s2=$s2+$feedval[$i]['Q2']*$w;
			$feedval[$i]['Q3']=$row['Q3']; $s3=$s3+$feedval[$i]['Q3']*$w;
			$feedval[$i]['Q4']=$row['Q4']; $s4=$s4+$feedval[$i]['Q4']*$w;
			$feedval[$i]['Q5']=$row['Q5']; $s5=$s5+$feedval[$i]['Q5']*$w;
			$feedval[$i]['Q6']=$row['Q6']; $s6=$s6+$feedval[$i]['Q6']*$w;
			$feedval[$i]['Q7']=$row['Q7']; $s7=$s7+$feedval[$i]['Q7']*$w;
			$feedval[$i]['Q8']=$row['Q8']; $s8=$s8+$feedval[$i]['Q8']*$w;
			$feedval[$i]['Q9']=$row['Q9']; $s9=$s9+$feedval[$i]['Q9']*$w;
			$feedval[$i]['Q10']=$row['Q10']; $s10=$s10+$feedval[$i]['Q10']*$w;
			$feedval[$i]['Q11']=$row['Q11']; $s11=$s11+$feedval[$i]['Q11']*$w;
			
			$i++;
			$w1=$w1+$w;
		}
			if($i!=0)
			{
				$avg1=$s1/$w1;
				$avg2=$s2/$w1;
				$avg3=$s3/$w1;
				$avg4=$s4/$w1;
				$avg5=$s5/$w1;
				$avg6=$s6/$w1;
				$avg7=$s7/$w1;
				$avg8=$s8/$w1;
				$avg9=$s9/$w1;
				$avg10=$s10/$w1;
				$avg11=$s11/$w1;
				$avg=($avg1+$avg2+$avg3+$avg4+$avg5+$avg6+$avg7+$avg8+$avg9+$avg10+$avg11)/11;
				
				///////////////////////////////////////////////////				end of calculation of professor score
				echo '<font color="#009999">End-semester Feedback</font>';
				echo "<p></p>";
				echo '<div style="float:left; padding-right:50px"><img src="endgraph.php?cid='.$cid1.'&fid='.$fid.'" ></div>';
				echo "<div style='height:300px;width:500px;border:1px solid #ccc;font:16px/26px Georgia, Garamond,Serif;overflow:auto; padding-left: 10px;'>
			Q1. Overall, the instruction was excellent<br/> 					
			Q2. The concepts were explained with clarity. 	<br/>				
			Q3. Questions and discussions were encouraged. 		<br/>			
			Q4. Allotted numbers of classes was held. 	<br/>	
			Q5. Evaluation was done regularly and feedback was given. <br/> 					
			Q6. Same instructor should continue for the next batch.<br/>
			Q7. The course was highly enjoyable <br/>
			Q8. The content of the course was appropriate. <br/> 					
			Q9. Text/Reference materials were appropriate for the course. <br/> 					
			Q10. Pre-requisites mentioned were appropriate. <br/>
			Q11. This course should be continued for future batches. <br/>  
			</div>";
			echo "<p></p>";
			echo "<br/>";
			echo '<div><img src="bell.php?cid='.$cid1.'&fid='.$fid.'" ></div>';
			$avg=number_format((float)$avg, 2, '.', '');
				echo "<p> Mean score for end-semester feedback is $avg on a scale of 5"."</p>"."<p></p>";
				echo '<font color="#CC3333"><h3>Remarks: </h3></font>';
						
			 }
   			 else
				echo "there is no feedback given by any student till now";
				
 	}
 }
   
  
   
   ?>
 
   <div style="height:180px;width:920px;border:1px solid #ccc;font:16px/26px Georgia, Garamond,Serif;overflow:auto;">
   			<?php
			if($week!=0)
			{
				$query="SELECT * from feedback WHERE CID='".$cid1."' AND FID='".$fid."' AND Week='".$week."' ";
				$feed= mysqli_query($connection,$query);
				$i=1;
				 while ($row = mysqli_fetch_array($feed))
				 {
				  echo $i."-".$row['Remarks']."<div></div>";
				  $i++;
				 }
			}
			else
			{
				$query="SELECT * from endsem WHERE CID='".$cid1."' AND FID='".$fid."' ";
				$feed= mysqli_query($connection,$query);
				$i=1;
				while ($row = mysqli_fetch_array($feed))
				{
				  echo $i."-".$row['Remarks']."<div></div>";
				  $i++;
				}
					
			}
			?>
   	</div>
   <form action="" method="post">
Comment number: <input type="int" name="name">
<input name="action" type="submit" value="Identity" />
</form>
   <?php
   if(isset($_POST['action']))
   {
   $cnum=$_POST["name"];
   if($cnum)
	{
	   if($week!=0)  // not endsem
	   {
		   $query="SELECT * from feedback WHERE CID='".$cid1."' AND FID='".$fid."' AND Week='".$week."' ";
		   $feed= mysqli_query($connection,$query);
		   $i=1;
		   while ($row = mysqli_fetch_array($feed))
		   {
			  if($i==$cnum)
				break;
			  $i++;
		   }
		    $roll=$row['Roll']; $fid1=$row['FID'];
			$msg="prof having username $fid1 has requested for identity of student having roll number $roll . course number is $cid1 for week number $week";
			mail("mayankgupta@iitg.ernet.in","Identity_Request",$msg);
			echo "your request has been send to admin";
	   }
	   else   // endsem
	   {
		   $query="SELECT * from feedback WHERE CID='".$cid1."' AND FID='".$fid."' ";
		   $feed= mysqli_query($connection,$query);
		   $i=1;
		   while ($row = mysqli_fetch_array($feed))
		   {
			  if($i==$cnum)
				break;
			  $i++;
		   }
		   	$roll=$row['Roll']; $fid1=$row['FID'];
			$msg="prof having username $fid1 has requested for identity of student having roll number $roll . course number is $cid1 for endsem";
			mail("mayankgupta@iitg.ernet.in","Identity_Request",$msg); 
			echo "your request has been send to admin";
	   }
   }
   }
   ?>
   <br/>
   <p></p>
   <hr/>
   
   <?php 
  	$cid1=$_GET['cid1'];
	$cid2=$_GET['cid2'];
	$week=$_GET['week'];
	$fid=$_GET['fid'];
  
 if($cid2)
 {	
 echo '<h3 id="Second_course"><font color="#00CC66">Report of  '."$cid2".' </font></h3>';
     
    if($week!=0) // it is not endsem;
	{
		/////////////////////////////////////					start of calculation of professor score

	$query="SELECT Q1,Q2,Q3,Q4 from feedback WHERE CID='".$cid2."' AND FID='".$fid."' AND Week='".$week."' ";
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
			
			echo '<font color="#CC0000">Week '."$week".'</font>';
			echo "<p></p>";
			echo '<div style="float:left;padding-right: 50px;"><img src="weekgraph.php?cid='.$cid2.'&week='.$week.'&fid='.$fid.'" ></div>';
			echo "<div style='height:120px;width:500px;border:1px solid #ccc;font:16px/26px Georgia, Garamond,Serif;overflow:auto; padding-left: 10px;'>
			Q1. The instructor was well versed with the topic.<br/>
			Q2. The instructor was able to deliver the topic very well. <br/>
			Q3.The instructor stimulated my interest in the topic.<br/>
			Q4.The instructor was well prepared for the topic. <br/>
  			</div>";
			$avg=number_format((float)$avg, 2, '.', '');
			echo "<p> Mean score: ".$avg." on a scale of 5";
			echo "<p> Median score: ".$med." on a scale of 5";
			echo "<p> Mode score: ".$mode." on a scale of 5";
			echo '<font color="#3366FF"><h4>Remarks: </h4></font>';
					
		}
		else
			echo "there is no feedback given by any student till now";
	}
	else    // it is endsem
	{
		$query="SELECT * from endsem WHERE CID='".$cid2."' AND FID='".$fid."' ";
		$feed=mysqli_query($connection,$query);
	
		$i=0;
		$s1=0;$s2=0;$s3=0;$s4=0;$s4=0;$s5=0;$s6=0;$s7=0;$s8=0;$s9=0;$s10=0;$s11=0;
		$w1=0;$w=0;
		for($x=0;$x<=55;$x++)
			$bell[$x]=0;
		while($row = mysqli_fetch_array($feed))
		{
			$w=$row['w'];
			$feedval[$i]['Q1']=$row['Q1']; $s1=$s1+$feedval[$i]['Q1']*$w;
			$feedval[$i]['Q2']=$row['Q2']; $s2=$s2+$feedval[$i]['Q2']*$w;
			$feedval[$i]['Q3']=$row['Q3']; $s3=$s3+$feedval[$i]['Q3']*$w;
			$feedval[$i]['Q4']=$row['Q4']; $s4=$s4+$feedval[$i]['Q4']*$w;
			$feedval[$i]['Q5']=$row['Q5']; $s5=$s5+$feedval[$i]['Q5']*$w;
			$feedval[$i]['Q6']=$row['Q6']; $s6=$s6+$feedval[$i]['Q6']*$w;
			$feedval[$i]['Q7']=$row['Q7']; $s7=$s7+$feedval[$i]['Q7']*$w;
			$feedval[$i]['Q8']=$row['Q8']; $s8=$s8+$feedval[$i]['Q8']*$w;
			$feedval[$i]['Q9']=$row['Q9']; $s9=$s9+$feedval[$i]['Q9']*$w;
			$feedval[$i]['Q10']=$row['Q10']; $s10=$s10+$feedval[$i]['Q10']*$w;
			$feedval[$i]['Q11']=$row['Q11']; $s11=$s11+$feedval[$i]['Q11']*$w;
			
			$i++;
			$w1=$w1+$w;
		}
			if($i!=0)
			{
				$avg1=$s1/$w1;
				$avg2=$s2/$w1;
				$avg3=$s3/$w1;
				$avg4=$s4/$w1;
				$avg5=$s5/$w1;
				$avg6=$s6/$w1;
				$avg7=$s7/$w1;
				$avg8=$s8/$w1;
				$avg9=$s9/$w1;
				$avg10=$s10/$w1;
				$avg11=$s11/$w1;
				$avg=($avg1+$avg2+$avg3+$avg4+$avg5+$avg6+$avg7+$avg8+$avg9+$avg10+$avg11)/11;
				
				///////////////////////////////////////////////////				end of calculation of professor score
				echo '<font color="#009999">End-semester Feedback</font>';
				echo "<p></p>";
				echo '<div style="float:left; padding-right:50px"><img src="endgraph.php?cid='.$cid2.'&fid='.$fid.'" ></div>';
				echo "<div style='height:300px;width:500px;border:1px solid #ccc;font:16px/26px Georgia, Garamond,Serif;overflow:auto; padding-left: 10px;'>
			Q1. Overall, the instruction was excellent<br/> 					
			Q2. The concepts were explained with clarity. 	<br/>				
			Q3. Questions and discussions were encouraged. 		<br/>			
			Q4. Allotted numbers of classes was held. 	<br/>	
			Q5. Evaluation was done regularly and feedback was given. <br/> 					
			Q6. Same instructor should continue for the next batch.<br/>
			Q7. The course was highly enjoyable <br/>
			Q8. The content of the course was appropriate. <br/> 					
			Q9. Text/Reference materials were appropriate for the course. <br/> 					
			Q10. Pre-requisites mentioned were appropriate. <br/>
			Q11. This course should be continued for future batches. <br/>  
			</div>";
			echo "<p></p>";
			echo "<br/>";
			echo '<div><img src="bell.php?cid='.$cid2.'&fid='.$fid.'" ></div>';
			$avg=number_format((float)$avg, 2, '.', '');
				echo "<p> Mean score for end-semester feedback is $avg on a scale of 5"."</p>"."<p></p>";
				echo '<font color="#CC3333"><h3>Remarks: </h3></font>';
						
			 }
   			 else
				echo "there is no feedback given by any student till now";
				
 	}
 }
   
  
   
   ?>
   <?php 
   if(!$cid2)
  	echo "***********No second course***********";
	?>
   <div style="height:180px;width:920px;border:1px solid #ccc;font:16px/26px Georgia, Garamond,Serif;overflow:auto;">
   
   
   
  
  <?php
  
			if($week!=0)
			{
				$query="SELECT * from feedback WHERE CID='".$cid2."' AND FID='".$fid."' AND Week='".$week."' ";	
				$feed= mysqli_query($connection,$query);
				$i=1;
				 while ($row = mysqli_fetch_array($feed))
				 {
				  echo $i."-".$row['Remarks']."<div></div>";
				  $i++;
				 }
			}
			else
			{
				$query="SELECT * from endsem WHERE CID='".$cid2."' AND FID='".$fid."' ";
				$feed= mysqli_query($connection,$query);
				$i=1;
				while ($row = mysqli_fetch_array($feed))
				{
				  echo $i."-".$row['Remarks']."<div></div>";
				  $i++;
				}
					
			}
  
			?>
   	</div>
<form action="" method="post"> 
Comment number:<input type="int" name="name1" />
<input name="action1" type="submit" value="Identity" />
</form>

   <?php
   if(isset($_POST['action1']))
   {
   $cnum=$_POST["name1"];
   if($cnum)
	{
	   if($week!=0)  // not endsem
	   {
		   $query="SELECT * from feedback WHERE CID='".$cid2."' AND FID='".$fid."' AND Week='".$week."' ";
		   $feed= mysqli_query($connection,$query);
		   $i=1;
		   while ($row = mysqli_fetch_array($feed))
		   {
			  if($i==$cnum)
				break;
			  $i++;
		   }
		    $roll=$row['Roll']; $fid1=$row['FID'];
			$msg="prof having username $fid1 has requested for identity of student having roll number $roll . course number is $cid2 for week number $week";
			mail("mayankgupta@iitg.ernet.in","Identity_Request",$msg);
			echo "your request has been send to admin";
	   }
	   else   // endsem
	   {
		   $query="SELECT * from feedback WHERE CID='".$cid2."' AND FID='".$fid."' ";
		   $feed= mysqli_query($connection,$query);
		   $i=1;
		   while ($row = mysqli_fetch_array($feed))
		   {
			  if($i==$cnum)
				break;
			  $i++;
		   }
		   	$roll=$row['Roll']; $fid1=$row['FID'];
			$msg="prof having username $fid1 has requested for identity of student having roll number $roll . course number is $cid1 for endsem";
			mail("mayankgupta@iitg.ernet.in","Identity_Request",$msg); 
			echo "your request has been send to admin";
	   }
   }
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