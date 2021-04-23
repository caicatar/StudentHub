<!DOCTYPE html>
<?php

include('../session.php');

?>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StudentHub</title>
    <link href="/StudentHub.com/css/bootstrap.min.css" rel="stylesheet">
    <script src="/StudentHub.com/js/jquery-3.1.1.min.js"></script>
    <script src="/StudentHub.com/js/bootstrap.min.js"></script>
<style>
body {
background: url("/StudentHub.com/img/bg-city.jpg");
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
#col1 h1{
	font-family: meatloaf regular;
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

        <li><a href="../home.php">Home</a></li>
        <li><a href="../profile.php">Profile</a></li>
        <li class="active"><a href="search.php">Search</a></li> 
      </ul>
	 
      <ul class="nav navbar-nav navbar-right">
        <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span> Signed in as: <?php echo $login_session; ?></a></li>
        <li><a href="../logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
<div class="jumbotron">
<h1 id="banner" align="center">StudentHub</h1>
<div class="col-md-12">
<div id="col1" class="well">
<h1 align="center">Search other Students!</h1>
<form align=center method="post" action="search.php?go"  id="searchform">
<p align="center"><input type="text" class="form-control" style="width: 500px;" name="name"></p>
<p align="center"><input type="submit" class="btn btn-primary" name="submit" style="height:50px; width:200px;" value="Search"></p>
</form>
 <?php 
      include('../config.php');
	  if(isset($_POST['submit'])){ 
	  if(isset($_GET['go'])){ 
	  if(preg_match("/^[A-Za-z0-9_]+/", $_POST['name'])){ 
	  $name=$_POST['name'];
	  $sql="SELECT * FROM userinfo WHERE fname LIKE '%" . $name .  "%' OR username LIKE '%" . $name ."%' AND username NOT LIKE '%" . $login_session . "%'"; 
	  $result=mysql_query($sql); 
	  if (mysql_num_rows($result) > 0) {
	  while($row=mysql_fetch_array($result)){ 
	          $username=$row['username'];
	          $FirstName=$row['fname']; 
	          $LastName=$row['lname']; 
			  $age=$row['age']; 
			  $course=$row['course']; 
			  $school=$row['school']; 
	          $userid=$row['userid'];
	  echo "<div class=well>";
	  echo "<div class=media>";
      echo "<div class=media-left>";
      echo "<img src=getImage.php?userid=". $userid ." class=img-circle height=100px width=100px>";
	  echo "</div>";
      echo "<div class=media-body>";
      echo "<h4 class=media-heading><a href=friend_profile.php?userid=$userid>"  . $username . "</a></h4>";
	  echo "<h5 class=media-heading><b>Full Name:</b> "  .$FirstName . " " . $LastName . "</h4>";
	  echo "<h5 class=media-heading><b>Course:</b> ".$course."</h5>";
	  echo "<h5 class=media-heading><b>Age:</b>  " . $age . "</h5>";
	  echo "<h5 class=media-heading><b>School:</b>  " . $school . "</h5>";
      echo "</div>";
      echo "</div>";
	  echo "</div>";
	  } 
	  }
	  else
	  {
		  ?>
	  <p align="center" style="font-family: meatloaf regular; font-size: 40pt;">User not found.</p>
	  <?php 
	  }
	  }
	  else
      { 
      ?>
	  <p align="center" style="font-family: meatloaf regular; font-size: 40pt;">Please enter a search query</p>
	  <?php
	  } 
	  }
	  }
	?>
</div>
</div>
</div>
</div>
</div>
</body>
</html>