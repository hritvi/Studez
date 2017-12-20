<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'Samdar');
   define('DB_DATABASE', 'studymanage');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = mysqli_real_escape_string($db,$_POST['usr']);
      $mypassword = mysqli_real_escape_string($db,$_POST['pwd']); 
      
      $sql = "SELECT * FROM login WHERE enroll = '$myusername' and passwd = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $count = mysqli_num_rows($result);
    
      if($count == 1) {
         header("location: php/homein.php");
      }else {
         $error="Invalid username or password";
      }
   }
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
<link rel="stylesheet" href="css/home.css">
<body>
<!--Navbar-->
<nav class="navbar navbar-fixed-top" id="myNavbar">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>  
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="nav">
    <span class="nav navbar-nav"><a href ="php/login.php"><button class="btn btn-danger"><span class="glyphicon glyphicon-education"></span>Register Now</button></a></span>
    <form action="" method="post" class="navbar-form navbar-right">
      <input type=text placeholder="Enter enrollment no." name=usr class="form-control" required>
	  <input type=password placeholder="Enter password" name=pwd class="form-control" required>
	  <button class="btn btn-success"><span class="glyphicon glyphicon-log-in"></span> Sign In</button>
    <span style = "font-size:15px; color:#cc0000; margin-top:10px"><?php echo $error; ?></span>
    </form>
    
      
    </div>
  </div>
</nav>

<!--First Parallax-->
<div class="bgimg-1" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
		MY WEBSITE LOGO
  </div>
</div>

<!-- Container (About Section) -->
<div class="block">
  <h3 class="center">ABOUT ME</h3>
  <p class="center"><em>I love photography</em></p>
  <p>We have created a fictional "personal" website/blog, and our fictional character is a hobby photographer. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
    qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
</div>

<!-- Second Parallax Image-->
<div class="bgimg-2">
</div>

<!--Running groups-->
<div class="block">
<h3 class="center">Here are some of the running groups</h3>
<div class="center">
<img src="images/c1.jpg" class="grps" alt="The mist over the mountains">
<img src="images/c1.jpg" class="grps" alt="The mist over the mountains">
<img src="images/c1.jpg" class="grps" alt="The mist over the mountains">
<img src="images/c1.jpg" class="grps" alt="The mist over the mountains">
</div>
</div>
<!-- Third Parallax Image-->
<div class="bgimg-3">
</div>

<div class="block">
<h2 class="center text">To join in any group register now </h2>
<div class="container rows">
<div class="col-sm-4"></div>
<div class="col-sm-4">
  <form method="post" action="">
  <input type=text placeholder="Enter enrollment no." name="usr" class="form-control" required><br>
  <input type="password" name="pwd" placeholder="Enter password" class="form-control" required><br>
  <center><button type=submit class="btn-lg btn-primary">Sign In</button></center></form>
  <center><div><span style = "font-size:15px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div></center><br>
  <center><a href ="php/login.php"><button class="btn-lg btn-danger" data-toggle="collapse" data-target="#Signup">Or Register Now</button></a></center>
</div>
</div>
</div>
<!--Footer-->
<footer class="center foot">
  <button class="btn-lg"><a href="#home"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a></button>
  <div class="items">
    <i class="fa fa-facebook-official"></i>
    <i class="fa fa-instagram hover"></i>
    <i class="fa fa-snapchat hover"></i>
    <i class="fa fa-pinterest-p hover"></i>
    <i class="fa fa-twitter hover"></i>
    <i class="fa fa-linkedin hover"></i>
  </div>
  <h4>&copy; 2017 by WebsiteName.</h4>
</footer>

<script>
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "navbar navbar-fixed-top w3-white" ;
    }
    else{
    	navbar.className = navbar.className.replace("w3-white", "");
    }
}
</script>

</body>
</head>
</html>
