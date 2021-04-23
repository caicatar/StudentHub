<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StudentHub</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
<style>
body {
background: url("img/bg-city.jpg");
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
#banner:hover {
font-family: meatloaf regular;
font-size: 110px;
color: white;
text-shadow: black 2px 2px;
}
#col1 {
font-family: meatloaf regular;
background-size: 650px 500px;
background-repeat: no-repeat;
height: 500px;
z-index: -1;
}
#loginform {
height: 500px;
z-index: -1;
}
button {
color: black;
height: 50px;
width: 150px;
}
</style>
</head>

<body>
<div class="container">
<div class="jumbotron">
<h1 id="banner" align="center">Welcome to StudentHub</h1>
<div class="col-md-8">
<div id="col1" class="well">
<h1>Meet Students around the world!</h1>
</div>
</div>
<div class="col-md-4">
     <div id="loginform" class="well">
	 <form action="studenthub/login.php" method="post">
          <div class="form-inline">
          <h1 align="center" style="font-size:60pt; font-family: meatloaf regular;">Login</h1>
	      <p style="font-size:11pt;">Username:<br>
		  <input type="text" class="form-control" name="username" placeholder="username" maxlength="15" style="width: 250px;"></p>
	      <p style="font-size:11pt;">Password:<br>
		  <input type="password" class="form-control" name="password" placeholder="password" maxlength="15" style="width: 250px;"></p>
		  </div>
		  <p align="center"><button type="submit" class="btn btn-primary">Login</button></p>
		  </form>
		  <form action="register/user_register.html">
		  <p align="center"><button type="submit" class="btn btn-success">Register</button></p>
		  </form>
		  <p style="font-size:11pt;" align="center"><a href="#">Forgot password? Click here!</a></p>
          </div>
     </div>
</div>
</body>
</html>