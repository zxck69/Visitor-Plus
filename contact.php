<?php
session_start();


if(!isset($_SESSION["username"]))
{
	header('location:http://localhost/Visitor+/login.php');
}
?>

<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link href="style.css" rel="stylesheet" type="text/css">
<!-- FONTAWESOME : https://kit.fontawesome.com/a23e6feb03.js -->
<link rel="stylesheet"
	href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.  5/jquery.mCustomScrollbar.min.css">
<!-- Bootstrap CSS -->
<link rel="stylesheet"
	href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
	integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
	crossorigin="anonymous">
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
	crossorigin="anonymous">

<script src="icons.js"></script>

<title>Contact Us</title>
<style>

h1 {
  text-align: center;
  margin: 35px 0 20px 0 !important;
}

</style>
</head>

<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
		<button id="sidebarCollapse" class="btn navbar-btn">
			<i class="fas fa-lg fa-bars"></i>
		</button>
		<a class="navbar-brand" href="">
			<h2 id="logo">Visitor+</h2>
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse"
			data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false"
			aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" id="link" href="http://localhost/Visitor+/login.php">
          <i class="fas fa-sign-out-alt"></i>
          LogOut<span class="sr-only">(current) </span></a>
        </li>
      </ul>
    </div>
	</nav>

	<div class="wrapper left">
    <nav id="sidebar">
      <div class="sidebar-header">
        <h3><i class="fas fa-user"></i>User</h3>
      </div>

      <ul class="list-unstyled components">
        <li>
          <a href="index.php"><i class="fas fa-home"></i>Home</a>
        </li>
        <li>
          <a href="in.php"><i class="fas fa-id-badge"></i>Check In</a>
        </li>
        <li>
          <a href="out.php"><i class="fas fa-id-badge"></i>Check Out</a>
        </li>
        <li>
          <a href="contact.php"><i class="fas fa-id-card"></i>Contact Us</a>
        </li>
      
        </ul>
    </nav>

		<div id="content">
			<div class="container my-5 col d-flex justify-content-center">
				<div class="card" style="width: 60rem;">
					<div class="card-body">
						<h2 style="text-align: center">
							<strong>CONTACT US</strong>
						</h2>
						<hr>


						<form action="https://formsubmit.co/VISITORPLUS2023@GMAIL.COM"
							method="POST">
							<h6>GENERAL INQURIES</h6>
							&nbsp;
							<h6 style="color: blue;">VISITORPLUS2023@GMAIL.COM</h6>

							&nbsp;&nbsp; &nbsp;<br>
							<div class="container">
							
									<div class="form-group">
										<div class="form-row">
											<div class="col">
												<input type="text" name="name" class="form-control"
													placeholder="Full Name" required>
											</div>
											<div class="col">
												<input type="email" name="email" class="form-control"
													placeholder="Email Address" required>
											</div>
										</div>
									</div>
									<div class="form-group">
										<textarea placeholder="Your Message" class="form-control"
											name="message" rows="10" required></textarea>
									</div>
									<button type="submit" class="btn btn-lg btn-primary btn-block">SEND US</button>
								</form>
							</div>
						
						</div>


					</div>
				</div>
			</div>

		</div>


	</div>

	<footer class="bg-dark text-center text-white">

		<!-- Copyright -->
		<div class="text-center p-3" style="background-color: #030d16">
			&#169; 2023 Copyright: All Rights Reserved</div>

	</footer>

	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
		crossorigin="anonymous"></script>
	<script
		src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
		crossorigin="anonymous"></script>
	<script
		src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
		crossorigin="anonymous"></script>
	<script src="script.js"></script>
</body>
</html>