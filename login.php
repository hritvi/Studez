<html>
<head>
	<title>
		Login
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel=stylesheet type=text/css href="css/login.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php
include("nav1.php");
$fnameErr = $branchErr = $emailErr= $enrollErr = $passwordErr = $courseErr= $prof = "";
$fname = $branch = $email = $enroll = $password = $course= $prof = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["fname"])) {
    $fnameErr = "* First Name is required";
  } else {
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
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
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
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
?>


<div class="container rows">
<div class="col-sm-4"></div>
<div class="col-sm-4">
	<input type=text placeholder="Enter username/Email-Id" name="user" class="form-control"><br>
	<input type="password" name="pass" placeholder="Enter password" class="form-control"><br>
	<div class="btn-group btn-group-justified">
	<div class="btn-group"><button type=submit class="btn btn-primary">Sign In</button></div>
	<div class="btn-group">
	<button type=submit class="btn btn-danger" data-toggle="collapse" data-target="#Signup">Sign Up</button>
	</div>
	</div>
	<br>
	<br>
	<div id="Signup" class="collapse in">
	<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#Step1">Step 1</a></li>
    <li><a data-toggle="tab" href="#Step2">Step 2</a></li>
    </ul><br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <div class="tab-content">
	<div id="Step1" class="tab-pane fade in active">
		<input type=text placeholder="Enter First Name*" name="fname" class="form-control">
		<span class="error"> <?php echo $fnameErr;?></span><br>
		<input type=text placeholder="Enter Last Name" name="lname" class="form-control"><br>
		<select name="branch*" class="form-control">
			<option disabled selected>Select Branch*</option>
			<option>Computer Science and Engineering</option>
			<option>Electronics and Communication Engineering</option>
			<option>Electrical Engineering</option>
		</select><span class="error"> <?php echo $branchErr;?></span><br>
		<input type="text" name="email" placeholder="Email-Id*" class="form-control">
		<span class="error"> <?php echo $emailErr;?></span><br>
		<input type="number" name="enroll" placeholder="Enrollment number*" class="form-control">
		<span class="error"> <?php echo $enrollErr;?></span><br>
		<input type="password" name="password" placeholder="Enter Password*" class="form-control">
		<span class="error"> <?php echo $passwordErr;?></span><br>
		<input type="password" name="password" placeholder="Confirm Password*" class="form-control"><br>
		<center><button class="btn btn-success"><a data-toggle="tab" href="#Step2">Next</a></button></center>
	</div>
	<div id="Step2" class="tab-pane fade">
		<input type=text placeholder="Enter Course Name*" name="course1" class="form-control">
		<input type=text placeholder="Enter Proffesor's Name*" name="p1" class="form-control"><br>
		<input type=text placeholder="Enter Course Name" name="course2" class="form-control">
		<input type=text placeholder="Enter Proffesor's Name" name="p2" class="form-control"><br>
		<input type=text placeholder="Enter Course Name" name="course3" class="form-control">
		<input type=text placeholder="Enter Proffesor's Name" name="p3" class="form-control"><br>
		<input type=text placeholder="Enter Course Name" name="course4" class="form-control">
		<input type=text placeholder="Enter Proffesor's Name" name="p4" class="form-control"><br>
		<input type=text placeholder="Enter Course Name" name="course5" class="form-control">
		<input type=text placeholder="Enter Proffesor's Name" name="p5" class="form-control"><br>
		<center><button class="btn btn-success">Submit</button></center>
	</div>
	</div>
	</form>
</div>
</div>
</div>
</body>