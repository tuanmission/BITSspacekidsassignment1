<!DOCTYPE HTML>

<html>
	<head>
		<title>Space Kids</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="inner">
					<a href="index.html" class="logo">An Idea</a>
					<nav id="nav">
						<a href="index.html">Home</a>
						<a href="elements.html">Elements</a>
						<?php 
							// Initialize the session
							session_start();
							
							if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
								echo '
									<a href="reset-password.php" >Reset Password</a>
									<a href="logout.php" >Log out</a>
								';
								echo strtoupper(htmlspecialchars($_SESSION["username"]));
							} else {
								echo '
									<a href="login.php">Log in</a>
									<a href="register.php">Register</a>
								';
							}
						?>
					</nav>
					<a href="#navPanel" class="navPanelToggle"><span class="fa fa-bars"></span></a>
				</div>
			</header>

		<!-- Banner -->
			<section id="banner">
				<h1>Welcome to SpaceKids </h1>
				<p>An Online Coding Learning Platform targeted for primary school aged kids and children with disabilities</p>
			</section>

		<!-- One -->
			<section id="one" class="wrapper">
				<div class="inner">
					<div class="flex flex-5">
						<article>
							
							<footer>
								<a href="ProjectIdea.html" class="button special">Project Idea</a>
							</footer>
						</article>
						<article>
							
							<footer>
								<a href="Features.html" class="button special">Features</a>
							</footer>
						</article>
						<article>
							
							<footer>
								<a href="Risks.html" class="button special">Risks</a>
							</footer>
						</article>
						<article>
						
							<footer>
								<a href="Tools.html" class="button special">Tools and Resources</a>
							</footer>
						</article>
						
						<article>
							<footer>
								<a href="Group Contract.html" class="button special">Group Contract</a>
							</footer>
						</article>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style1 special">
				<div class="inner">
					<header>
						<h2>Our Team</h2>
						<p>Meet our Team Members who are going to work on this project</p>
					</header>
					<div class="flex flex-4">
						<div class="box person">
							<div class="image round">
								<img src="images/Milan2.jpg" alt="Person 1" />
							</div>
							<h3>Milan Thomas</h3>
							
							
							
								<a href="Milan.html" class="button special">About Me</a>
					
						</div>
						<div class="box person">
							<div class="image round">
								<img src="images/Mehmet.jpg" alt="Person 2" />
							</div>
							<h3>Mehmet Ali Kir</h3>
							
							
								<a href="Mehmet.html" class="button special">About Me</a>
						</div>
						<div class="box person">
							<div class="image round">
								<img src="images/Tuan.jpg" alt="Person 3" />
							</div>
							<h3>Tuan Luong</h3>
							
						
							
								<a href="Tuan.html" class="button special">About Me</a>
							
						</div>
						<br>
						<div class="box person">
							<div class="image round">
								<img src="images/Johnathan.jpg" alt="Person 4" />
							</div>
							<h3>Johnathan Yip</h3>
							
							
								<a href="Johnathan.html" class="button special">About Me</a>
							
						</div>

						<div class="box person">
							<div class="image round">
								<img src="images/pic06.jpg" alt="Person 4" />
							</div>
							<h3>Do Phuc An Le</h3>
							
							
								<a href="An.html" class="button special">About Me</a>
							
						</div>

						<div class="box person">
							<div class="image round">
								<img src="images/Ehsan.jpg" alt="Person 4" />
							</div>
							<h3>Ehsan Khalid</h3>
							
							
								<a href="Ehsan.html" class="button special">About Me</a>
							
						
						</div>
					</div>
				</div>
			</section>

		

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="flex">
						<div class="copyright">
							&copy; SpaceKids Designed: <a href="https://spacekids.com.au"></a>. <a href="https://unsplash.com"></a>.
						</div>
						<ul class="icons">
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-linkedin"><span class="label">linkedIn</span></a></li>
							<li><a href="#" class="icon fa-pinterest-p"><span class="label">Pinterest</span></a></li>
							<li><a href="#" class="icon fa-vimeo"><span class="label">Vimeo</span></a></li>
						</ul>
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
