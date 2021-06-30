
<?php
$connect=mysqli_connect('localhost','root','','hms');
 
if(!$connect)
{
		echo 'Failed to connect';
}
 echo 'connected sucessfully';
?>
 
<?php
 
// create a variable
$fname=$_POST['name'];
$subject=$_POST['subject'];
$email=$_POST['email'];
$message=$_POST['message'];

 
//Execute the query
 
 
mysqli_query($connect,"INSERT INTO message (name,subject,email,message)
		        VALUES ('$fname','$subject','$email','$message')");
				
	if(mysqli_affected_rows($connect) > 0){
	echo '<script  type="text/javascript">
alert("message send successfully!!! ");
window.location.replace("./index.html#contact-section");
</script>';
} else {
	echo '<script  type="text/javascript">
alert("message not send!!! ");
window.location.replace("./index.html#contact-section");
</script>';
	echo mysqli_error ($connect);
}
?>