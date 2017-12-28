<?php
session_start();
?>
<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'Samdar');
   define('DB_DATABASE', 'studymanage');
   $error="";
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      $myusername = mysqli_real_escape_string($db,$_POST['usr']);
      $mypassword = mysqli_real_escape_string($db,$_POST['pwd']); 
      
      $sql = "SELECT * FROM info WHERE Enrollno = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $count = mysqli_num_rows($result);
      if($count == 1) {
         $_SESSION["name"] = $myusername;
         header("location:homein.php");
      }else {
         $error="Invalid username or password";
      }
   }
?>
<html>
<head>
	<title>
		Login
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel=stylesheet type=text/css href="../css/login.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body vlink="white" link="white">
<nav class="navbar">
<div class="navbar-header navbar-brand">
Studez
</div>
</nav>

<div class="container rows">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<form method="post" action="">
	<input type=number placeholder="Enter Enrollment no." name="usr" class="form-control" required><br>
	<input type="password" name="pwd" placeholder="Enter password" class="form-control" required><br>
  <center><button type=submit class="btn-lg btn-primary">Sign In</button><br><span class="error"><?php echo $error; ?></span></center></form>
	<center><button class="btn-lg btn-danger" data-toggle="collapse" data-target="#Signup">Or Register Now</button></center>
	<br>
	<br>

  <!--REGISTERING -->
	<div id="Signup" class="collapse in">
	<ul class="nav nav-tabs">
    <li class="active" id="s1"><a data-toggle="tab" href="#Step1" class="tab">Step 1</a></li>
    <li class="" id="s2"><a data-toggle="tab" href="#Step2" class="tab">Step 2</a></li>
    </ul><br>
    <form method="post" action="register.php">
    <div class="tab-content">
	<div id="Step1" class="tab-pane fade in active">
		<input type=text placeholder="Enter First Name*" name="fname" class="form-control" required>
		<br>
		<input type=text placeholder="Enter Last Name" name="lname" class="form-control"><br>
		<select name="branch" class="form-control" required>
			<option disabled selected>Select Branch*</option>
			<option>Computer Science and Engineering</option>
			<option>Electronics and Communication Engineering</option>
			<option>Electrical Engineering</option>
		</select><br>
		<input type="text" name="email" placeholder="Email-Id*" class="form-control" required><br>
		<input type="number" name="enroll" placeholder="Enrollment number*" class="form-control"  required><br>
		<input type="password" name="password" placeholder="Enter Password*" class="form-control"  required><br>
		<center><a data-toggle="tab" href="#Step2" id="next"><button class="btn btn-primary">
    Next<span class="glyphicon glyphicon-chevron-right"></span></button></a></center>
	</div>
	<div id="Step2" class="tab-pane fade">
		<select name="course1" class="form-control"><br>
      <option disabled selected>Enter Course Code</option>
      <option>PHN-004</option>
      <option>PHN-006</option>
    </select><br>
    <select name="course2" class="form-control"><br>
      <option disabled selected>Enter Course Code</option>
      <option>MAN-002</option>
      <option>MAN-010</option>
    </select><br>
    <select name="course3" class="form-control"><br>
      <option disabled selected>Enter Course Code</option>
      <option>CSN-106</option>
      <option>ECN-142</option>
      <option>EEN-102</option>
    </select><br>
    <select name="course4" class="form-control"><br>
      <option disabled selected>Enter Course Code</option>
      <option>CSN-102</option>
      <option>EEN-104</option>
    </select><br>
    <select name="course5" class="form-control"><br>
      <option disabled selected>Enter Course Code</option>
      <option>ECN-104</option>
      <option>EEN-106</option>
    </select><br>
    <select name="course6" class="form-control"><br>
      <option disabled selected>Enter Course Code</option>
      <option>MIN-106</option>
      <option>ECN-102</option>
      <option>EEN-112</option>
    </select><br>
		<center><a data-toggle="tab" href="#Step1"><button class="btn btn-primary">
    <span class="glyphicon glyphicon-chevron-left"></span>Previous</button></a>
   <button class="btn btn-success">Submit</button></center>
	</div>
	</div>
	</form>
</div>
</div>
</div>
<script type="text/javascript">
    var next = document.getElementById("next");
    var s1 = document.getElementById("s1");
    var s2 = document.getElementById("s2");
    function change(){
      s1.classname=s1.classname.replace("active","");
      s2.classname="active";
    }
    next.addEventListener('click', change);

    // Dropdown
function dropFunction() {
    var x = document.getElementById("myDIV");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// Filter
function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDIV");
    a = div.getElementsByTagName("a");
    for (i = 0; i < a.length; i++) {
        if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}
</script>
</body>
</html>