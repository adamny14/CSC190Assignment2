<?php
/*----------MySQL Connection----------*/
$server = 'localhost';
$user = 'root';
$pass = 'goodyear123!@#';
$dbname = 'List';
$con = mysql_connect($server, $user, $pass) or die("Can't connect");
mysql_select_db($dbname);
/*------------------------------------*/

$nickname = mysql_real_escape_string($_POST['nickname']);
$location = mysql_real_escape_string($_POST['location']);
$picture = mt_rand(1,4);

$sql = "INSERT INTO  LOCATIONS ".
       "(Nick_Name,Locations,Picture_Name) ".
       "VALUES ( '$nickname', '$location', '$picture')";

$result = mysql_query($sql, $con);

if($result == NULL) {
	echo "Query: '$sql', Error: " . mysql_error();
}else{
	echo "Success! Query: '$sql', Results: '$result'";
}
mysql_close($con);
?>
