<!DOCTYPE html>
<html>
<head>
	<title>Complanits</title>
	<link rel="stylesheet" type="text/css" href="./css/bootstrap.min.css">
	
</head>
<body>

	<div class="container" style="margin-top: 20px; padding-right: 15%;">
		<h1>Complaints</h1><hr>
		<?php
$connect=mysqli_connect('localhost','root','','hms');
 
if(!$connect)
{
		echo 'Failed to connect';
}
 //echo 'connected sucessfully</br>';
?>
 
<?php
	$sql="SELECT * FROM message ORDER BY ID DESC";
$result=mysqli_query($connect,$sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '
        	<div class="jumbotron" style="padding-top: 40px;padding-bottom: 40px;">
			

			
			<div class="details col-md-8" style="display: block;">
				<div class="ratting" style="padding-bottom: 10px">
					<span style="width:37px;height:25px;background-color: green;color: #fff;padding: 0px 8px;border-radius: 5px;margin-right:10px;display:inline-block">'.$row["ID"].'</span>
				</div>
				
				<h3>' . $row["name"]. '</h3>
				<span>' . $row["email"] .'</span><br><br>
				<span><strong>Subject- ' . $row["subject"] .'</strong></span><br>
				<span>' . $row["message"] .'</span><br>
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
