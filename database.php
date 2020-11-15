<?php
$connect=mysqli_connect('localhost','root','1104','mydb');

if(mysqli_connect_errno($connect))
{
		echo 'Failed to connect';
}
?>