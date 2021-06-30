
<?php
$connect=mysqli_connect('localhost','root','','hms');
 
if(!$connect)
{
		echo 'Failed to connect';
}
 echo 'connected sucessfully</br>';
?>
 
<?php
 
// create a variable
$name=$_POST['name'];
$rollno=$_POST['rollno'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$nationality=$_POST['nationality'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$a=$_POST['password'];
$b=$_POST['address'];
$c=$_POST['med'];
$d=$_POST['course'];
//$photo=$_POST['pp'];
$e=$_POST['rname'];
$f=$_POST['relation'];
$g=$_POST['rphone'];

 
//Execute the query

$sql="SELECT * FROM std_data WHERE Email='$email' AND Roll_no='$rollno'";
$result=mysqli_query($connect,$sql);

if(mysqli_num_rows($result)==0){
 
mysqli_query($connect,"INSERT INTO std_data (Name,Roll_no,DoB,Gender,Branch,Year,Email,Phone,Password,Address,Course,Nationality,Medical_illness,R_name,Relation,R_phone)
		        VALUES ('$name','$rollno','$dob','$gender','$branch','$year','$email','$phone','$a','$b','$d','$nationality','$c','$e','$f','$g')");
				
	if(mysqli_affected_rows($connect) > 0){
	echo "<p>registered successfully.</p>";
	header("Location: index.html#home-section ");
} else {
	echo "Error!<br />";
	echo "Try again later.";
	echo mysqli_error ($connect);
}}
else{
	echo "already registered!!!";
	echo'<script  type="text/javascript">
alert("already registered!!!");
window.location.replace("./nr.html");
</script>';
}
?>