<?php
include('phpgraphlib.php');
$connection = mysqli_connect("localhost", "root", "");
// Selecting Database
$db = mysqli_select_db($connection,"login");
$cid=$_GET['cid'];
$fid=$_GET['fid'];

$graph = new PHPGraphLib(450,200);

$query="SELECT Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11,w from endsem WHERE CID='".$cid."' AND FID='".$fid."' ";
$feed=mysqli_query($connection,$query);
	$i=0;
		$s1=0;$s2=0;$s3=0;$s4=0;$s4=0;$s5=0;$s6=0;$s7=0;$s8=0;$s9=0;$s10=0;$s11=0;
		$w1=0;$w=0;
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
			
			
			$avg1=number_format((float)$avg1, 2, '.', '');
$avg2=number_format((float)$avg2, 2, '.', '');
$avg3=number_format((float)$avg3, 2, '.', '');
$avg4=number_format((float)$avg4, 2, '.', '');


$avg5=number_format((float)$avg5, 2, '.', '');
$avg6=number_format((float)$avg6, 2, '.', '');
$avg7=number_format((float)$avg7, 2, '.', '');
$avg8=number_format((float)$avg8, 2, '.', '');


$avg9=number_format((float)$avg9, 2, '.', '');
$avg10=number_format((float)$avg10, 2, '.', '');
$avg11=number_format((float)$avg11, 2, '.', '');
			
			
		}

$data = array("Q1" => $avg1, "Q2" => $avg2, "Q3" => $avg3, "Q4" => $avg4, "Q5" => $avg5, "Q6" => $avg6, "Q7" => $avg7, "Q8" => $avg8,"Q9" => $avg9, "Q10" => $avg10, "Q11" => $avg11);
$graph->addData($data);
$graph->setTitle("graph for week endsem and course ".$cid);
$graph->setTitleColor('black');
$graph->setupYAxis("",'purple');
$graph->setupXAxis("",'purple');
$graph->setLineColor("navy");
$graph->setBars(false);
$graph->setLine(true);
$graph->setDataPoints(true);
$graph->setDataPointColor('maroon');
$graph->setDataValues(true);
$graph->setDataValueColor('maroon');
$graph->setGoalLine(.0025);
$graph->setGoalLineColor('red');
$graph->setRange(0,5);
$graph->setXValuesHorizontal(true);
$graph->setBackgroundColor("silver");
$graph->createGraph();
?>