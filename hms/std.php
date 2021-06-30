<!DOCTYPE html>
<html>
<head>
	<title>Students Details</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	<style type="text/css">
		.hos{
			height: 310px;
			width: 180px;
			border:1px #999 solid;
			margin-right: 10px;
			padding: 5px;
		}
	</style>
</head>
<body>

	<div class="container" style="margin-top: 20px; padding-right: 15%;">
		<h1>Students</h1><hr>
		<?php
$connect=mysqli_connect('localhost','root','','hms');
 
if(!$connect)
{
		echo 'Failed to connect';
}
 //echo 'connected sucessfully</br>';
?>
 
<?php
	$sql="SELECT * FROM std_data" ;
$result=mysqli_query($connect,$sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

     echo '
	    <div class="jumbotron" style="padding-top: 40px;padding-bottom: 40px;">
			<div style="float: right;">
				  <button type="text" style="margin-left:10%;" class="btn btn-dark">
				    provide Room
				  </button>
				  <div class="hos">
				  <form action="allot.php" method="post">
				  <div class="form-group">
				    <label for="Hostel">Hostel</label>
				    <input type="text" class="form-control" id="Hostel" name="hostel" placeholder="Hostel" value="'.$row["Hostel"].'">
				  </div>
				  <div class="form-group">
				    <label for="room">Room No.</label>
				    <input type="text" class="form-control" id="room" name="room" placeholder="Room No." value="'.$row["Room_no"].'">
				  </div>
				  <div class="form-group">
				    <label for="fee">Fee</label>
				    <input type="text" class="form-control" id="fee" name="fee" placeholder="150,paid/not paid" value="'.$row["Fee"].'">
				  </div>
				  <input type="text" name="ID" style="display:none;" value="'.$row["ID"].'">
				  <button type="submit" style="margin-left: 30%;" class="btn btn-primary" >Allot</button>
				</form>
				</div>
				</div>

			
				<div class="details col-md-8" style="display: block;">
				
				<div class="ratting" style="padding-bottom: 10px">
					<span style="width:37px;height:25px;background-color: green;color: #fff;padding: 0px 8px;border-radius: 5px;margin-right:10px;display:inline-block">'.$row["ID"].'</span>
				</div>
				<h3>' . $row["Name"]. '</h3>
				<span><strong>Rollno </strong>' . $row["Roll_no"] .'</span>,
				<span><strong>DoB- </strong>' . $row["DoB"] .'</span><br>
				<span><strong>Gender-</strong>' . $row["Gender"] .'</span>,
				<span><strong>Nationality-</strong>' . $row["Nationality"] .'</span><br>
				<span><strong>Course- </strong>' . $row["Course"] .'</span>,
				<span><strong>Branch- </strong>' . $row["Branch"] .'</span>,
				<span><strong>Year-</strong>' . $row["Year"] .'</span><br>
				<span><strong>Email- </strong>' . $row["Email"] .'</span><br>
				<span><strong>Mob-</strong>' . $row["Phone"] .'</span><br>
				<span><strong>Password- </strong>' . $row["Password"] .'</span><br>
				<span><strong>Address- </strong>' . $row["Address"] .'</span><br>
				<span><strong>Medical illness-</strong>' . $row["Medical_illness"] .'</span><br><hr>
				<span><strong>Emergency Contact:</strong></span><br>
				<span><strong>'.$row["R_name"].'</strong> ('.$row["Relation"].')</span><br>
				<span><strong>Mob-</strong>' . $row["R_phone"] .'</span><br>
			</div>
		</div>
        ';

    }
} else {
    echo "0 results";
}

$connect->close();
?>
		
	</div>			
<script type="text/javascript" src="./js/bootstrap.min.js"></script>

</body>
</html>
