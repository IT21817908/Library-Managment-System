<?php

	session_start();
    include "../ConnectDataBase/connect.php";
    if(!empty($_SESSION['usersession'])){
		$userMail = $_SESSION['usersession'];
		$sqli = "SELECT * from registration where Email ='{$userMail}' ;";
    	$result = mysqli_query($connect ,$sqli );
    	$record = mysqli_fetch_assoc($result);
	}
    
?>

<!DOCTYPE>
<html lang="en">
	<head>
	<meta charset="UTF-8" >
	<title>CATEGORY</title>
	<link rel="stylesheet" href="style1.css">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
	<script src="https://use.fontawesome.com/5b06c969b2.js"></script><!--font awsome cdn-->

	</head>

	<body>
	<div class="header">
		
		<div class="navbar">
			<nav>
			<img src="images/logo.jpg" width="125px">
			<div class="nav-links">
					<ul>
						<li><a href="../home/index.php">HOME</a></li>
						<li><a href="../category/Catagoy.php">CATEGORY</a></li>
						<li><a href="../ABOUT/about.php">ABOUT</a></li>
						<li><a href="../profileSettings/profile.php">CONTACT</a></li>
						<li><a href="../admin/admin.php"><?php 
							if(!empty($_SESSION['usersession'])){echo "";}else
							{echo "REGISTER";}
						?></a></li>
						
						
						<li><a href="../profilesettings/profile.php"><img src="<?php echo $record['profile_pic']; ?>"  onclick="openForm()" ></a></li>
							
					</ul>	
			</div>
			
			 <a href="../CART/cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
			</nav>
		</div>
		
		<div class="row">
			<div class= "col-2">
				<h1>CATEGORY</h1>
				<p>“The more that you read, the more things you will know.<br>The more that you learn, the more places you’ll go.”</p>
				<a href="../ENGLISH/english.php" class="btn">ENGLISH </a>
				<a href="../SINHALA/SINHALA.php" class="btn">SINHALA </a>
				<a href="../TAMIL/TAMIL.php" class="btn">TAMIL </a>
			</div>
			<div>
				<img src="images/cat.png">
			</div>
			</div>
			
	</div>
		
		
	
	<!--- book CATEGORY---->
	
		<div class="small-container">
			<h2 class="title">Top Rate Books</h2>
				<div class="small-container">
					<div class= "row">
						<div class="col-4">
							<img src="images/category/Thriller1.jfif">
							<h4>COLLEEN HOOVER</h4>
							<div class="rating">
								<i class="fa fa-star" aria-hidden="true"></i>
								<i class= "fa fa-star"></i>
								<i class= "fa fa-star"></i>
								<i class= "fa fa-star"></i>
								<i class= "fa fa-star-o"></i>
							</div>
							<p>FREE</p>
						</div>
						<div class="col-4">
							<img src="images/category/Thriller2.jpeg">
							<h4>BEAUTIFUL BEAST</h4>
							<div class="rating">
								<i class= "fa fa-star"></i>
								<i class= "fa fa-star"></i>
								<i class= "fa fa-star"></i>
								<i class= "fa fa-star"></i>
								<i class= "fa fa-star-o"></i>
							</div>
							<p>$2.35</p>
						</div>
						<div class="col-4">
							<img src="images/category/Thriller3.jpeg">
							<h4>YOU HAVE REACHED SAM</h4>
							<div class="rating">
								<i class= "fa fa-star"></i>
								<i class= "fa fa-star"></i>
								<i class= "fa fa-star"></i>
								<i class= "fa fa-star"></i>
								<i class= "fa fa-star-o"></i>
							</div>
							<p>$2.00</p>
						</div>
						<div class="col-4">
							<img src="images/category/Thriller4.jpeg">
							<h4>FAE KING</h4>
							<div class="rating">
								<i class= "fa fa-star"></i>
								<i class= "fa fa-star"></i>
								<i class= "fa fa-star"></i>
								<i class= "fa fa-star"></i>
								<i class= "fa fa-star-o"></i>
							</div>
							<p>$1.50</p>
						</div>
						
					
					</div>
				
				</div>
			
		</div>
		
		
		

			<!---- Footer ---->
		<hr>
		<footer>
			<div class="container10">
				<div class="sec aboutus">
					<h2>About Us</h2>
					<p>This website is a online library that anyone can purchase books and read them.</p>
				
				<ul class="sci">
					<li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
				</ul>
				</div>
				
				<div class="sec quicklinks">
					<h2>Quick Links</h2>
					
						<ul>
							<li><a href="#">Home</a></li>
							<li><a href="#">Category</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Helps Us</a></li>
							<li><a href="#">Policies</a></li>
							<li><a href="#">Contact</a></li>
						</ul>
					
				</div>
				<div class="sec contact">
					<h2>Contact Info</h2>
					<ul class="info">
						<li>
							<span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
							<span>No 245/c<br>Colombo Road<br>Kurunegala</span>
						<li>
						<li>
							<span><i class="fa fa-phone" aria-hidden="true"></i></span>
							<p><a href="tel:12345678900">+94 27 578 9060</a><br>
							<a href="tel:12345678900">+94 77 578 8055</a></p>
						<li>
						<li>
							<span><i class="fa fa-envelope" aria-hidden="true"></i></span>
							<p><a href="libromanagment@gmail.com">libromanagment@gmail.com</a></p>
						<li>
						
					</ul>
				</div>
			</div>
		</footer>
		<div class="copyrightText">
		<p>Group project. Kurunegala branch. @2022 SLIIT University</p>
		</div>
		
		
		
	</body>



</html>