

<?php
session_start();
$connect=mysqli_connect('localhost','root','','hms');
 
if(!$connect)
{
		echo 'Failed to connect';
}
 echo 'connected sucessfully<br>';
?>
 
<?php
 
// create a variable
$email=$_POST['email'];
$password=$_POST['password'];

$sql="SELECT * FROM admin WHERE Email='$email' AND Password='$password'";
$result=mysqli_query($connect,$sql);

if(mysqli_num_rows($result)>0){
	$_SESSION["id"] = $email;
	if(isset($_SESSION["id"])) {
		echo $_SESSION["id"];
	echo"login successfully";
	header("Location: admindashboard.php");
}
	

}
else {
	echo'<script  type="text/javascript">
alert("incorrect username or password!!! ");
window.location.replace("admin_login.html");
</script>';
}
?>

