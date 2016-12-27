 
   <?php
   
   include('db.php');
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



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
</body>
</html>