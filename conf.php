<?php
	include"conn.php";

	if (isset($_POST['submit'])) {
		$name=$_POST['name'];
		$email=$_POST['email'];
		$subject=$_POST['subject'];
		$message=$_POST['message'];

		$sql="insert into Etable(name,email,subject,message) values('$name','$email','$subject','$message')";

// insert into Etable(name,email,subject,message) values('Sanjay','sanjay@gmail.com','For Discount Product','Its great product but i need offer on this products');
		$result=mysqli_query($conn,$sql);
		
		if ($result) {
			echo "Successfully inserted data";	
			header('location:contact.php');
		}
		else
		{
			echo "inserted data failed";
		}
	}
?>