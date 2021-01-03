<!DOCTYPE html>
<html>
<head>
	<title>DBMS Project</title>
	<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <style type="text/css">
 
  .demo-content{
          padding: 150px;
          font-size: 18px;
          text-align: center;
          background: #8eccc6;
          margin:50px 22em 50px 22em;

        }
        .demo-content.bg-alt{
          background: #abb1b8;
        }

  </style>
</head>
<body >
<div> 
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="contact_us.php">Contact Us</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="smart_cardrequest.php">Smart Card Request</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="travel_info.php">Travel Info</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="stations.php"><strong>Stations</strong></a>
      </li>
    </ul>
  </div>
</nav>
</div>
<nav>
    <div class="container">
      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapse1">Green Line</a>
            </h4>
          </div>
          <div id="collapse1" class="panel-collapse collapse">
            <ul class="list-group">
              <?php
              include("php/connect.php");
              $con = OpenCon();
              $stations1 = mysqli_query($con,"SELECT Station_Name FROM station WHERE Route_Id = 1");
              $row_cnt = mysqli_num_rows($stations1);

              while ( $rows = $stations1->fetch_row() ) {
                foreach ($rows as $key => $value) {
                  echo '<li class="list-group-item">',$value,'</li>';
                }
              }
              $stations1->free();

              ?>
            </ul>
          </div>
        </div>
      </div>

      <div class="panel-group">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title">
              <a data-toggle="collapse" href="#collapse2">Purple Line</a>
            </h4>
          </div>
          <div id="collapse2" class="panel-collapse collapse">
            <ul class="list-group">
              <?php
              $stations2 = mysqli_query($con,"SELECT Station_Name FROM station WHERE Route_Id = 3");
              $row_cnt = mysqli_num_rows($stations2);

              while ( $rows = $stations2->fetch_row() ) {
                foreach ($rows as $key => $value) {
                  echo '<li class="list-group-item">',$value,'</li>';
                }
              }
              $stations2->free();

              Closecon($con);
              ?>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
