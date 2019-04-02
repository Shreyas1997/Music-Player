<?php
$conn = mysqli_connect("127.0.0.1","sitenvis_admin","QI?DV#Rk]i8T","sitenvis_registration");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else{
  	session_start();
  	if(isset($_POST['enroll'])){
  		if (isset($_SESSION['username'])) {
  		$uid = mysqli_real_escape_string($conn, $_POST['uid']);
  		$team = mysqli_real_escape_string($conn, $_POST['team']);
  		$event_id = mysqli_real_escape_string($conn, $_POST['enroll']);

  		$result=mysqli_query($conn,"SELECT event_id, user_id FROM registry WHERE event_id = '$event_id' AND user_id = '$uid'; ");
  		if($rowcount=mysqli_num_rows($result) < 1){
  			$query = mysqli_query($conn, "INSERT INTO registry (event_id, user_id, team_member) 
					  values('$event_id', '$uid', '$team');");
  		$query1 = mysqli_query($conn, "SELECT * FROM registry;");

  		if($row = mysqli_fetch_array($query1)){
				header('location: enrollSuccess.php');
			}
			else{
				echo("Error description: " . mysqli_error($conn));
			}

  		}
  		else{
  			header('location: alreadyReg.php');
  		}
  		
		}
		else{
			header('location: notSignedIn.php');
		}
  	}
}
mysqli_close($conn);
?>
