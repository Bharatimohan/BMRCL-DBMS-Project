<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <style type="text/css">
  	.demo-content{
        	padding: 70px;
        	font-size: 18px;
        	text-align: center;
        	min-height: 80px;
        	background: #FFA62F;
        	margin-bottom: 50px;
        }
        .demo-content.bg-alt{
        	background: #566D7E;
        }
        .bs-example{
        	margin: 50px;
        }

        .form-horizontal .control-label{
        	padding-top: 20px;
        }
        
	</style>
	</head>
	<body>
	 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="../contact_us.php">Contact Us</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="../index.php">Home</a>
      </li>
      </ul>
				<div class="navbar-right margins">
					<a href="logout_admin.php" class="btn btn-info btn-lg">
						<span class="glyphicon glyphicon-log-out"></span> Log out
					</a>
				</div>
			</div>
		</nav>
    <section class="my-5"></section>
		<div class = "container">

		<div class="row">
			<div class="col-lg-6 col-md-5">
				<div class="demo-content"><a href="admin_manages_admin.php">Manage Admins</a></div>
			</div>

			<div class="col-lg-6 col-md-5">
				<div class="demo-content"><a href="admin_approve_cards.php">Approve Smart Card</a></div>
			</div>
		</div>
    <section class="my-2"></section>
		<div class="row">
			<div class="col-lg-6 col-md-5">
				<div class="demo-content"><a href="admin_manage_trains.php">Manage Trains</a></div>
			</div>
			<div class="col-lg-6 col-md-5">
				<div class="demo-content"><a href="admin_reply_complaints.php">Reply to Complaints</a></div>
			</div>
		</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>