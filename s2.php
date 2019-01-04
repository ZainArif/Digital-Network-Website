<?php
$conn = mysqli_connect("localhost", "root","","signup");
	
	if(!$conn){
		die("connection failed". mysqli_connect_error());
	}

?>