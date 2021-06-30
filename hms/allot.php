<?php
$connect=mysqli_connect('localhost','root','','hms');
 
if(!$connect)
{
		echo 'Failed to connect';
}
 echo 'connected sucessfully</br>';
?>
 
<?php
 $hostel=$_POST['hostel'];
$room=$_POST['room'];
$fee=$_POST['fee'];
$ID=$_POST['ID'];
 
mysqli_query($connect,"UPDATE std_data SET Hostel='$hostel' WHERE ID='$ID'");
mysqli_query($connect,"UPDATE std_data SET Room_no='$room' WHERE ID='$ID'");
mysqli_query($connect,"UPDATE std_data SET Fee='$fee' WHERE ID='$ID'");

header("Location: std.php");
?>
