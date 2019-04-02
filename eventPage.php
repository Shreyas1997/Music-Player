<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Events</title>
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
<body style="background-color: #010001;">
<div class="jumbotron text-center jumboEve"style="background-image: url('img/bg2.jpg'); height: 400px;">
      <h3 class="display-3">EVENTS</h3>
        <p class=" lead"><strong><?php echo $_SESSION['success']; ?></strong></p>
        <p class=" lead username">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p class="lead">Your user ID is : <strong><?php echo $_SESSION['user_id']; ?></strong></p>
        <form action="logout.php" method="post">
           <button class="btn btn-danger" type="submit" name="logout">Logout</button>
        </form>
</div>

    <div class="jumbotron jumbotron-fluid" style="background-color: #e0e0e0">
        <div class="container">
          <h1 class="display-4">BRANCHES</h1>
          <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" id="nav-day1-tab" data-toggle="tab" href="#nav-day1" role="tab" aria-controls="nav-day1" aria-selected="true">Day1</a>
              <a class="nav-item nav-link" id="nav-day2-tab" data-toggle="tab" href="#nav-day2" role="tab" aria-controls="nav-day2" aria-selected="false">Day2</a>
            </div>
          </nav>
        <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-day1" role="tabpanel" aria-labelledby="nav-day1-tab">
          <div class="card bg-dark text-white text-center">
            <img src="img/drone.png" class="card-img" alt="Aeronautical Engineering">
            <div class="card-img-overlay over">
              <h1 class="card-title branchName">Aeronautical</h1>
              <a href="#ModalCenter" class="btn btn-outline-light branchBtn" data-toggle="modal" data-target="#ModalCenter">View Events</a>
              <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title align-left" style="color: black;" id="ModalLongTitle">Events</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" style="color: black;">
                      <div class="container">
                        <?php
                            $conn = mysqli_connect("127.0.0.1","sitenvis_admin","QI?DV#Rk]i8T","sitenvis_registration");
                            if (mysqli_connect_errno()){
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }
                            else{
                            $sql = "SELECT event_name, event_id FROM events WHERE branch = 'Aeronautical'";
                            $res = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($res) > 0){
                              echo "<form action = 'eventDesc.php' method = 'post'>";
                              while($row = mysqli_fetch_assoc($res)) {
                                  echo"<div class='card'>";
                                  echo "<button class='btn btn-info btn-lg' type='submit' name='event' value='".$row['event_id']."'>".$row['event_name']."</button>";
                                  echo "</div>";
                              }
                              echo "</form>";
                            }
                            else{
                              echo "No records";
                            }

                          }
                          mysqli_close($conn);
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="card bg-dark text-white text-center">
            <img src="img/wheel.png" class="card-img" alt="Automobile Engineering">
            <div class="card-img-overlay over">
              <h1 class="card-title branchName">Automobile</h1>
              <a href="#ModalCenter1" class="btn btn-outline-light branchBtn" data-toggle="modal" data-target="#ModalCenter1">View Events</a>
              <div class="modal fade" id="ModalCenter1" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title align-left" style="color: black;" id="ModalLongTitle">Events</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" style="color: black;">
                      <div class="container">
                        <?php
                            $conn = mysqli_connect("127.0.0.1","sitenvis_admin","QI?DV#Rk]i8T","sitenvis_registration");
                            if (mysqli_connect_errno()){
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }
                            else{
                            $sql = "SELECT event_name, event_id FROM events WHERE branch = 'Automobile'";
                            $res = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($res) > 0){
                              echo "<form action = 'eventDesc.php' method = 'post'>";
                              while($row = mysqli_fetch_assoc($res)) {
                                  echo"<div class='card'>";
                                  echo "<button class='btn btn-info btn-lg' type='submit' name='event' value='".$row['event_id']."'>".$row['event_name']."</button>";
                                  echo "</div>";
                              }
                              echo "</form>";
                            }
                            else{
                              echo "No records";
                            }

                          }
                          mysqli_close($conn);
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="card bg-dark text-white text-center">
            <img src="img/keyboard.png" class="card-img" alt="Computer Science and Engineering">
            <div class="card-img-overlay over">
              <h1 class="card-title branchName">Computer Science and Engineering</h1>
              <a href="#ModalCenter2" class="btn btn-outline-light branchBtn" data-toggle="modal" data-target="#ModalCenter2">View Events</a>
              <div class="modal fade" id="ModalCenter2" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title align-left" style="color: black;" id="ModalLongTitle">Events</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" style="color: black;">
                      <div class="container">
                        <?php
                            $conn = mysqli_connect("127.0.0.1","sitenvis_admin","QI?DV#Rk]i8T","sitenvis_registration");
                            if (mysqli_connect_errno()){
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }
                            else{
                            $sql = "SELECT event_name, event_id FROM events WHERE branch = 'Computer Science'";
                            $res = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($res) > 0){
                              echo "<form action = 'eventDesc.php' method = 'post'>";
                              while($row = mysqli_fetch_assoc($res)) {
                                  echo"<div class='card'>";
                                  echo "<button class='btn btn-info btn-lg' type='submit' name='event' value='".$row['event_id']."'>".$row['event_name']."</button>";
                                  echo "</div>";
                              }
                              echo "</form>";
                            }
                            else{
                              echo "No records";
                            }

                          }
                          mysqli_close($conn);
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <br>
          <div class="card bg-dark text-white text-center">
            <img src="img/micro.png" class="card-img" alt="Electronic and Communication Engineering">
            <div class="card-img-overlay over">
              <h1 class="card-title branchName">Electronic and Communication Engineering</h1>
              <a href="#ModalCenter3" class="btn btn-outline-light branchBtn" data-toggle="modal" data-target="#ModalCenter3">View Events</a>
              <div class="modal fade" id="ModalCenter3" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title align-left" style="color: black;" id="ModalLongTitle">Events</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" style="color: black;">
                      <div class="container">
                        <?php
                            $conn = mysqli_connect("127.0.0.1","sitenvis_admin","QI?DV#Rk]i8T","sitenvis_registration");
                            if (mysqli_connect_errno()){
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }
                            else{
                            $sql = "SELECT event_name, event_id FROM events WHERE branch = 'Electronics & Communication'";
                            $res = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($res) > 0){
                              echo "<form action = 'eventDesc.php' method = 'post'>";
                              while($row = mysqli_fetch_assoc($res)) {
                                  echo"<div class='card'>";
                                  echo "<button class='btn btn-info btn-lg' type='submit' name='event' value='".$row['event_id']."'>".$row['event_name']."</button>";
                                  echo "</div>";
                              }
                              echo "</form>";
                            }
                            else{
                              echo "No records";
                            }

                          }
                          mysqli_close($conn);
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
            <br>
          <div class="card bg-dark text-white text-center">
            <img src="img/chip.png" class="card-img" alt="Electrical & Electronics Engineering">
            <div class="card-img-overlay over">
              <h1 class="card-title branchName">Electrical & Electronics Engineering</h1>
              <a href="#ModalCenter4" class="btn btn-outline-light branchBtn" data-toggle="modal" data-target="#ModalCenter4">View Events</a>
              <div class="modal fade" id="ModalCenter4" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title align-left" style="color: black;" id="ModalLongTitle">Events</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" style="color: black;">
                      <div class="container">
                        <?php
                            $conn = mysqli_connect("127.0.0.1","sitenvis_admin","QI?DV#Rk]i8T","sitenvis_registration");
                            if (mysqli_connect_errno()){
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }
                            else{
                            $sql = "SELECT event_name, event_id FROM events WHERE branch = 'Electrical & Electronics'";
                            $res = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($res) > 0){
                              echo "<form action = 'eventDesc.php' method = 'post'>";
                              while($row = mysqli_fetch_assoc($res)) {
                                  echo"<div class='card'>";
                                  echo "<button class='btn btn-info btn-lg' type='submit' name='event' value='".$row['event_id']."'>".$row['event_name']."</button>";
                                  echo "</div>";
                              }
                              echo "</form>";
                            }
                            else{
                              echo "No records";
                            }

                          }
                          mysqli_close($conn);
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="card bg-dark text-white text-center">
            <img src="img/infoSci.png" class="card-img" alt="Information Science">
            <div class="card-img-overlay over">
              <h1 class="card-title branchName">Information Science</h1>
              <a href="#ModalCenter5" class="btn btn-outline-light branchBtn" data-toggle="modal" data-target="#ModalCenter5">View Events</a>
              <div class="modal fade" id="ModalCenter5" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title align-left" style="color: black;" id="ModalLongTitle">Events</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" style="color: black;">
                      <div class="container">
                        <?php
                            $conn = mysqli_connect("127.0.0.1","sitenvis_admin","QI?DV#Rk]i8T","sitenvis_registration");
                            if (mysqli_connect_errno()){
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }
                            else{
                            $sql = "SELECT event_name, event_id FROM events WHERE branch = 'Information Science'";
                            $res = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($res) > 0){
                              echo "<form action = 'eventDesc.php' method = 'post'>";
                              while($row = mysqli_fetch_assoc($res)) {
                                  echo"<div class='card'>";
                                  echo "<button class='btn btn-info btn-lg' type='submit' name='event' value='".$row['event_id']."'>".$row['event_name']."</button>";
                                  echo "</div>";
                              }
                              echo "</form>";
                            }
                            else{
                              echo "No records";
                            }

                          }
                          mysqli_close($conn);
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="card bg-dark text-white text-center">
            <img src="img/ship.png" class="card-img" alt="Marine">
            <div class="card-img-overlay over">
              <h1 class="card-title branchName">Marine</h1>
              <a href="#ModalCenter6" class="btn btn-outline-light branchBtn" data-toggle="modal" data-target="#ModalCenter6">View Events</a>
              <div class="modal fade" id="ModalCenter6" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title align-left" style="color: black;" id="ModalLongTitle">Events</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" style="color: black;">
                      <div class="container">
                        <?php
                            $conn = mysqli_connect("127.0.0.1","sitenvis_admin","QI?DV#Rk]i8T","sitenvis_registration");
                            if (mysqli_connect_errno()){
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }
                            else{
                            $sql = "SELECT event_name, event_id FROM events WHERE branch = 'Marine'";
                            $res = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($res) > 0){
                              echo "<form action = 'eventDesc.php' method = 'post'>";
                              while($row = mysqli_fetch_assoc($res)) {
                                  echo"<div class='card'>";
                                  echo "<button class='btn btn-info btn-lg' type='submit' name='event' value='".$row['event_id']."'>".$row['event_name']."</button>";
                                  echo "</div>";
                              }
                              echo "</form>";
                            }
                            else{
                              echo "No records";
                            }

                          }
                          mysqli_close($conn);
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="card bg-dark text-white text-center">
            <img src="img/mechanical.png" class="card-img" alt="Mechanical Engineering">
            <div class="card-img-overlay over">
              <h1 class="card-title branchName">Mechanical Engineering</h1>
              <a href="#ModalCenter7" class="btn btn-outline-light branchBtn" data-toggle="modal" data-target="#ModalCenter7">View Events</a>
              <div class="modal fade" id="ModalCenter7" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title align-left" style="color: black;" id="ModalLongTitle">Events</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" style="color: black;">
                      <div class="container">
                        <?php
                            $conn = mysqli_connect("127.0.0.1","sitenvis_admin","QI?DV#Rk]i8T","sitenvis_registration");
                            if (mysqli_connect_errno()){
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }
                            else{
                            $sql = "SELECT event_name, event_id FROM events WHERE branch = 'Mechanical'";
                            $res = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($res) > 0){
                              echo "<form action = 'eventDesc.php' method = 'post'>";
                              while($row = mysqli_fetch_assoc($res)) {
                                  echo"<div class='card'>";
                                  echo "<button class='btn btn-info btn-lg' type='submit' name='event' value='".$row['event_id']."'>".$row['event_name']."</button>";
                                  echo "</div>";
                              }
                              echo "</form>";
                            }
                            else{
                              echo "No records";
                            }

                          }
                          mysqli_close($conn);
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="card bg-dark text-white text-center">
            <img src="img/nano.png" class="card-img" alt="NanoTechnology">
            <div class="card-img-overlay over">
              <h1 class="card-title branchName">Nano Technology</h1>
              <a href="#ModalCenter8" class="btn btn-outline-light branchBtn" data-toggle="modal" data-target="#ModalCenter8">View Events</a>
              <div class="modal fade" id="ModalCenter8" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title align-left" style="color: black;" id="ModalLongTitle">Events</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" style="color: black;">
                      <div class="container">
                        <?php
                            $conn = mysqli_connect("127.0.0.1","sitenvis_admin","QI?DV#Rk]i8T","sitenvis_registration");
                            if (mysqli_connect_errno()){
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }
                            else{
                            $sql = "SELECT event_name, event_id FROM events WHERE branch = 'Nanotechnology'";
                            $res = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($res) > 0){
                              echo "<form action = 'eventDesc.php' method = 'post'>";
                              while($row = mysqli_fetch_assoc($res)) {
                                  echo"<div class='card'>";
                                  echo "<button class='btn btn-info btn-lg' type='submit' name='event' value='".$row['event_id']."'>".$row['event_name']."</button>";
                                  echo "</div>";
                              }
                              echo "</form>";
                            }
                            else{
                              echo "No records";
                            }

                          }
                          mysqli_close($conn);
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane fade" id="nav-day2" role="tabpanel" aria-labelledby="nav-day2-tab">
          <div class="card bg-dark text-white text-center">
            <img src="img/cult.png" class="card-img" alt="Cultural">
            <div class="card-img-overlay over">
              <h1 class="card-title branchName">Cultural</h1>
              <a href="#ModalCenter9" class="btn btn-outline-light branchBtn" data-toggle="modal" data-target="#ModalCenter9">View Events</a>
              <div class="modal fade" id="ModalCenter9" tabindex="-1" role="dialog" aria-labelledby="ModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title align-left" style="color: black;" id="ModalLongTitle">Events</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body" style="color: black;">
                      <div class="container">
                        <?php
                            $conn = mysqli_connect("127.0.0.1","sitenvis_admin","QI?DV#Rk]i8T","sitenvis_registration");
                            if (mysqli_connect_errno()){
                                echo "Failed to connect to MySQL: " . mysqli_connect_error();
                            }
                            else{
                            $sql = "SELECT event_name, event_id FROM events WHERE branch = 'Cultural Events'";
                            $res = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($res) > 0){
                              echo "<form action = 'eventDesc.php' method = 'post'>";
                              while($row = mysqli_fetch_assoc($res)) {
                                  echo"<div class='card'>";
                                  echo "<button class='btn btn-info btn-lg' type='submit' name='event' value='".$row['event_id']."'>".$row['event_name']."</button>";
                                  echo "</div>";
                              }
                              echo "</form>";
                            }
                            else{
                              echo "No records";
                            }

                          }
                          mysqli_close($conn);
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </div>

<!--footer-->
<div class="container">
  <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><h4 class="text-center" style="color: grey;">Download our app :</h4></li>
            <li class="list-inline-item"><a class="btn btn-lg btn-success big-btn android-btn" href="https://play.google.com/store/apps/details?id=com.BluCoastInnovations.Envision2k19">
          <img width="80px" class="pull-left" style="float: left;" src="http://www.userlogos.org/files/logos/jumpordie/google_play_04.png"><div class="btn-text" style="float: left;"><small>Available on</small><br><strong>Google Play</strong></div></a></li>
          </ul>
        </div>
  </div>
  <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
          <ul class="list-unstyled list-inline social text-center">
            <li class="list-inline-item"><h4 class="text-center" style="color: grey;">Follow us on :</h4></li>
            <li class="list-inline-item"><a href="mailto:sitenvision2k19@gmail.com"><h2><i class="fas fa-at"></i></h2></a></li>
            <li class="list-inline-item"><a href="https://instagram.com/_envision_2k19_?utm_source=ig_profile_share&igshid=hv3cgzft99uu"><h2><i class="fab fa-instagram"></i></h2></a></li>
          </ul>
        </div>
  </div> 

  <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5 text-center text-white">
          <p class="lead">Srinivas Insitute of Technology, Srinivas Campus, Valachil, Mangalore</p>
          <p class="lead"><i class="fas fa-phone"></i>+91 824 2274730, +91 824 2274731, +91 824 2274732</p>
        </div>
    </div>
        
</div>

</body>
</html>