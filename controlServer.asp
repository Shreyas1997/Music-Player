 <?php
$conn = mysqli_connect("localhost","root","","envision");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql = "SELECT event_name FROM events WHERE branch = ?";

$stmt = $mysqli->prepare(sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($event_name);
$stmt->fetch();
$stmt->close();

echo "<select class='form-control' name='branch'>";
echo "<option value=".$event_name.">".$event_name."</option>";
echo "</select>";
?> 