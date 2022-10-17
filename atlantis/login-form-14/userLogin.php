<?php
	$_SESSION['login'] = false;
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>USER LOGIN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body style="overflow-y:hidden;">
	<section class="ftco-section " style="background: url(./images/wp4979803-scenery-anime-aesthetic-wallpapers.png); background-size: 100% 100%; background-attachment: fixed;">
		<div class="container">
			<div class="row justify-content-center">
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(images/USER.png);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">User</h3>
			      		</div>
					<div class="w-100">
						<p class="social-media d-flex justify-content-end">
							<a href="https://www.facebook.com/afnan.sullivan.41148/" target="_blank" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
							<a href="https://twitter.com/afnanzayn41148" target="_blank" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
						</p>
					</div>
			    </div>
				<form action="config/checkingPost.php" class="signin-form" method="POST">
			      	<div class="form-group mb-3">	
						<input type="hidden" name="cek" value="login">
						<input type="hidden" name="act" value="loginUser">
						<label class="label" for="name">E-Mail</label>
			      		<input type="email" class="form-control" placeholder="Username" name="email_pemesan" required>
			      	</div>
		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              	<input type="password" class="form-control" placeholder="Password" name="passpem" required>
		            </div>
		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
		            </div>
					<div class="w-100 text-md-right">
						<p class="text-center">You're an Admin? <a class="text-danger" href="index.php">Sign Up</a></p>
					</div>		          
		        </form>
		        <div class="w-100 text-center">
					<a href="../index.php"><input type="submit" class="btn btn-sm btn-secondary" value="Dashboard"></a>
				</div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

