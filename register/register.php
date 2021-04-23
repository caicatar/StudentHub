<?php
include('../config.php');
$imgData =addslashes(file_get_contents($_FILES['userImage']['tmp_name']));
$username=$_POST['username'];
$password=$_POST['password'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$age=$_POST['age'];
$school=$_POST['school'];
$course=$_POST['course'];
$query=("insert into `userinfo`(`image`,`username`,`password`,`fname`, `lname`, `age`, `school`, `course`) values ('$imgData','$username','$password','$fname','$lname',$age,'$school','$course')");
$result=mysql_query($query) or die(mysql_error());
if($result)
{
header("location:register_success.html");
}
else 
{
	echo "DUPLICATE ENTRY!";
}
?>