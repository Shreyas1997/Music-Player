<?php
$conn = mysqli_connect("localhost","root","","envision");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  else{
  	session_start();

	$event_id = "";
	$college = "";
	$day = "";

	if (isset($_POST['submit'])) {
			$event_id = mysqli_real_escape_string($conn, $_POST["event_id"]);
			$college = mysqli_real_escape_string($conn, $_POST["college"]);
			$day = mysqli_real_escape_string($conn, $_POST["day"]);

			$result = mysqli_query($conn, "SELECT p.user_id,p.name,p.usn,r.team_member,p.college,p.contact,p.email FROM events e,registry r,participants p WHERE e.event_id=r.event_id AND p.user_id=r.user_id AND p.college='Srinivas Institute of Technology' AND e.event_id IN (SELECT q.event_id from events q where e.event_id=q.event_id AND q.event_name="OFFF-ROAD");");

			echo "<table border='1'><tr>";
			for($i = 0; $i < mysqli_num_fields($result); $i++) {
    			$field_info = mysqli_fetch_field($result, $i);
    			echo "<th>{$field_info->name}</th>";
			}
			while($row = mysqli_fetch_row($result)) {
    			echo "<tr>";
    			foreach($row as $_column) {
        			echo "<td>{$_column}</td>";
    			}
    			echo "</tr>";
			}

			echo "</table>";


			
			/*if($row = mysqli_fetch_array($res1)){
				/*echo"<table border='1'>
						<tr>"
						for($i = 0; $i < mysqli_fetch_array($res1); $i++){
							"<td>".
						}
						</tr>
						echo $row;
			}
			else{
				echo("Error description: " . mysqli_error($conn));
			}*/
		}
			

  }
mysqli_close($conn);
?>
