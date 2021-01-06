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
  	h2.headertekst {
  text-align: center;
	}
	.demo-content{
        	padding: 30px;
        	font-size: 18px;
        	
        	min-height: 25px;
        	background: #DCEAE5;
        	margin-bottom: 10px;
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
        .padding {
        	padding-left: 15em;
        	padding-bottom: 10px;
        }
  </style>
</head>
<body >
	

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
      <li class="nav-item active">
        <a class="nav-link" href="smart_cardrequest.php"><strong>Smart Card Request</strong></a>
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
<section class="my-3"></section>
<h2 class="padding">Smart Card User Info</h2>

	<div class="container">
		<div class="demo-content">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<form id="contact-form" method="post" action="php/new_customer_request_card.php">
					<div class="controls">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>First Name *</label>
									<input type="text" name="fname" class="form-control" placeholder="Please enter your First Name" required="required" data-error="First Name is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Last Name</label>
									<input type="text" name="lname" class="form-control" placeholder="Please enter your Last Name" required="required" data-error="Last Name is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Email *</label>
									<input type="email" name="email" class="form-control" placeholder="Please enter your email" required="required" data-error="Enter a valid email.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Phone *</label>
									<input type="tel" name="phone" class="form-control" placeholder="Please enter your phone number">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Username *</label>
									<input type="text" name="user_id" class="form-control" placeholder="Please enter username" required="required" data-error="Valid username is required.">
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Password *</label>
									<input type="password" name="password" class="form-control" placeholder="Please enter password" required="required" data-error="Enter valid password">
									<div class="help-block with-errors"></div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<label>Address *</label>
									<textarea name="address" class="form-control" placeholder="Smart Card will be delivered to this address" rows="4" required="required" data-error="Please enter your address"></textarea>
									<div class="help-block with-errors"></div>
								</div>
							</div>
							<div class="col-md-12">
								<input type="submit" name="submit" class="btn btn-success btn-send" value="Send Request">
							</div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-12">
								<p class="text-muted"><strong>*</strong> These fields are required.</p>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
