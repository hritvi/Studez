<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$fname=test_input($_POST["fname"]);
$branch = test_input($_POST["branch"]);
$email=test_input($_POST["email"]);
$enroll = test_input($_POST["enroll"]);
$pass = test_input($_POST["password"]);
$lname=test_input($_POST["lname"]);
$course1 = test_input($_POST["course1"]);
$p1 = test_input($_POST["p1"]);
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
    die("Connection failed: " . mysqli_connect_error());}

$sql = "INSERT INTO info(Fname, Lname, Branch, Email, Enrollno , password,course1 ,proff1 ,course2 ,proff2 ,course3 ,proff3 ,course4 ,proff4 ,course5 ,proff5)
VALUES ('$fname','$lname','$branch','$email','$enroll','$pass','$course1','$p1','$course2','$p2','$course3','$p3','$course4','$p4','$course5','$p5')";
$sql2 = "INSERT INTO login(enroll , passwd) VALUES ('$enroll','$pass')";
if (mysqli_query($conn, $sql)) {
    echo "You are registered successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "register again";
}

if (mysqli_query($conn, $sql2)) {
    echo "You are kjhkj successfully";
} else {
    echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
    echo "hgnk again";
}
mysqli_close($conn);

?>