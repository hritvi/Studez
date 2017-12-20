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