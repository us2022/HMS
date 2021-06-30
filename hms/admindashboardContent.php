<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<style type="text/css">
		.content{
			float: right;
		}	
		.content .blocks{
			height: 100px;
			width: 300px;
				color: #FFF;
			font-size: 25px;
			text-align: center;
			padding-top: 5px;
		}
		.content span{
			display: block;
			font-size: 14px;
			background-color: #AAB7B8;
			color: #34495E;
			height: 33px;
			width: 300px;
			padding: 6px;
			text-align: center;
		}
		span a{
			color: #34495E;
			text-decoration: none;
		}
		span a:hover{
			text-decoration: none;
			color:#000;
		}
		.block{
			float: left;
			display: block;
			margin:10px;
		}
	</style>
</head>
<body>
	<div class="container-fluid content">
		
		<br><br><br>
		<h1>Dashboard</h1><hr>
		<div class="block">
			<div class="blocks" style="background-color: #3498DB"><br>
				STUDENTS
			</div>
			<span><a href="std.php" target="_self">Full details &#8669;</a></span>
		</div>	

		<div class="block">
			<div class="blocks" style="background-color: #7AA322"><br>
				HOSTELS
			</div>
			<span><a href="hostels.html" target="_self">See all &#8669;</a></span>
			</div>

			<div class="block">
			<div class="blocks" style="background-color: #82E0AA"><br>
				COMPLAINTS
			</div>
			<span><a href="message_read.php" target="_self">See all &#8669;</a></span>
			</div>
		</div>

</body>
</html>