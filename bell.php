<?php
include('phpgraphlib.php');
$connection = mysqli_connect("localhost", "root", "");
// Selecting Database
$db = mysqli_select_db($connection,"login");
$cid=$_GET['cid'];
$fid=$_GET['fid'];

$graph = new PHPGraphLib(870,300);

$query="SELECT Q1,Q2,Q3,Q4,Q5,Q6,Q7,Q8,Q9,Q10,Q11 from endsem WHERE CID='".$cid."' AND FID='".$fid."' ";
$feed=mysqli_query($connection,$query);
	$i=0;
	$x=0;
		for($x=0;$x<=55;$x++)
		{
			$bell[$x]=0;
		}
		while($row = mysqli_fetch_array($feed))
		{
			
			$feedval[$i]['Q1']=$row['Q1']; 
			$feedval[$i]['Q2']=$row['Q2']; 
			$feedval[$i]['Q3']=$row['Q3']; 
			$feedval[$i]['Q4']=$row['Q4']; 
			$feedval[$i]['Q5']=$row['Q5']; 
			$feedval[$i]['Q6']=$row['Q6']; 
			$feedval[$i]['Q7']=$row['Q7']; 
			$feedval[$i]['Q8']=$row['Q8']; 
			$feedval[$i]['Q9']=$row['Q9']; 
			$feedval[$i]['Q10']=$row['Q10']; 
			$feedval[$i]['Q11']=$row['Q11']; 
			
			$x=$feedval[$i]['Q1']+$feedval[$i]['Q2']+$feedval[$i]['Q3']+$feedval[$i]['Q4']+$feedval[$i]['Q5']+$feedval[$i]['Q6']+$feedval[$i]['Q7']+$feedval[$i]['Q8']+$feedval[$i]['Q9']+$feedval[$i]['Q10']+$feedval[$i]['Q11'];
			$bell[$x]++;
			$i++;
		}

$data = array("0" => $bell[0], "1" => $bell[1], "2" => $bell[2], "3" => $bell[3], "4" => $bell[4], "5" => $bell[5], "6" => $bell[6], "7" => $bell[7],"8" => $bell[8], "9" => $bell[9], "10" => $bell[10],"11" => $bell[11], "12" => $bell[12], "13" => $bell[13], "14" => $bell[14], "15" => $bell[15], "16" => $bell[16], "17" => $bell[17], "18" => $bell[18],"19" => $bell[19], "20" => $bell[20], "21" => $bell[21],"22" => $bell[22], "23" => $bell[23], "24" => $bell[24], "25" => $bell[25], "26" => $bell[26], "27" => $bell[27], "28" => $bell[28], "29" => $bell[29],"30" => $bell[30], "31" => $bell[31], "32" => $bell[32],"33" => $bell[33], "34" => $bell[34], "35" => $bell[35], "36" => $bell[36], "37" => $bell[37], "38" => $bell[38], "39" => $bell[39], "40" => $bell[40],"41" => $bell[41], "42" => $bell[42], "43" => $bell[43],"44" => $bell[44], "45" => $bell[45], "46" => $bell[46], "47" => $bell[47], "48" => $bell[48], "49" => $bell[49], "50" => $bell[50], "51" => $bell[51],"52" => $bell[52], "53" => $bell[53], "54" => $bell[54], "55" => $bell[55]);
$graph->addData($data);
$graph->setTitle("bell curve for end-semester and course ".$cid." x-axis : total marks(0 to 55)in 11 questions; y-axis: no. of students");
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
//$graph->setRange(0,5);
$graph->setXValuesHorizontal(true);
$graph->setBackgroundColor("silver");
$graph->createGraph();
?>