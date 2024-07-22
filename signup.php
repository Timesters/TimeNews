<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sign Up Page</title>
	<link rel="stylesheet" href="public/bootstraps/css/bootstrap.css">
	<link rel="stylesheet" href="public/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="public/theme/css/main.css">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
	    	<div class="navbar-header">
	      		<a class="navbar-brand" href="home.php">
	      			<img src="Image/TimeGate Remove BG.png" alt="Logo Timagate" class="main-logo">
	      		</a>
	    	</div>
		    <form class="navbar-form navbar-left">
		      	<div class="form-group">
		        	<input type="text" class="form-control" placeholder="Berita apa yang ingin Anda Baca hari ini?">
		      	</div>
		      	<button type="submit" class="btn btn-default">Find</button>
		    </form>
    		<ul class="nav navbar-nav navbar-right">
				
				<li><a href="login.php">Login</a></li>
				<li><a href="signup.php">Sign Up</a></li>
    		</ul>
    		<ul class="nav navbar-nav navbar-primary text-center">
				<li><a href="home.php">Home</a></li>
				<li><a href="otaku.php">Otaku</a></li>
				<li><a href="event.php">Event</a></li>
				<li><a href="anime.php">Anime</a></li>
    		</ul>
		</nav>
	</div>

	<div class="container content-wrapper">
		<!-- Single Content -->
		<div class="col-xs-6 col-md-offset-3">
			<form action="" method="post">
			<div class="box-login text-center">

			<?php
				include("php/config.php");
				if(isset($_POST["submit"])){
					$name = $_POST["name"];
					$username = $_POST["username"];
					$email = $_POST["email"];
					$password = $_POST["password"];

				$verify_query = mysqli_query($con,"SELECT email FROM users WHERE email='$email'");
				if(mysqli_num_rows($verify_query) !=0){
					echo "<div class='message'>
						<p>This email is used, try use another or Login instead.</p>
					</div> <br>";
					echo "<a href='javascript:self.history.back()'><button class='btn btn-block btn-primary'>Go Back</button>";
				}
				else{
					mysqli_query($con,"INSERT INTO users(name,username,email,password) VALUES('$name','$username','$email','$password')") or die("Error occured.");
					echo "<div class='message'>
						<p>Registration Successful.</p>
						</div> <br>";
					echo "<a href='login.php'><button class='btn btn-block btn-primary'>Login now.</button>";
				}
				}
			?>

				<h1>Sign up</h1>
				<p>Gunakan akun media sosial Anda untuk mendaftar.</p>
				<div class="btn-social">
					<a href="" class="btn btn-primary btn-social">
						<i class="fa fa-facebook"></i> Facebook
					</a>
					<a href="" class="btn btn-danger btn-social">
						<i class="fa fa-google-plus"></i> Google
					</a>
				</div>
				<p>Atau miliki akun dengan mendaftarkan email Anda.</p>
				<div class="col-md-12 text-left">
					<div class="form-group">
						<label for="name">Nama Lengkap :</label>
						<input type="text" name="name" id="name"  required class="form-control"> <!--autocomplete="off"-->
					</div>
					<div class="form-group">
						<label for="username">Username :</label>
						<input type="text" name="username" id="username" required class="form-control"><!--autocomplete="off"-->
					</div>
					<div class="form-group">
						<label for="email">E-mail :</label>
						<input type="text" name="email" id="email" required class="form-control"><!--autocomplete="off"-->
					</div>
					<div class="form-group">
						<label for="password">Password :</label>
						<input type="password" name="password" id="password" required class="form-control"><!--autocomplete="off"-->
					</div>
					
					<div class="form-group">
						<p>Dengan mendaftar, Anda telah setuju dengan syarat dan ketentuan yang berlaku</p>
						<button type="submit" name="submit" value="Sign Up" class="btn btn-block btn-primary">Sign Up</button>
					</div>
					
					<!--
					<div class="form-group">
					<p>Dengan mendaftar, Anda telah setuju dengan syarat dan ketentuan yang berlaku</p>
						<input type="submit" name="submit" value="Sign Up" required>
					</div>
					-->
				</div>
				<p><a href="login.php">Login Akun</a></p>
			</div>
			</form>
		</div>
		<!-- End Topik Content -->
	</div>
	<footer>
		<div class="container">	
			<div class="navigation-footer">	
				<ul class="navigation">
					<li><a href="signup.php">Sign up</a></li>
					<li><a href="">Contact</a></li>
					<li><a href="">DISCLAIMER</a></li>
				</ul>
				<ul class="social-icon pull-right">
					<li><a href=""><img src="public/image/component/facebook.png" alt=""></a></li>
					<li><a href=""><img src="public/image/component/twitter.png" alt=""></a></li>
					<li><a href=""><img src="public/image/component/gplus.png" alt=""></a></li>
					<li><a href=""><img src="public/image/component/youtube.png" alt=""></a></li>
					<li><a href=""><img src="public/image/component/instagram.png" alt=""></a></li>
				</ul>
			</div>
		</div>
	</footer>

	<!-- NAVBAR STICKY -->

	<nav class="navbar navbar-default" id="sticky-navbar" style="background-color: white; margin-top: 0px;">
	  	<div class="container navbar-sticky">
	     	<div class="collapse navbar-collapse">
	    		<ul class="nav navbar-nav navbar-primary text-center">
	    			<li><a href="" class="sticky-logo"><img src="Image/TimeGate Remove BG.png" alt="Logo Timegate" class="main-logo"></a></li>
					<li><a href="home.php">Home</a></li>
					<li><a href="otaku.php">Otaku</a></li>
					<li><a href="event.php">Event</a></li>
					<li><a href="anime.php">Anime</a></li>
					<li><a href="login.php">Login</a></li>
					<li><a href="signup.php">Sign up</a></li>
	    		</ul>
	     	</div>
	  	</div>
	</nav>


	<script src="public/theme/js/jquery-3.2.1.min.js"></script>
	<script src="public/bootstraps/js/bootstrap.min.js"></script>
	<script src="public/theme/js/main.js"></script>
</body>
</html>

