<!DOCTYPE>
<html lang="en">
	<head>
	<meta charset="UTF-8" >
	
	<title>LOGIN</title>
	<link rel="stylesheet" href="style2.css">
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
			<img src="logo.jpg" width="125px">
			<div class="nav-links">
					<ul>
						<li><a href="../home/index.php">HOME</a></li>
						<li><a href="../category/Catagoy.php">CATEGORY</a></li>
						<li><a href="../ABOUT/about.php">ABOUT</a></li>
						<li><a href="../CONTACT/contact.php">CONTACT</a></li>
						<li><a href="../loging/loging.php">REGISTER</a></li>
						
						
					</ul>	
			</div>
			 <a href="../CART/cart.php"><img src="cart.png" width="30px" height="30px"></a>
			</nav>
		</div>
		
		
	
	<!--- ADMIN---->
	<div class="account-page">
		<div class="container">
			<div class="row">
				<div class="col-2"> 
					<img src="cat.png">
				</div>
				<div class="contact-col">
				
					<form action="bookadd.php" method="post" enctype="multipart/form-data">
						
						<label for="img">Book Name:</label>
						<input type="text" name="bookName" class="text" placeholder="EX: Motherland" >

						<label for="img">Upload Title Page:</label>
						<input name="uploadImage" type="file" placeholder="Upload Photos" >
						
						<label for="img">Author Name:</label>
						<input type="text" name="author" class="text" placeholder="EX: James Bolt" >
						
						<label for="img">Price:</label>
						<input type="text" name="price" class="text" placeholder="EX: $ 2.00" >

						<label for="img">Select Language:</label>
						<input type="text" name="language" class="text" placeholder="Ex: English/Sinhala/Tamil...." >
						
						<label for="img">Select Catagoy:</label>
						<input type="text" name="catagoy" class="text" placeholder="Ex: Action and Adventure/Classics/Fantasy....." >
						
						<label for="img">Discription:</label>
						<textarea rows="8" placeholder="Discription" name="discription" ></textarea>

						<label for="img">Upload Other Pages:</label>
						<input name="uploadPage" type="file" placeholder="Upload Photos" >
						
						<button type="submit" name="submit" class="hero-btn red-btn">Submit Book</button>
					</form>
				</div>
				
				
				</div>
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