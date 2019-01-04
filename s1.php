<?php
	session_start();
	 
	 include 's2.php';

	// $db = mysqli_connect('localhost','usama','pokerface','registration'); 

	

		$name =$_POST['name'];
		$uid = $_POST['uid'];
		$pwd = $_POST['pwd'];
			
		$sql = "INSERT INTO users (name,uid,pwd) VALUES ('$name','$uid','$pwd')";

			$result = mysqli_query($conn,$sql);

		

		header("Location:https://digital-network.000webhostapp.com/l.php");
		



?>