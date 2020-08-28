<?php
   include 'connection.php';
	$queryh = "select * from history";
	$resulth = mysqli_query($con, $queryh);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="styles.css">
	<link href='https://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora' rel='stylesheet' type='text/css'>
</head>
<body>
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

	<div class=" container table-responsive history">
		<table class="table" align="center">
			<h2 align="center">Transfer History</h2>
			<t>
				<th> Donor </th>
				<th> Recepient </th>
				<th> Credit Amount </th>
				<th> Timestamp </th>
			</t>
			<?php
				while ($rows=mysqli_fetch_assoc($resulth)) {
			?>
				<tr>
					<td><?php echo $rows['donor']; ?></td>
					<td><?php echo $rows['recepient']; ?></td>
					<td><?php echo $rows['creditamt']; ?></td>
					<td><?php echo $rows['date']; ?></td>
				</tr>
			<?php
				}
			?>
		</table>
	</div>
	<div class="footer">
  		<div class="text-center">&copy; Copyright Credit Manager</div>
	</div>
	<script src="js/jquery-2.1.4.min.js"></script>
  	<script src="js/bootstrap.min.js"></script>
  	<script src="js/bootstrap.js"></script>
  	<script src="js/script.js"></script>
</body>
</html>