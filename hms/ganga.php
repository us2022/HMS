<!DOCTYPE html>
<html>
<head>
	<title>Ganga</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<script src="./js/jquery-3.3.1.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
</head>
<body>
<br><br>
	<div class="container-fluid">
		<h2>Rooms</h2><hr>
		
		<div class="detail" style="border: 1.5px solid #999;border-radius:5px;padding: 0px;">
			

			<table id="zctb" class="display table table-striped table-bordered table-hover" cellspacing="0" width="100%">
									<thead>
										<tr>
											<th>Name</th>
											<th>Roll No.</th>
											<th>Room No.</th>
											<th>Fee</th>
										</tr>
									</thead>
									<tfoot>
										<tr>
											<th>Name</th>
											<th>Roll No.</th>
											<th>Room No.</th>
											<th>Fee</th>
										</tr>
									</tfoot>

				<?php
				$connect=mysqli_connect('localhost','root','','hms');
				 
				if(!$connect)
				{
						echo 'Failed to connect';
				}
				 //echo 'connected sucessfully</br>';
				?>
				 
				<?php
					$sql="SELECT * FROM std_data WHERE Hostel='Ganga'";
				$result=mysqli_query($connect,$sql);

				if ($result->num_rows > 0) {
				    // output data of each row
				    while($row = $result->fetch_assoc()) {

				        echo '
				        <tbody>
										<tr><td>' . $row["Name"]. '</td>
										<td>' . $row["Roll_no"]. '</td>
										<td>' . $row["Room_no"]. '</td>
										<td>' . $row["Fee"]. '</td>
										</tr>
						</tbody>';

				    }
				} else {
				    echo "0 results";
				}

				$connect->close();
				?>
									
			</table>
		</div>
	</div>
</body>
</html>










						