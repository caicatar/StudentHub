<!DOCTYPE html>
<?php
include('../session.php'); 
$userid = $_GET['userid'];
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
        <li><a href="../profile.php"><span class="glyphicon glyphicon-user"></span> Signed in as: <?php echo $login_session; ?></a></li>
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
<div class="col-md-4">
<h1 align="right"><img id="userimg" src="getImage.php?userid=<?php echo $userid;?>" width=200px height=200px></h1>
<form action="socialize/sendmessage.php?userid=<?php echo $userid; ?> method="get"> 
<p><button class="btn btn-primary" style="width: 200px; float: right; padding: 10px;" disabled>Message</button></p>
</form>
<br>
<br>
<form action="socialize/addfriend.php?userid=<?php echo $userid; ?> method="get">
<p><button class="btn btn-primary" style="width: 200px; float: right; padding: 10px;">Add as Friend</button></p>
</form>
</div>
  <?php 
   include('../config.php');
   $query="SELECT * FROM conversation WHERE senderid = '$userid'";
   $result=mysql_query($query);
   while($row=mysql_fetch_array($result))
   {
	   $message_content=$row['message_content'];
	   $senderid=$row['senderid'];
	   $username=$row['username'];
   }
   ?>
<div class="col-md-8">
<ul class="nav nav-tabs">
  <li class="active"><a data-toggle="tab" href="#home">Conversation:</a></li>
</ul>

<div class="tab-content">
  <div id="home" class="tab-pane fade in active">
   <br>
<?php 
echo "<div class=form-group>";
echo "<div class=media>";
  echo "<div class=media-left>";
    echo "<img src=getImageSender.php?usr=".$username." class=media-object style=width:60px>";
  echo "</div>";
  echo "<div class=media-body>";
    echo "<h4 class=media-heading>".$username."</h4>";
    echo "<p>".$message_content."</p>";
echo "</div>";
echo "</div>";
echo "</div>";
?>
<form action="sendmessage.php?userid=<?php echo $userid; ?>" method="post">
  <textarea name="msg" class="form-control" rows="5"></textarea>
  <a href="sendmessage.php?userid=<?php echo $userid; ?>"><p><button class="btn btn-primary" style="width: 150px; float: right; padding: 10px;">Send</button></p></a>
</form>
  <a href="../search/friend_profile.php?userid=<?php echo $userid; ?>"><p><button class="btn btn-primary" style="width: 150px;  padding: 10px;">Back</button></p></a>
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