<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Login Page</title>
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
					include("php/config.php")
					if(isset($_POST['submit'])){
						$email = mysqli_real_escape_string($con,$_POST['email']);
						$password = mysqli_real_escape_string($con,$_POST['password']);
						$result = mysqli_query($con, "SELECT * FROM users WHERE email='$email' AND password='$password'") or die("Select Error");
						$row = mysqli_fetch_assoc($result);

						if(is_array($row) && empty($row)){
							$_SESSION['email'] = $row['email'];
							$_SESSION['username'] = $row['username'];
							$_SESSION['id'] = $row['id'];
						}
						else{
							echo "<div class='message'>
								<p>Username atau Password salah.</p>
							</div> <br>";
						}

						if(isset($_SESSION['valid'])){
							header("Location: home.php");
						}
					}else{
				?>
				<h1>Login</h1>
				<p>Gunakan akun media sosial Anda untuk dapat mengakses seluruh fitur domain-ini.com.</p>
				<div class="btn-social">
					<a href="" class="btn btn-primary btn-social">
						<i class="fa fa-facebook"></i> Facebook
					</a>
					<a href="" class="btn btn-danger btn-social">
						<i class="fa fa-google-plus"></i> Google
					</a>
				</div>
				<p>Atau masuk dengan akun yang sudah ada</p>
				<div class="col-md-12 text-left">
					<div class="form-group">
						<label for='email'>E-mail :</label>
						<input type="text" name="email" id="email" required class="form-control">
					</div>
					<div class="form-group">
						<label for='password'>Password : </label>
						<a href="" class="link pull-right">Lupa?</a>
						<input type="password" name="password" id="password" required class="form-control">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-block btn-primary">Login</button>
					</div>
				</div>
				<p><a href="signup.php">Sign Up Akun</a></p>
			</div>
			</form>
		</div>
		<?php } ?>

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
				<div class="col-xs-6">
					<p class="copyright"><small>Hak Cipta 2017 Tam TV Babel - Develop By <a href="">Teitra Mega</a></small></p>
				</div>
			</div>
		</div>
	</footer>

	<!-- NAVBAR STICKY -->

	<nav class="navbar navbar-default" id="sticky-navbar" style="background-color: white; margin-top: 0px;">
	  	<div class="container navbar-sticky">
	     	<div class="collapse navbar-collapse">
	    		<ul class="nav navbar-nav navbar-primary text-center">
	    			<li><a href="" class="sticky-logo"><img src="Image/TimeGate Remove BG.png" alt="Logo Timagate" class="main-logo"></a></li>
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

