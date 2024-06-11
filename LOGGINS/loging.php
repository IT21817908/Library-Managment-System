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
		
		
	
	<!--- LOGIN---->
	<div class="account-page">
		<div class="container">
			<div class="row">
				<div class="col-2"> 
					<img src="cat.png">
				</div>
				
				<div class="col-2">
					<div class="form-container">
						<div class="form-btn">
						<span onclick="login()">Login</span>
						<span onclick="register()">Register</span>
						<hr id="indicator">
						</div>
					
					<form id="loginform" action="login.php" method="post">
						<input type="text" placeholder="Username" name="Username">
						<input type="password" placeholder="Password" name="Password">
						<input type="submit" class="btn" name="submit" value="login">
						<a href="">Forgot password</a>
					</form >
					<form id="regform" action="register.php" method="post">
						<input type="text" placeholder="Username" name="Username">
						<input type="email" placeholder="Email" name="Email">
						<input type="password" placeholder="Password" name="Password">
						<input type="submit" class="btn" name="submit" value="REGISTER">
						
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
		
		
<!----------js for login form--------->
		<script>
		var loginform = document.getElementById("loginform");
		var regform = document.getElementById("regform");
		var indicator = document.getElementById("indicator")
			
			function register(){
				regform.style.transform = "translateX(0px)";
				loginform.style.transform = "translateX(0px)"
				indicator.style.transform = "translateX(100px)"
			}
			function login(){
				regform.style.transform = "translateX(300px)";
				loginform.style.transform = "translateX(300px)"
				indicator.style.transform = "translateX(0px)"
			}
			
			
			
		</script>
		
		
		
		
	</body>



</html>