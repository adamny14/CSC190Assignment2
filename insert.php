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


?>