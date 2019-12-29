<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "exam";
//by vishakha
$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
	echo "";
}


else
{
	echo "Connection failed";
	die("connection failed because".mysqli_connect_error);
}

?>
