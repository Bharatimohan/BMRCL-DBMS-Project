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
        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="login.php"><strong>Smart Card</strong></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="complaint.php">Complaint</a>
      </li>
      </ul>
      <div class="navbar-right margins">
        <a href="php/logout_smartcard.php" class="btn btn-info btn-lg">
          <span class="glyphicon glyphicon-log-out"></span> Log out
      	</a>
      </div>
  </div>
</nav>
		
	<div class="container">

    <div class="col-md-10">
        <h4>Card Number : <?php echo $_SESSION['Card_Number']; ?> </h4>

    </div>

    <div class="col-md-12">
        <h4>Name : <?php echo $_SESSION['Fname']," ", $_SESSION['Lname'];?> </h4>
    </div>
    <div class="col-md-12">
        <h4>Card Status : <?php echo $_SESSION['Card_Status']; ?> </h4>
    </div>

    <div class="col-md-12">
        <h4>Balance : <?php echo $_SESSION['Balance']; ?> </h4>
    </div>
</div>


<div class = "container top_padding">
    <form action="php/recharge.php" method="POST">
        <div class="col-md-6">
            <div class="form-group">
                <label>Recharge Amount</label>
                <input type="number" name="amount" class="form-control" placeholder="Please enter amount">
                <div class="help-block with-errors"></div>
            </div>
        </div>
        <div class="col-md-12">
            <input type="submit" name="submit" class="btn btn-success btn-send" value="Recharge">
        </div>

    </form>

</div>
<div style="margin-left: 9em; margin-right: 50em;">
    <p class="bg-success" style="margin-top: 20px;">
        <?php
        if(!empty($_SESSION['successfull']))
        {
            echo $_SESSION['successfull'];
            unset($_SESSION['successfull']);
        }

        ?>
    </p>
</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
</body>
</html>