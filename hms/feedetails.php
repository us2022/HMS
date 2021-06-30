<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Profile</title>
	<style type="text/css">
		.top{
			height: 45px;
			width: 100%;
			background-color: #465EC0;
			margin: 0px 0px 20px 0px;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<script src="./js/jquery-3.3.1.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
</head>
<body>
	<br><br>
	<div class="container-fluid">
		<h2>Fee Details</h2><hr>
		
		<div class="detail" style="border: 1.5px solid #999;border-radius:5px;padding: 0px;">
			<div class="top"></div>
			
			 <?php
				$connect=mysqli_connect('localhost','root','','hms');
				 
				if(!$connect)
				{
						echo 'Failed to connect';
				}
				 //echo 'connected sucessfully</br>';
		    	?>
				<?php
				if(isset($_SESSION["id"])) {
				$rollno=$_SESSION["id"];
					$sql="SELECT * FROM std_data WHERE Roll_no='$rollno'";
				$result=mysqli_query($connect,$sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {
				        echo '
		<form style="padding: 20px;">
		  <div class="form-group row">
		    <label for="staticEmail" class="col-sm-1 col-form-label">Hostel:-</label>
		    <div class="col-sm-7">
		      <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="' . $row["Fee"]. '">
		    </div>
		  </div>
		  <div class="form-group row">
		    <label for="pass" class="col-sm-1 col-form-label">Food:-</label>
		    <div class="col-sm-7">
		      <input type="text" readonly class="form-control-plaintext" id="pass" value="' . $row["Fee"]. '">
		    </div>
		  </div>
		  </form>';
		}}}
	?>
	</div>
	</div>

</body>
</html>