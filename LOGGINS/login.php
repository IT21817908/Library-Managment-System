 <?php
	session_start();
	include "../ConnectDataBase/connect.php";
	
	if(isset($_POST['submit'])){
		
		$username = $_POST['Username'];
		$password = $_POST['Password'];
		
		$_SESSION['usersession'] = $username;

		if($username == "admin@gmail.com" && $password="admin1234"){

			header("location:../admin/admin.php");

		}else{
				
			$sql = "SELECT * FROM registration WHERE Email = '$username';";
			
			$result = mysqli_query($connect , $sql);
		
			
			if(mysqli_num_rows($result)>0){
			
				$row = mysqli_fetch_assoc($result);
				
				
				if($password == $row['Password']){
					header("Location:../category/Catagoy.php");
				}else{
					echo "invallied username or password";
				}
				
			}else{
				echo "invallied username or password";
			}	
		}
	}
 
 
 
 
 
 
 
 
 
 
 ?>