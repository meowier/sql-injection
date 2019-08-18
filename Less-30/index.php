<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Less-30</title>
<link rel="stylesheet" href="../index.html_files/freemind2html.css" type="text/css"/>
</head>

<body>
<div style="text-align:center">Welcome&nbsp;&nbsp;<font color="#FF0000">Champ</font><br>
<font class="style3">


<?php
//including the Mysql connect parameters.
include("../sql-connections/sql-connect.php");

//disable error reporting
error_reporting(0);

// take the variables 
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	//logging the connection parameters to a file for analysis.
	$fp=fopen('result.txt','a');
	fwrite($fp,'ID:'.$id."\n");
	fclose($fp);

	$qs = $_SERVER['QUERY_STRING'];
	$hint=$qs;
	$id = '"' .$id. '"';

// connectivity 
	$sql="SELECT * FROM users WHERE id=$id LIMIT 0,1";
	$result=mysql_query($sql);
	$row = mysql_fetch_array($result);
	if($row)
	{
	  	echo "<font class='style3'>";	
	  	echo 'Your Login name:'. $row['username'];
	  	echo "<br>";
	  	echo 'Your Password:' .$row['password'];
	  	echo "</font>";
  	}
	else 
	{
		echo "<font class='style3'>";
		//print_r(mysql_error());
		echo "</font>";  
	}
}
	else { echo "Please input the ID as parameter with numeric value";}



?>
</font> </div></br></br></br><center>
<img src="../images/Less-30.jpg" />
</br>
</br>
</br>
<img src="../images/Less-30-1.jpg" />
</br>
</br>
<font class="style3">
<?php
echo "Hint: The Query String you input is: ".$hint;
?>
</font> 
</center>
<div class="botton_fix">For more please visit : <a href="http://www.hiteshchoudhary.com" target="_blank">www.hiteshchoudhary.com</a></div>
</body>
</html>