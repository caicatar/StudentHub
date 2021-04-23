<!DOCTYPE html>
<?php
include('session.php'); 
?>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StudentHub</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
		<script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
<style>
body {
background: url("../img/bg-city.jpg");
}
.jumbotron {
background-color: royalblue;
height: 800px;
}
#banner {
font-family: meatloaf regular;
font-size: 100px;
color: white;
text-shadow: black 2px 2px;
}
#col1 {
background-size: 650px 500px;
background-repeat: no-repeat;
height: 500px;
z-index: -1;
}
#loginform {
height: 500px;
z-index: -1;
}
.navbar {
	text-shadow: black 1px 1px;
	text-color: white;
}
#userimg {
border: 1px solid royalblue;
border-style: groove;
border-radius: 5px;
}
</style>
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#" style="font-family: meatloaf regular; font-size: 100pt; color: white;">SH</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">

        <li><a href="home.php">Home</a></li>
        <li class="active"><a href="profile.php">Profile</a></li>
        <li><a href="search/search.php">Search</a></li> 
      </ul>
	 
      <ul class="nav navbar-nav navbar-right">
        <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Signed in as: <?php echo $login_session; ?></a></li>
        <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<div class="jumbotron">
<h1 id="banner" align="center">StudentHub</h1>
<div class="col-md-12">
<div id="col1" class="well">
<div class="col-md-4">
  <?php 
   include('../config.php');
   $query="SELECT * FROM userinfo WHERE username = '$login_session'";
   $result=mysql_query($query);
   while($row=mysql_fetch_array($result))
   {
	   $userid=$row['userid'];
	   $Image=$row['image'];
	   $fname=$row['fname'];
	   $lname=$row['lname'];
	   $age=$row['age'];
	   $school=$row['school'];
	   $course=$row['course'];
   }
   ?>
<h1 align="right"><img id="userimg" src="getImage.php?userid=<?php echo $userid;?>" width=200px height=200px></h1>
<form action="/messages/user_messages.php?username=<?php echo $login_session; ?>" method="get">
<p><button class="btn btn-primary" style="width: 200px; float: right; padding: 10px;">Messages</button></p>
</form>
<br>
<br>
<form action="/socialized/user_friend_list.php?username=<?php echo $login_session; ?>" method="get">
<p><button class="btn btn-primary" style="width: 200px; float: right; padding: 10px;">Friend's List</button></p>
</form>
<br>
<br>
</div>
<div class="col-md-8">
<h1><?php echo $login_session; ?></h1>
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Information</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
   <br>
    <p align="center">Full Name: </p>
	<p align="center" style="font-size:17pt;"><?php echo $fname; ?> <?php echo $lname; ?></p>
	<p>Age: <?php echo $age; ?></p>
	<p>School: <?php echo $school; ?></p>
	<p>Course: <?php echo $course; ?></p>
  </div>
  </div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>