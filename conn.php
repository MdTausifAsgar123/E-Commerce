<?php
	$host="localhost";
	$username="root";
	$password="";
	$dbname="ecom";

	$conn=mysqli_connect($host,$username,$password,$dbname);
	if ($conn) {
		// echo "Connection successfull";
	}
	else
	{
		echo "Connection Failed";
	}

?>