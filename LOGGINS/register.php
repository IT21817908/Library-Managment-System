<?php
	
	session_start();

	include "../ConnectDataBase/connect.php";
	
	if(isset($_POST['submit'])){
		
		$Username = $_POST['Username'];
		$Email = $_POST['Email'];
		$Password = $_POST['Password'];

		$_SESSION['usersession'] = $Username;
		
		$sqli = "INSERT INTO registration (Username,Email,Password) VALUES ('$Username','$Email','$Password')";
		
		$result = mysqli_query($connect , $sqli );
		header("Location:loging.html");
		
	}




?>