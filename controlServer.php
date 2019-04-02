<?php
$q = $_GET['q'];
echo $q;

$conn = mysqli_connect("localhost","root","","envision");
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}

$sql="SELECT event_name FROM events WHERE branch = '".$q."'";
$result = mysqli_query($conn,$sql);
echo "<select class='form-control' name='event'>";
while($row = mysqli_fetch_assoc($result)) {
    echo "<option value='". $row['event_name'] ."'>" . $row['event_name'] . "</option>";
}
echo "</select>";
mysqli_close($conn);
?>