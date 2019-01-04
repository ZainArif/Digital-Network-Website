<?php
	 session_start();
	 include 's2.php';
 

	

		$uid = $_POST['uid'];
			$pwd = $_POST['pwd'];
			
				$sql = "SELECT * FROM users WHERE uid='$uid' AND pwd='$pwd'";

			$result = mysqli_query($conn,$sql);
			if(!$row = mysqli_fetch_assoc($result)){
				echo "username or password incorrect";
			}else{
				header("location:https://digital-network.000webhostapp.com/index1.html");
				}			



	

?>