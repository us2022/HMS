<?php
session_start();
?>
<?php
$connect=mysqli_connect('localhost','root','','hms');
 
if(!$connect)
{
		echo 'Failed to connect';
}
 echo 'connected sucessfully</br>';

				if(isset($_SESSION["id"])) {
$email=$_POST['email'];
$password=$_POST['password'];
$name=$_POST['name'];
$Roll_no=$_POST['Roll_no'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$course=$_POST['course'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$nationality=$_POST['nationality'];
$med=$_POST['med'];
$rname=$_POST['rname'];
$rel=$_POST['rel'];
$rphone=$_POST['rphone'];
 
 
mysqli_query($connect,"UPDATE std_data SET Email='$email' WHERE Roll_no='$Roll_no'");
mysqli_query($connect,"UPDATE std_data SET Password='$password' WHERE Roll_no='$Roll_no'");
mysqli_query($connect,"UPDATE std_data SET Name='$name' WHERE Roll_no='$Roll_no'");
//
mysqli_query($connect,"UPDATE std_data SET DoB='$dob' WHERE Roll_no='$Roll_no'");
mysqli_query($connect,"UPDATE std_data SET Gender='$gender' WHERE Roll_no='$Roll_no'");
mysqli_query($connect,"UPDATE std_data SET Course='$course' WHERE Roll_no='$Roll_no'");
mysqli_query($connect,"UPDATE std_data SET Branch='$branch' WHERE Roll_no='$Roll_no'");
mysqli_query($connect,"UPDATE std_data SET Year='$year' WHERE Roll_no='$Roll_no'");
mysqli_query($connect,"UPDATE std_data SET Phone='$phone' WHERE Roll_no='$Roll_no'");
mysqli_query($connect,"UPDATE std_data SET Address='$address' WHERE Roll_no='$Roll_no'");
mysqli_query($connect,"UPDATE std_data SET Nationality='$nationality' WHERE Roll_no='$Roll_no'");
mysqli_query($connect,"UPDATE std_data SET Medical_illness='$med' WHERE Roll_no='$Roll_no'");
mysqli_query($connect,"UPDATE std_data SET R_name='$rname' WHERE Roll_no='$Roll_no'");
mysqli_query($connect,"UPDATE std_data SET Relation='$rel' WHERE Roll_no='$Roll_no'");
mysqli_query($connect,"UPDATE std_data SET R_phone='$rphone' WHERE Roll_no='$Roll_no'");


echo'<script  type="text/javascript">
alert("profile updated successfully");
window.location.replace("user_detail.php");
</script>';
}
else {
	echo'<script  type="text/javascript">
alert("Login Again!!!");
window.location.replace("index.html");
</script>';
}
?>
