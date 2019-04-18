<?php
// DB연결용 세팅
$host 		= 'localhost';
<<<<<<< HEAD
$username 	= 'seasunrise22';
$password 	= 'mydbpw123';
$dbname 	= 'seasunrise22';
=======
$username 	= 'for github'; // 
$password 	= 'for github'; // 
$dbname 	= 'for github'; // 
>>>>>>> e689a7334815d6809036c8a1f420703251546c0f

$mysqli = new mysqli($host, $username, $password, $dbname);

/* check connection */
if (mysqli_connect_errno()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}
?>

