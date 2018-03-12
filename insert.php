<?php
/*----------MySQL Connection----------*/
$server = 'localhost';
$user = 'root';
$pass = 'goodyear123!@#';
$dbname = 'List';
$con = mysql_connect($server, $user, $pass) or die("Can't connect");
mysql_select_db($dbname);
/*------------------------------------*/

$nickname = $_POST['nickname'];
$location = $_POST['location'];
$picture = mt_rand(1,4);

$sql = "INSERT INTO  Locations ".
       "(Nick_Name,Locations,Picture_Name) ".
       "VALUES ( '$nickname', '$location', '$picture',)";

$result = mysql_query($sql, $con);

if($result != NULL) {
	echo "Error: $mysql_error()";
}

echo "Success! $sql $result";
?>
