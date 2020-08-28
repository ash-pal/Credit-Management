<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Credit Manager </title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="styles.css">
	<link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
</head>
<body >
	<header>
		<nav id="header-nav" class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<div class="navbar-brand">
						<a href="index.php" class="pull-left">
							<h1>Credit Manager</h1>
						</a>
					</div>
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsable-nav" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
					</button>			
				</div>

				<div id="collapsable-nav" class="collapse navbar-collapse">
		           	<ul id="nav-list" class="nav navbar-nav navbar-right">
			            <li>
			              <a href="index.php"><span>Home</span></a>
			            </li>
			            <li>
			              <a href="transfer.php">Transfer</a>
			            </li>
			            <li>
			              <a href="showtb.php">User</a>
			            </li>
			            <li>
			              <a href="history.php">History</a>
			            </li>
			        </ul>
			    </div>

			</div>
		</nav>
	</header>

	<div class="container info">
		<h3 align="center"> Welcome to the <b>Credit Management</b> Website! </h3>
		<p align="justify">
			A platform that provides a basic facility of transfering credits from one user to another with just some clicks.
			Get to know about the users whose credit you want to increase or decrease. 
			Also, there is a funtionality of transaction history which let's us know which user has lost or received how much credit amount and when.
		</p>
		<div class="row visible-s visible-md visible-lg" >
		  <div class="column">
		   	<img src="user.png" alt="Check User information" >
		  </div>
		  <div class="column">
		    <img src="trans.png" alt="Transfer">
		  </div>
		  <div class="column">
		    <img src="his.png" alt="History" >
		  </div>
		</div>

	</div>

	<div class="footer">
  		<div class="text-center">&copy; Copyright Credit Manager</div>
	</div>

  	<script src="js/jquery-2.1.4.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<script src="js/script.js"></script>
</body>
</html>
