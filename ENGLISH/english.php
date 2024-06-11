<!DOCTYPE>
<html lang="en">
	<head>
	<meta charset="UTF-8" >
	<title>ENGLISH</title>
	<link rel="stylesheet" href="style1.css">
	
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
	
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
						<li><a href="../CONTACT/contact.php">CONTACT</a></li>
						<li><a href="../loging/loging.php">REGISTER</a></li>
					</ul>	
			</div>
			
			 <a href="../CART/cart.php"><img src="images/cart.png" width="30px" height="30px"></a>
			</nav>
		</div>
		<div class="row">
			<div class= "col-2">
			<center>
				<h1>BOOKS COLLECTION</h1>
				<p>“The more that you read, the more things you will know.<br>The more that you learn, the more places you’ll go.”</p>
				
				</center>
			</div>
			<div>
				<img src="images/category/english.png" width="400px">
			</div>
			</div>
			
	</div>
		
		
	
	<!--- book CATEGORY---->

	
	
		<div class="small-container">
			<h2 class="title">ENGLISH BOOKS</h2>
			<div class="small-container">
			<div class= "row">
			<?php 
			
				include "../ConnectDataBase/connect.php"; 

				$sql = "SELECT * FROM book";
				$result = mysqli_query($connect, $sql);

				$count = mysqli_num_rows($result);

				if($count > 0)
				{
					while($row=mysqli_fetch_assoc($result))
					{
						$name = $row['name'];
						$image_name = $row['image_name'];
						$author = $row['author'];
						$price = $row['price'];
						$language = $row['language'];
						$category = $row['category'];
						$description = $row['description'];
						
						?>
						
						<div class="col-4">
							<img style="width:100px;" src="../admin/images/bookcover/<?php echo $image_name; ?>">
							<h4><?php echo "Title : ".$name; ?></h4>
							<h4><?php echo "Author : ".$author; ?></h4>
							<h4><?php echo "Language : ".$language; ?></h4>
							<h4><strong><?php echo "Rs. ".$price; ?></strong></h4>
							<div class="rating">
								<i class= "fa fa-star"></i>
								<i class= "fa fa-star"></i>
								<i class= "fa fa-star"></i>
								<i class= "fa fa-star"></i>
								<i class= "fa fa-star-o"></i>
							</div>

							<p><?php echo $description; ?></p>
							<br>
							<center><button style="background: #f44336; cursor: pointer; border: 1px solid #f44336; display: inline-block;">ADD TO CART</button><center>
						</div>
						
					

						<?php


					}
				}

			
			?>
				</div>
					<div class="page-bin">
						<span>1</span>
						<span>2</span>
						<span>3</span>
						<span>4</span>
						<span>&#8594;</span>
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
