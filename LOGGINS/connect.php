<?php
	$Username = $_POST['Username'];
	$Email = $_POST['Email'];
	$Password = $_POST['Password'];


	//database connection//
	
	$conn = new mysqli('localhost','root','','test1');
	if($conn->connect_error){
		die('connection failed : ' .$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into registation(Username,Email,Password)
		values(?, ?, ?)");
		$stmt->bind_param("sss",$Username,$Email,$Password);
		$stmt->execute();
		echo "registation succesfully...";
		$stmt->close();
		$conn->close();
	}
?>