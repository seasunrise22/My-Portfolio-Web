<?php
// DB연결용 세팅
$host 		= 'localhost';
$username 	= 'seasunrise22';
$password 	= 'mydbpw123';
$dbname 	= 'seasunrise22';

$mysqli = new mysqli($host, $username, $password, $dbname);

/* check connection */
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}
?>

