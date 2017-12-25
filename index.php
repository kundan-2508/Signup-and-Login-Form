<?php

define("name", "Your Space");

?>

<!doctype html>
<html lang = "en-us">
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--bootstrap css starts here-->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!--bootstrap css ends here-->
	
	<!--font awesome starts here-->
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<!--font awesome starts here-->
	
	<!--jquery cdn starts here-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!--jquery cdn starts here-->
	
	<!--bootstrap js starts here-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!--bootstrap js starts here-->
  
	<!--title logo starts here-->
	<link rel="shortcut icon" href="img/.jpg" type="image/jpg" />
	<!--title logo ends here-->
	
	<!--title starts here-->
	<title> <?php echo name;?> - A place top save your Docs</title>
	<!--title endss here-->
	
	<!--custom css starts here-->
	<link rel = "stylesheet" href = "css/style.css" type = "text/css">
	<link rel="stylesheet" href="css/animate.css" type="text/css" media="all" />
	<!--custom css ends here-->
	
	<!--custom js starts here-->
	<script src="js/prayaas.js" type = "text/javascript"></script>
	<!--custom js ends here-->
	
	<!--SEO starts here-->
	
	<!--SEO ends here-->

</head>
	
	
</head>

<body>

<br><br>

<div class="container">
	<div class = "row">
		<div class = "col-sm-3 col-md-3"></div>
			<div class = "col-sm-6 col-md-6">
				<h2 class = "heading"> Welcome in <?php echo name; ?></h2>
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#signup">Signup</a></li>
					<li><a data-toggle="tab" href="#login">Login</a></li>
				</ul>

				<div class="tab-content">
					<div id="signup" class="tab-pane fade in active">
						<form action = "#" method = "POST">
							<br>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							    <input id="name" type="text" class="form-control" name="name" placeholder="Your Name"/>
							</div>
							<br>
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							    <input id="email" type="text" class="form-control" name="email" placeholder="Your Email"/>
							</div>
							<br>
							<div class="input-group">
							    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							    <input id="password" type="password" class="form-control" name="password" placeholder="Your Password"/>
							</div>	
							<br>
							<input type="submit" class="btn btn-info form-control" value="Create an account">
							<br>
							<div class = "checkbox">
							By signing up you agree to our <a href = "#">Terms of Service </a>and <a href = "#">Privacy Policy</a>
							</div>
						</form>
					</div>
					<div id="login" class="tab-pane fade">
						<br>
						<form action = "#" method = "POST">
							<div class="input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
							    <input id="email" type="text" class="form-control" name="email" placeholder="Your Email"/>
							</div>
							<br>
							<div class="input-group">
							    <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
							    <input id="password" type="password" class="form-control" name="password" placeholder="Your Password"/>
							</div>
							<br>
							<div class="checkbox">
								<label><input type="checkbox" name="remember" style = "margin-right:5px;"> Remember me</label>
								<a href = "#" style = "float:right;margin-right:15px;">Forget password?</a>
							</div>
							<br>
							<input type="submit" class="btn btn-info form-control" value="Log In"/>
							<br>
							<div class = "checkbox">
							By signing up you agree to our <a href = "#">Terms of Service </a>and <a href = "#">Privacy Policy</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		<div class = "col-sm-3 col-md-3"></div>
	</div>
</div>





