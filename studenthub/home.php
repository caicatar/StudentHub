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

        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="profile.php">Profile</a></li>
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
<div class="well">
<div class="media">
  <div class="media-left">
    <img src="https://www.123freevectors.com/wp-content/uploads/new/icon/075-smiley-face-vector-art-free-download-l.png" class="media-object" style="width:60px">
  </div>
  <div class="media-body">
    <h4 class="media-heading">Random Friend</h4>
    <p>I ate 2 apples tonight!  #FeelingStrong</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>