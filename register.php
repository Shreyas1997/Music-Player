<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>register</title>
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
	<div class="card logr">
		<div class="card-header text-center"><h3>Register</h3>
    </div>
  		<div class="card-body logb">
    		<form action="server.php" method="post">
              <div class="form-group">
                <label for="name">Full Name:</label>
                <input type="text" class="form-control" required="required" id="name" name="username">
            </div>
            <div class="form-row">
            <div class="col">
        		<div class="form-group">
            		<label for="email">Email address:</label>
            		<input type="email" class="form-control" required="required" id="email" name="email">
        		</div>
        		<div class="form-group">
         			<label for="pwd">Password:</label>
            		<input type="password" class="form-control" required="required" id="pwd" name="password_1">
        		</div>
        		<div class="form-group">
            		<label for="usn">University Seat Number:</label>
            		<input type="text" class="form-control" required="required" id="usn" name="usn">
        		</div>
          </div>
          <div class="col">
        		<div class="form-group">
            		<label for="college">College</label>
            		<select class="form-control" required="required" id="college" name="college">
                		<option>Choose College</option>
                		<option value="Srinivas Institute of Technology">Srinivas Institute of Technology</option>
                		<option value="P A College of Engineering">P A College of Engineering</option>
                		<option value="Canara Engineering College">Canara Engineering College</option>
                		<option value="Srinivas School of Engineering">Srinivas School of Engineering</option>
                		<option value="Mangalore Institute of Technology And Engineering">Mangalore Institute of Technology And Engineering</option>
                		<option value="Sahyadri College of Engineering">Sahyadri College of Management and Engineering</option>
                		<option value="Alva's Institute of Engineering and Technology">Alva's Institute of Engineering and Technology</option>
                		<option value="St. Joseph's Engineering College">St. Joseph's Engineering College</option>
                		<option value="Karavali Institute of Technology">Karavali Institute of Technology</option>
                		<option value="Shree Devi Institute of Technology">Shree Devi Institute of Technology</option>
                    <option value="Bearys Institute of Technology">Bearys Institute of Technology</option>
                    <option value="Mangalore Marine College and Technology">Mangalore Marine College and Technology</option>
                    <option value="Srinivas University College of Engineering and Technology">Srinivas University College of Engineering and Technology</option>
                    <option value="A.J.Institute of Management">A.J.Institute of Management</option>
                		<option value="others">Others</option>
            		</select>
        		</div>
        		<div class="form-group">
           			<label for="branch">Branch:</label>
            		<select class="form-control" required="required" id="branch" name="branch">
                		<option>Choose Branch</option>
                		<option value="Aeronautical">Aeronautical</option>
                		<option value="Automobile">Automobile</option>
                		<option value="Computer Science And Engineering">Computer Science And Engineering</option>
                		<option value="Electronics And Communication">Electronics And Communication</option>
                		<option value="Electrical And Electronics">Electrical And Electronics</option>
                		<option value="Information Science">Information Science</option>
                		<option value="Marine">Marine</option>
                		<option value="Mechanical">Mechanical</option>
                		<option value="Nanotechnology">Nanotechnology</option>
                		<option value="others">Others</option>
            		</select>
        		</div>
        		<div class="form-group">
            		<label for="contact">Contact:</label>
            		<input type="phone" class="form-control" required="required" id="contact" name="contact">
        		</div>
            </div>
        		<button type="submit" class="btn btn-primary btn-lg btn-block" name="reg_user">Submit</button>
            <p class="lead" style="margin: auto; font-size: 15px;">Have an account already?<a href="login.php">Sign In</a></p>
            <div>
    		</form>
  		</div>
	</div>
</body>
</html>