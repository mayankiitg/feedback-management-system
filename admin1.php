<?php
ob_start();
session_start();
$message['roll'] = $message['email'] = $message['year'] = $message['pass'] = $message['dept'] = $message['prog']= $message['name']=$message['cid1'] = $message['facemail'] = $message['cid2'] = $message['facpass'] = $message['facdept'] = $message['sdate']= $message['facname']=$email="";
if(empty($_SESSION['email']))
{
	header('Location: adminlogin.php');
}
$connection = mysqli_connect("localhost", "root", "");
// Selecting Database
$db = mysqli_select_db($connection,"login");

function test_data($data)
{
	$data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="temp1.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
  <p style="text-align:right"><a href="adminlogin.php"><font color="#FFFFFF">Logout</font></a></p>
  </div>
  
    
    <!-- end .header --></div>
  
  <div class="content">
  <table>
<tr>
<td>
<h3>Add a course</h3>
</td>
<td>
<h3>Add a Student</h3>
</td>
<td>
<h3>Add a Faculty</h3>
</td>
</tr>
<tr>
<td>
<h4>Choose a CSV file to upload</h4>
   
   
   <?php
if (isset($_POST['submit'])) {
	
	
	$allowed = "csv";
$filename = $_FILES['filename']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if($ext!=$allowed) {
    echo 'error';
	$uploadcheck=0;
	echo 'File not of csv format';	
}
	
	
	else{
	
    if (is_uploaded_file($_FILES['filename']['tmp_name'])) {
        echo "<h1>" . "File ". $_FILES['filename']['name'] ." uploaded successfully." . "</h1>";
       // echo "<h2>Displaying contents:</h2>";
     //   readfile($_FILES['filename']['tmp_name']);
	}
    $handle = fopen($_FILES['filename']['tmp_name'], "r");
	

    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
        $import="INSERT into courses(Roll,Name,Username,CID,Cname) values('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."','".$data[4]."')";
        mysqli_query($connection,$import) or die(mysqli_error());
    }
	$uploadcheck=1;
	echo 'import done';
	}
	$handle = fopen($_FILES['filename']['tmp_name'], "r");
    fclose($handle);
    
	
}else {
    print "Upload new csv by browsing to file and clicking on Upload<br />\n";
    print "<form enctype='multipart/form-data' action='admin2.php' method='post'>";
    print "File name to import:<br />\n";
    print "<input size='50' type='file' name='filename'><br />\n";
    print "<input type='submit' name='submit' value='Upload'></form>";

}


?>
</td>
<td>
<form action="" method="post">
    <p><input id="name" name="name" type="text" placeholder="Name"><span class="error">* <?php echo $message['name'];?></p>
    <p><input id="roll" name="roll" type="number" placeholder="Roll Number"><span class="error">* <?php echo $message['roll'];?></p>
    <p>Department:
    	<select name="dept">
        <option value="cse">CSE</option>
        <option value="mnc">MnC</option>
        <option value="ep">EP</option>
        <option value="me">ME</option>
        <option value="cl">CL</option>
        <option value="ce">CE</option>
        <option value="bt">BT</option>
        <option value="eee">EEE</option>
        <option value="ece">ECE</option>
        <option value="design">DESIGN</option>
        </select>
    <span class="error">* <?php echo $message['dept'];?>
    </p>
    <p>Programme:
    <select name="program">
        <option value="btech">B.Tech</option>
        <option value="mtech">M.Tech</option>
        <option value="phd">PhD</option>
    </select>
    <span class="error">* <?php echo $message['prog'];?>
    </p>
    <p><input id="year" name="year" type="number" placeholder="Year of Enrollment"><span class="error">* <?php echo $message['year'];?></p>
    <p><input id="email" name="email" type="text" placeholder="Email">@iitg.ernet.in<span class="error">* <?php echo $message['email'];?></p>
    <p><input id="password" name="password" type="password" placeholder="Password"><span class="error">* <?php echo $message['pass'];?></p>
    
    <p><input name="studaction" type="submit" value="Add" /></p>
  </form>
<?php
	if(isset($_POST['studaction']))
	{
		if($_POST['studaction']=="Add")
    {
		if(empty(mysqli_real_escape_string($connection,$_POST['name'])))
		{
			$message['name']="Empty name";
			$flag=0;
		}
		else
		{
        	$name       = test_data(mysqli_real_escape_string($connection,$_POST['name']));
			$flag=1;
			//echo $name;
		}
		if(empty(mysqli_real_escape_string($connection,$_POST['email'])))
		{
			$message['email']="Empty email";
			$flag1=0;
		}
		else
		{
        	$email       = test_data(mysqli_real_escape_string($connection,$_POST['email']));
			$flag1=1;
		}
        //$email      = test_data(mysqli_real_escape_string($connection,$_POST['email']));
		if(empty(mysqli_real_escape_string($connection,$_POST['password'])))
		{
			$message['pass']="Empty password";
			$flag2=0;
		}
		else
		{
        	$password       = test_data(mysqli_real_escape_string($connection,$_POST['password']));
			$flag2=1;
			//echo $password;
		}
        //$password   = mysqli_real_escape_string($connection,$_POST['password']);
		if(empty(mysqli_real_escape_string($connection,$_POST['roll'])))
		{
			$message['roll']="Empty roll";
			$flag3=0;
		}
		else
		{
        	$roll       = test_data(mysqli_real_escape_string($connection,$_POST['roll']));
			$flag3=1;
		}
		if(empty(mysqli_real_escape_string($connection,$_POST['year'])))
		{
			$message['year']="Empty year";
			$flag4=0;
		}
		else
		{
        	$year       = test_data(mysqli_real_escape_string($connection,$_POST['year']));
			$flag4=1;
		}
		if(empty(mysqli_real_escape_string($connection,$_POST['dept'])))
		{
			$message['dept']="Empty dept";
			$flag5=0;
		}
		else
		{
        	$dept       = test_data(mysqli_real_escape_string($connection,$_POST['dept']));
			$flag5=1;
		}
		if(empty(mysqli_real_escape_string($connection,$_POST['program'])))
		{
			$message['prog']="Empty programme";
			$flag6=0;
		}
		else
		{
        	$program       = test_data(mysqli_real_escape_string($connection,$_POST['program']));
			$flag6=1;
		}
		
	    $query = "SELECT Username FROM student where Username='".$email."'";
        $result = mysqli_query($connection,$query);
        $numResults = mysqli_num_rows($result);
        //if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
        //{
          //  $message =  "Invalid email address please type a valid email!!";
        //}
        if($numResults>=1)
        {
            $message['email'] = $email." Email already exist!!";
        }
		else if($flag==0||$flag1==0||$flag2==0||$flag3==0||$flag4==0||$flag5==0||$flag6==0)
		{
			$error="Error";
			//header('Location: login.php#name');

		}
        else
        {
			$query2="INSERT INTO student(Roll,Name,Department,Program,Year,Username,Password) VALUES ('".$roll."','".$name."','".$dept."','".$program."','".$year."','".$email."','".$password."')";
            mysqli_query($connection,$query2);
			
            $success = "Signup Sucessfully!!";
			echo $success;
			//header('Location: studentpersonaldetail.php');
        }
    }
		
		
		
		
		}



?>


</td>
<td>
<form action="" method="post">
   <p><input id="name" name="facname" type="text" placeholder="Name"></p>
    
    <br />
   
   
   <p><input type="text" name="imfile" id="file" placeholder="Image file Name" /></p>
    
    
    
    </p>
    <p>Department:
    	<select name="facdept">
        <option value="cse">CSE</option>
        <option value="mnc">MnC</option>
        <option value="ep">EP</option>
        <option value="me">ME</option>
        <option value="cl">CL</option>
        <option value="ce">CE</option>
        <option value="bt">BT</option>
        <option value="eee">EEE</option>
        <option value="ece">ECE</option>
        <option value="design">DESIGN</option>
        </select>
    
    </p>
   
   
    <p><input id="facemail" name="facemail" type="text" placeholder="Email">@iitg.ernet.in</p>
    <p><input id="password" name="facpassword" type="password" placeholder="Password"></p>
    <p>
    <input id="cid1" name="cid1" type="text" placeholder="Course 1" />
    </p>
    <p>
    <input id="cid2" name="cid2" type="text" placeholder="Course 2" />
    </p>
    <p>
    Start Date: <input id="sdate" name="sdate" type="date" placeholder="Start Date" value="2014-08-01" />  
    </p>
     <p>
    End Date: <input id="edate" name="edate" type="date" placeholder="End Date" value="2014-11-30" />  
    </p>
    
    <p><input name="facadd" type="submit" value="Add" /></p>
   
   
   
   
   </form>
   <?php
   if(isset($_POST['facadd']))
	{
		if($_POST['facadd']=="Add")
    {
	 
	


		if(empty(mysqli_real_escape_string($connection,$_POST['facname'])))
		{
			$message['facname']="Empty name";
			$flag=0;
		}
		else
		{
        	$name       = test_data(mysqli_real_escape_string($connection,$_POST['facname']));
			$flag=1;
			//echo $name;
		}
		if(empty(mysqli_real_escape_string($connection,$_POST['facemail'])))
		{
			$message['facemail']="Empty email";
			$flag1=0;
		}
		else
		{
        	$email       = test_data(mysqli_real_escape_string($connection,$_POST['facemail']));
			$flag1=1;
		}
        //$email      = test_data(mysqli_real_escape_string($connection,$_POST['email']));
		if(empty(mysqli_real_escape_string($connection,$_POST['facpassword'])))
		{
			$message['facpass']="Empty password";
			$flag2=0;
		}
		else
		{
        	$password       = test_data(mysqli_real_escape_string($connection,$_POST['facpassword']));
			$flag2=1;
			//echo $password;
		}
        //$password   = mysqli_real_escape_string($connection,$_POST['password']);
		if(empty(mysqli_real_escape_string($connection,$_POST['cid1'])))
		{
			$message['cid1']="Empty CID1";
			$flag3=0;
		}
		else
		{
        	$cid1       = test_data(mysqli_real_escape_string($connection,$_POST['cid1']));
			$flag3=1;
		}
		if(empty(mysqli_real_escape_string($connection,$_POST['cid2'])))
		{
			//$message['cid2']="Empty CID2";
			$cid2="";
			$flag4=1;
		}
		else
		{
        	$cid2       = test_data(mysqli_real_escape_string($connection,$_POST['cid2']));
			$flag4=1;
		}
		if(empty(mysqli_real_escape_string($connection,$_POST['sdate'])))
		{
			$message['sdate']="Empty Sdate";
			$flag5=0;
		}
		else
		{
        	$sdate       = mysqli_real_escape_string($connection,$_POST['sdate']);
			$flag5=1;
		}
		if(empty(mysqli_real_escape_string($connection,$_POST['edate'])))
		{
			$message['edate']="Empty Edate";
			$flag6=0;
		}
		else
		{
        	$edate       = mysqli_real_escape_string($connection,$_POST['edate']);
			$flag6=1;
		}
		if(empty(mysqli_real_escape_string($connection,$_POST['facdept'])))
		{
			$message['facdept']="Empty Dept";
			$flag7=0;
		}
		else
		{
        	$dept       = mysqli_real_escape_string($connection,$_POST['facdept']);
			$flag7=1;
		}
		if(empty(mysqli_real_escape_string($connection,$_POST['imfile'])))
		{
			$message['imfile']="Empty Imfile";
			$flag8=0;
		}
		else
		{
        	$query_image      = mysqli_real_escape_string($connection,$_POST['imfile']);
			$flag8=1;
		}
		
	    $query = "SELECT username FROM faculty where username='".$email."'";
        $result = mysqli_query($connection,$query);
        $numResults = mysqli_num_rows($result);
        //if (!filter_var($email, FILTER_VALIDATE_EMAIL)) // Validate email address
        //{
          //  $message =  "Invalid email address please type a valid email!!";
        //}
        if($numResults>=1)
        {
            $message['facemail'] = $email." Email already exist!!";
        }
		else if($flag==0||$flag1==0||$flag2==0||$flag3==0||$flag4==0||$flag5==0||$flag6==0||$flag7=0||$flag8=0)
		{
			$error="Error";
			//header('Location: login.php#name');

		}
        else
        {
			$query2="INSERT INTO faculty(username,password,Name,Department,image,cid1,cid2,sdate,edate) VALUES ('".$email."','".$password."','".$name."','".$dept."','".$query_image."','".$cid1."','".$cid2."','".$sdate."','".$edate."')";
            mysqli_query($connection,$query2);
			
            $success = "Signup Sucessfully!!";
			echo $success;
			//header('Location: studentpersonaldetail.php');
        }
    }
	}
?>
</td>
<td>

</tr>
</table>
  
   
   
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