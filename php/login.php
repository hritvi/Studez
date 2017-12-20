<?php
$fnameErr = $branchErr = $emailErr= $enrollErr = $passwordErr = $courseErr= $prof = "";
$fname = $branch = $email = $enroll = $password = $course= $prof = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "* First Name is required";
  } else {
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$_POST["fname"])) {
      $fnameErr = "* Only letters and white space allowed"; 
    }
    else {
      $fname=test_input($_POST["fname"]);
    }
  }

  if (empty($_POST["branch"])) {
    $branchErr = "* Branch is required";
  } else {
    $branch = test_input($_POST["branch"]);
  }

  if (empty($_POST["email"])) {
    $emailErr = "* Email is required";
  } else {
    if (!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL)) {
      $emailErr = "* Invalid email format"; 
    }
    else{
      $email=test_input($_POST["email"]);
    }
  }

  if (empty($_POST["enroll"])) {
    $enrollErr = "* Enrollment number is required";
  } else {
    $enroll = test_input($_POST["enroll"]);
  }

  if (empty($_POST["password"])) {
    $passwordErr = "* Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["course"])) {
    $courseErr = "* At least on course is required";
  } else {
    $course = test_input($_POST["course"]);
  }

  if (empty($_POST["prof"])) {
    $profErr = "* Proffessor's name is required";
  } else {
    $prof = test_input($_POST["p1"]);
  }
 }

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$lname=test_input($_POST["lname"]);
$course2=test_input($_POST["course2"]);
$p2=test_input($_POST["p2"]);
$course3=test_input($_POST["course3"]);
$p3=test_input($_POST["p3"]);
$course4=test_input($_POST["course4"]);
$p4=test_input($_POST["p4"]);
$course5=test_input($_POST["course5"]);
$p5=test_input($_POST["p5"]);

//storing data
$servername = "localhost";
$username = "root";
$password = "Samdar";
$dbname = "studymanage";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());

$sql = "INSERT INTO info(Fname, Lname, Branch, Email, Enrollno , password,course1 ,proff1 ,course2 ,proff2 ,course3 ,proff3 ,course4 ,proff4 ,course5 ,proff5)
VALUES ('$fname','$lname','$branch','$email','$enroll','$pass','$course1','$p1','$course2','$p2','$course3','$p3','$course4','$p4','$course5','$p5')";

$sql2 = "INSERT INTO login(enroll , passwd) VALUES ('$enroll' , '$pass')";

if (mysqli_query($conn, $sql)) {
    echo "You are registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "register again";
}

if (mysqli_query($conn, $sql2)) {
    echo "You are LOOGED IN successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "DO again";
}

mysqli_close($conn);
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
<body>
<nav class="navbar">
<div class="navbar-header">
<a class="navbar-brand" href="#">WebSiteName</a>
</div>
</nav>

<div class="container rows">
<div class="col-sm-4"></div>
<div class="col-sm-4">
<form method="post" action="logindb.php">
	<input type=text placeholder="Enter Enrollment no." name="usr" class="form-control" required><br>
	<input type="password" name="pwd" placeholder="Enter password" class="form-control" required><br>
  <center><button type=submit class="btn-lg btn-primary">Sign In</button></center></form>
	<center><button class="btn-lg btn-danger" data-toggle="collapse" data-target="#Signup">Or Register Now</button></center>
	<br>
	<br>

  <!--REGISTERING -->
	<div id="Signup" class="collapse in">
	<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#Step1">Step 1</a></li>
    <li><a data-toggle="tab" href="#Step2">Step 2</a></li>
    </ul><br>
    <form method="post" action="">
    <div class="tab-content">
	<div id="Step1" class="tab-pane fade in active">
		<input type=text placeholder="Enter First Name*" name="fname" class="form-control" >
		<span class="error"> <?php echo $fnameErr;?></span><br>
		<input type=text placeholder="Enter Last Name" name="lname" class="form-control"><br>
		<select name="branch" class="form-control"  >
			<option disabled selected>Select Branch*</option>
			<option>Computer Science and Engineering</option>
			<option>Electronics and Communication Engineering</option>
			<option>Electrical Engineering</option>
		</select><span class="error"> <?php echo $branchErr;?></span><br>
		<input type="text" name="email" placeholder="Email-Id*" class="form-control" >
		<span class="error"> <?php echo $emailErr;?></span><br>
		<input type="number" name="enroll" placeholder="Enrollment number*" class="form-control" >
		<span class="error"> <?php echo $enrollErr;?></span><br>
		<input type="password" name="password" placeholder="Enter Password*" class="form-control" >
		<span class="error"> <?php echo $passwordErr;?></span><br>
		<input type="password" name="password" placeholder="Confirm Password*" class="form-control" ><br>
		<center><a data-toggle="tab" href="#Step2"><button class="btn btn-primary">
    Next<span class="glyphicon glyphicon-chevron-right"></span></button></a></center>
	</div>
	<div id="Step2" class="tab-pane fade">
		<input type=text placeholder="Enter Course Name*" name="course1" class="form-control" >
		<input type=text placeholder="Enter Proffesor's Name*" name="p1" class="form-control" ><br>
		<input type=text placeholder="Enter Course Name" name="course2" class="form-control">
		<input type=text placeholder="Enter Proffesor's Name" name="p2" class="form-control"><br>
		<input type=text placeholder="Enter Course Name" name="course3" class="form-control">
		<input type=text placeholder="Enter Proffesor's Name" name="p3" class="form-control"><br>
		<input type=text placeholder="Enter Course Name" name="course4" class="form-control">
		<input type=text placeholder="Enter Proffesor's Name" name="p4" class="form-control"><br>
		<input type=text placeholder="Enter Course Name" name="course5" class="form-control">
		<input type=text placeholder="Enter Proffesor's Name" name="p5" class="form-control"><br>
		<center><a data-toggle="tab" href="#Step1"><button class="btn btn-primary">
    <span class="glyphicon glyphicon-chevron-left"></span>Previous</button></a>
   <button class="btn btn-success">Submit</button></center>
	</div>
	</div>
	</form>
</div>
</div>
</div>
</body>