<?php
include("../config.php");
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
   {
    $username=addslashes($_POST['username']);
    $password=addslashes($_POST['password']);
    $query=("SELECT * FROM userinfo WHERE username = '$username' and password = '$password'"); 	
	$result=mysql_query($query);
	$row=mysql_fetch_array($result);
	$active=$row['active'];
	$userid=$row['userid'];
	$count=mysql_num_rows($result);
	    if($count==1)
		{
			session_register("username");
			$_SESSION['login_user']=$username;
			header("location: home.php");
		}
		    else
			{
				header("location: ../error.html");
				}
		}
	
?>