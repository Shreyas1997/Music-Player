<?php
$conn = mysqli_connect("127.0.0.1","sitenvis_admin","QI?DV#Rk]i8T","sitenvis_registration");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else{
  	session_start();

	$usn = "";
	$name = "";
	$email = "";
	$password1 = "";
	$college = "";
	$branch = "";
	$contact = "";
	$_SESSION['success'] = "";

	if (isset($_POST['reg_user'])) {
			$usn = mysqli_real_escape_string($conn, $_POST["usn"]);
			$name = mysqli_real_escape_string($conn, $_POST["username"]);
			$email = mysqli_real_escape_string($conn, $_POST["email"]);
			$password1 = mysqli_real_escape_string($conn, $_POST["password_1"]);
			$college = mysqli_real_escape_string($conn, $_POST["college"]);
			$branch = mysqli_real_escape_string($conn, $_POST["branch"]);
			$contact = mysqli_real_escape_string($conn, $_POST["contact"]);

			$password = md5($password1);//encrypt the password before saving in the database
			$exist = mysqli_query($conn, "SELECT email FROM participants WHERE email = '$email';");
			$existRow = mysqli_fetch_array($exist);
			if($email == $existRow['email']){
				header('location: accountExist.php');
			}
			else{
				$result = mysqli_query($conn, "INSERT INTO participants (usn, name, email, password, college, branch, contact) 
					  values('$usn', '$name', '$email', '$password', '$college', '$branch', '$contact');");
				
				$res1 = mysqli_query($conn, "SELECT * FROM participants WHERE email = '$email';");
				if($row = mysqli_fetch_array($res1)){
				$_SESSION['user_id'] = $row['user_id'];
				$_SESSION['username'] = $row['name'];
				$_SESSION['success'] = "You are now logged in";
				header('location: eventPage.php');
			}
			else{
				echo("Error description: " . mysqli_error($conn));
			}
		}
			

  }
 if(isset($_POST['login_user'])) {
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password1 = mysqli_real_escape_string($conn, $_POST['password']);
			$password = md5($password1);
			$query = "SELECT * FROM participants WHERE email='$email' AND password='$password'";
			$results = mysqli_query($conn, $query);
			
			if ($res = mysqli_fetch_array($results)) {
						$_SESSION['user_id'] = $res['user_id'];
						$_SESSION['username'] = $res['name'];
						$_SESSION['success'] = "You are now logged in";
						header('location: eventPage.php');
					}
					else{
						if($res['email']!=$email){
							header('location: dontExist.php');
						}

					header('location: wrongDetails.php');
			}
}
}
mysqli_close($conn);
?>
