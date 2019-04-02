<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    unset($_SESSION['username']);
    unset($_SESSION['user_id']);
  }
?>
<?php
$conn = mysqli_connect("127.0.0.1","sitenvis_admin","QI?DV#Rk]i8T","sitenvis_registration");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Event Discription</title>
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
  		<div class="card">
  				<div class="card-body" style="background-color: #f0f0f0;">
    					<?php
	  						$eve_id = mysqli_real_escape_string($conn,$_POST["event"]);
		  					$query = "SELECT * FROM events WHERE event_id = '$eve_id' ";
		  					$res = mysqli_query($conn,$query);
		  					if (mysqli_num_rows($res) > 0){
	    					while($row = mysqli_fetch_assoc($res)) {
	        				echo "<h2 class='card-title text-bold'>".$row['event_name']."</h2>";
	        				if(!empty($row['event_content'])){
	        					echo "<p class='card-text lead'>Description : ".$row['event_content']."</p>";
	        				}
	        				else{
	        					echo "<p class='card-text'>Description : N/A</p>";
	        				}
	        				if(!empty($row['rules'])){
	        					echo "<p class='card-text'>Rules : ".$row['rules']."</p>";
	        				}
	        				else{
	        					echo "<p class='card-text'>Rules : N/A</p>";
	        				}
	        				if(!empty($row['time'])){
	        					echo "<p class='card-text'>Timing : ".$row['time']."</p>";
	        				}
	        				else{
	        					echo "<p class='card-text'>Timing : N/A</p>";
	        				}
	        				if(!empty($row['branch'])){
	        					echo "<p class='card-text'>Branch : ".$row['branch']."</p>";
	        				}
	        				else{
	        					echo "<p class='card-text'>Branch : N/A</p>";
	        				}
	        				if(!empty($row['date'])){
	        					echo "<p class='card-text'>Date : ".$row['date']."</p>";
	        				}	
	        				else{
	        					echo "<p class='card-text'>Date : N/A</p>";
	        				}
	        				if (!empty($row['venue'])) {
	        					echo "<p class='card-text'>Venue : ".$row['venue']."</p>";
	        				} 
	        				else{
	        					echo "<p class='card-text'>Venue : N/A</p>";
	        				}
	        				if(!empty($row['contact_name'])){
	        					echo "<p class='card-text'><strong class='text-muted'>".$row['contact_name']."</strong></p>";
	        				}
	        				else{
	        					echo "<p class='card-text'><strong class='text-muted'>N/A</strong></p>";
	        				}
	        				if(!empty($row['contact'])){
	        					echo "<p class='card-text'><small class='text-muted'>".$row['contact']."</small></p>";
	        				}
	        				else{
	        					echo "<p class='card-text'><small class='text-muted'>N/A</small></p>";
	        				}
	        				echo"<form action='enroll.php' method='post'>";
		  					if($row['min_participants'] > 1){
		  						if(isset($_SESSION['username'])){
		  							echo "<div class='form-group'>";
		  							echo "<label for='uid' class='lead'>Your ID:</label>";
		  							echo "<input type='text' class='form-control' value=".$_SESSION['user_id']." name='uid' readonly style='width:100px;'>";
		  							echo "</div>";
		  						}
		  						else{
		  							echo "";
		  						}
		  						echo "<div class='form-group'>";
		  						echo "<label for='team' class='lead'>Enter teammates name:</label>";
		  						echo "<input type='text' class='form-control' placeholder='eg: Ravi, Jhon' name='team' required='required' autofocus='autofocus'>";
		  						echo "</div>";
		  					}
		  					else if($row['min_participants'] == 1){
		  						if(isset($_SESSION['username'])){
		  							echo "<div class='form-group'>";
		  							echo "<label for='uid' class='lead'>Your ID:</label>";
		  							echo "<input type='text' class='form-control' value=".$_SESSION['user_id']." name='uid' readonly style='width:100px;'>";
		  							echo "</div>";
		  						}
		  						else{
		  							echo"";
		  						}
		  						echo "<div class='form-group'>";
		  						echo "<input type='text' class='form-control' value='Solo' name='team' required='required' autofocus='autofocus' readonly style='width:150px;'>";
		  						echo "</div>";
		  					}
		  					echo "<br>";
		  					if ($row['flag']==1) {
	        					echo "<button class='btn btn-info btn-lg' value=".$row['event_id']." name='enroll' type='submit'>Enroll</button>";
	        				} 
	        				else {
	        					echo " ";
	        				}
	        				
	   				 		}
		  					echo"</form>";	
		  					}
		  					mysqli_close($conn);
		  				?>

		  			
  				</div>
		</div>
	</div>
</body>
</html>