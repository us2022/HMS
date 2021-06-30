<?php
session_start();

				if(isset($_SESSION["id"])) {
				}
     else {
	echo'<script  type="text/javascript">
alert("Login Again!!!");
window.location.replace("index.html");
</script>';
}

   ?>

<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<style type="text/css">
		.top-nav{
			width: 100%;
			height: 60px;
			background-color: #666;
			color: #fff;
		}
		.top-nav span{
			margin: 20px;
		}
		.side-nav{
			background-color: #2c3136;
			color: #3e3f3a;
			height: 92.45vh;
			float: left;
		}
		.side-nav a{
			margin: 20px;
			color: #fff;
			font-size: 18px;
		}
		iframe{

			border:none;
			outline: none;
		}
	</style>
</head>
<body>
	<div class="top-nav">
		<span style="font-size: 25px;font-weight: bold;">Hostel Management System</span>
		<a href="logout.php"><button class="btn btn-dark btn-large" style="float: right; margin:10px; ">Log Out</button></a>
	</div>
	<div class="col-md-2 side-nav">
		<p>M A I N</p>
		<a href="dashboardContent.php" target="data">Dashboard</a><br><br>
		<a href="user_detail.php" target="data">My Profile</a><br><br>
		<a href="roomdetails.php" target="data">Room Details</a><br><br>
		<a href="feedetails.php" target="data">Fee Details</a><br><br>
	</div>

	<iframe class="data" name="data" width="83%" height="720" src="dashboardContent.php"></iframe>

</body>
</html>