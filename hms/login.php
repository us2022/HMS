

<?php
session_start();
$connect=mysqli_connect('localhost','root','','hms');
 
if(!$connect)
{
		echo 'Failed to connect';
}
 echo 'connected sucessfully<br>';

 
// create a variable
$rollno=$_POST['rollno'];
$password=$_POST['password'];

$sql="SELECT * FROM std_data WHERE Roll_no='$rollno' AND Password='$password'";
$result=mysqli_query($connect,$sql);

if(mysqli_num_rows($result)>0){
	$_SESSION["id"] = $rollno;
	echo"login successfully";
	if(isset($_SESSION["id"])) {
		echo $_SESSION["id"];
	header("Location: dashboard.php");
}
	

}
else {
	echo'<script  type="text/javascript">
alert("incorrect username or password!!! ");
window.location.replace("./index.html");
</script>';
}
?>

