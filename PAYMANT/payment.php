<!DOCTYPE>
<html>
	<head>
	<meta name= "viewport" content= "with=device-width, initial-scale=1.0" >
	<title>HOME</title>
	<link rel="stylesheet" href="style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.0/css/fontawesome.min.css">
	
	<script src="https://use.fontawesome.com/5b06c969b2.js"></script><!--font awsome cdn-->

	</head>

	<body>
		
		<section class="header">
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
		
		
			<div class= "text-box">
				
				<div class="container11">

					<form action="">

						<div class="row">

							<div class="col">

								<h3 class="title">billing address</h3>

								<div class="inputBox">
									<span>full name :</span>
									<input type="text" placeholder="M.Y.W Siriwardhana">
								</div>
								<div class="inputBox">
									<span>email :</span>
									<input type="email" placeholder="libro@example.com">
								</div>
								<div class="inputBox">
									<span>address :</span>
									<input type="text" placeholder="NO 245/Kurunegala">
								</div>
								<div class="inputBox">
									<span>city :</span>
									<input type="text" placeholder="Kurunegala">
								</div>

								<div class="flex">
									<div class="inputBox">
										<span>state :</span>
										<input type="text" placeholder="Sri Lanka">
									</div>
									<div class="inputBox">
										<span>zip code :</span>
										<input type="text" placeholder="BC-123 456">
									</div>
								</div>

							</div>

							<div class="col">

								<h3 class="title">payment</h3>

								<div class="inputBox">
									<span>cards accepted :</span>
									<img src="images/card_img.png" alt="">
								</div>
								<div class="inputBox">
									<span>name on card :</span>
									<input type="text" placeholder="Mr.Siriwardhana"">
								</div>
								<div class="inputBox">
									<span>credit card number :</span>
									<input type="number" placeholder="1111-2222-3333-4444">
								</div>
								<div class="inputBox">
									<span>exp month :</span>
									<input type="text" placeholder="january">
								</div>

								<div class="flex">
									<div class="inputBox">
										<span>exp year :</span>
										<input type="number" placeholder="2022">
									</div>
									<div class="inputBox">
										<span>CVV :</span>
										<input type="text" placeholder="1234">
									</div>
								</div>

							</div>
					
						</div>
						<center><a href="../ITEM/ITEM.php" class="hero-btn">PAY NOW</a></center>

					</form>

				</div> 
				
				
				
				
			</div>
		</section>
		

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