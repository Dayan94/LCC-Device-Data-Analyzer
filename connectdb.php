<?php  
	//                     server/host    dbusername         password              db_name
$conn = mysqli_connect("localhost", "root", "", "lcc_device_data");

// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>