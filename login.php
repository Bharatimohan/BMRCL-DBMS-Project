<?php

session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>DBMS Project</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  <style type="text/css">

        .demo-content{
        	padding: 170px;
        	font-size: 20px;
        	background: #DCEAE5;
        	
        	
        }
        .demo-content.bg-alt{
        	background: #abb1b8;
        }
      	
      	.bs-example{
        	margin: 100px;
        }
       
        .form-horizontal .control-label{
        	padding-top: 100px;
        }
  </style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="contact_us.php">Contact Us</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="login.php"><strong>Login</strong><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="smart_cardrequest.php">Smart Card Request</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="travel_info.php">Travel Info</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="stations.php">Stations</a>
      </li>
    </ul>
  </div>
</nav>

<div class = "container">
	
		<div class="demo-content">
			<div class="row">
					<div id="logo-container"></div>
					<div class="col-sm-8 col-md-5 ">
						<h3 class="text">Admin Login</h3>
						<form action="php/admin_login_check.php" method="POST" id="loginForm">
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input class="form-control" type="email" name='admin_id' placeholder="Admin-Email" required />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input class="form-control" type="password" name='password' placeholder="Password" required />
							</div>
							<div class="form-group">
								<div class="col-xs-offset-2 col-xs-6">
									<button type="submit" name="submit" class="btn btn-primary">Login</button>
								</div>
							</div>
						</form>
					</div>
				
					<div id="logo-container"></div>
					<div class=" col-sm-8 col-md-5 ">
						<h3> User Login </h3>
						<form action="php/card_status.php" id="loginForm" method="POST">
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
								<input class="form-control" type="text" name='user_id' placeholder="UserId" required />
							</div>
							<div class="form-group input-group">
								<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
								<input class="form-control" type="password" name='password' placeholder="Password" required />
							</div>
							<div class="form-group">
								<div class="col-xs-offset-2 col-xs-6">
									<button type="submit" name="submit" class="btn btn-primary">Login</button>
								</div>
							</div>
						</form>
					</div>
			<p class="bg-danger">
				<?php

				if(!empty($_SESSION['error_message']))
				{
					echo $_SESSION['error_message'];
					unset($_SESSION['error_message']);
				}

				?>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
				

</body>
</html>
