<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/home.css">
<body>
<!--Navbar-->
<nav class="navbar navbar-inverse navbar-fixed-top" id="myNavbar">
  <div class="container-fluid">
    <div class="navbar-header"> 
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">Studez</a>
    </div>
    <div class="collapse navbar-collapse" id="nav">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Group <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Group 1</a></li>
          <li><a href="#">Group 2</a></li>
          <li><a href="#">Group 3</a></li>
          <li><a href="#">Group 4</a></li>
          <li><a href="#">Group 5</a></li>
        </ul>
      </li>
      <li><a href="#">Folders</a></li>
      <li><a href="#">Files</a></li>
    </ul>
    <div class="navbar-form navbar-right">
     <span class="wel">Welcome <?php echo $_SESSION["name"]; ?> </span>
      <span class="dropdown">
  		<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
  		<span class="glyphicon glyphicon-plus"></span></button>
  		<ul class="dropdown-menu">
    	<li><a href="#">Add a group</a></li>
    	<li><a href="#">Add a folder</a></li>
    	<li><a href="#">Add a file</a></li>
    	<li><a href="">Get Shareable link</a></li>
	  	</ul>
	  </span>
      <span class="dropdown">
  		<button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
  		<span class="glyphicon glyphicon-cog"></span></button>
  		<ul class="dropdown-menu">
    	<li><a href="#">Your Profile</a></li>
    	<li><a href="#">ffk</a></li>
    	<li><a href="#">jhj</a></li>
	  	</ul>
	  </span>
      <a href="logout.php"><button class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span></button></a>
    </div>
    </div>
  </div>
</nav>
<br><br><br>
<div class="center"> Your Groups </div>

</body>
</head>
</html>
