<?php
include('phpgraphlib.php');
$connection = mysqli_connect("localhost", "root", "");
// Selecting Database
$db = mysqli_select_db($connection,"login");
$cid=$_GET['cid'];
$fid=$_GET['fid'];

$graph = new PHPGraphLib(450,200);

$query="SELECT Q1,Q2,Q3,Q4 from feedback WHERE CID='".$cid."' AND FID='".$fid."'  ";
$feed=mysqli_query($connection,$query);

$i=0;
$s1=0;$s2=0;$s3=0;$s4=0;
while($row = mysqli_fetch_array($feed))
{
	$feedval[$i]['Q1']=$row['Q1']; $s1=$s1+$feedval[$i]['Q1'];
	$feedval[$i]['Q2']=$row['Q2']; $s2=$s2+$feedval[$i]['Q2'];
	$feedval[$i]['Q3']=$row['Q3']; $s3=$s3+$feedval[$i]['Q3'];
	$feedval[$i]['Q4']=$row['Q4']; $s4=$s4+$feedval[$i]['Q4'];
	$i++;
}
$avg1=$s1/$i;
$avg2=$s2/$i;
$avg3=$s3/$i;
$avg4=$s4/$i;
$avg1=number_format((float)$avg1, 2, '.', '');
$avg2=number_format((float)$avg2, 2, '.', '');
$avg3=number_format((float)$avg3, 2, '.', '');
$avg4=number_format((float)$avg4, 2, '.', '');

$data = array("Q1" => $avg1, "Q2" => $avg2, "Q3" => $avg3, "Q4" => $avg4);
$graph->addData($data);
$graph->setTitle("graph for course ".$cid."till current week");
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