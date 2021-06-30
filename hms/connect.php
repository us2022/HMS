<?php
$connect=mysqli_connect('localhost','root','','hms');
 
if(!$connect)
{
		echo 'Failed to connect';
}
 echo 'connected sucessfully';
?>