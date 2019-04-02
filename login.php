<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="style.css">
  	<link href="fontawesome-free-5.7.0-web/css/all.css" rel="stylesheet">
  	<link href="fontawesome-free-5.7.0-web/css/fontawesome.css" rel="stylesheet">
  	<link href="fontawesome-free-5.7.0-web/css/brands.css" rel="stylesheet">
  	<link href="fontawesome-free-5.7.0-web/css/solid.css" rel="stylesheet">
  	<script defer src="fontawesome-free-5.7.0-web/js/all.js"></script>
  	<script defer src="fontawesome-free-5.7.0-web/js/brands.js"></script>
  	<script defer src="fontawesome-free-5.7.0-web/js/solid.js"></script>
  	<script defer src="fontawesome-free-5.7.0-web/js/fontawesome.js"></script>
  	<script src="reg.js"></script>
</head>
<body>
	<div class="card log" style="width: 18rem;">
  		<img class="card-img-top" src="img/logo.png" alt="logo" style="padding: 15px; background-color: white;">
      <h4 class="card-title text-center">Sign In</h4>
  		<div class="card-body">
    		<form action="server.php" method="post">
        		<div class="form-group">
            		<label for="email">Email address:</label>
            		<input type="email" class="form-control" id="email" name="email" required="required" autofocus="autofocus" placeholder="eg : abc@gmail.com">
        		</div>
        		<div class="form-group">
            		<label for="pwd">Password:</label>
            		<input type="password" class="form-control" id="pwd" name="password" required="required" autofocus="autofocus" placeholder="Password">
        		</div>
        		<button type="submit" class="btn btn-primary" name="login_user">Submit</button>
    		</form>
  		</div>
  		<p class="lead" style="margin: auto; font-size: 15px;">Don't have an account?<a href="register.php">Sign Up</a></p>
	</div>
</body>
</html>