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
$course2=test_input($_POST["course2"]);
$course3=test_input($_POST["course3"]);
$course4=test_input($_POST["course4"]);
$course5=test_input($_POST["course5"]);

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

$sql = "INSERT INTO info(Fname, Lname, Branch, Email, Enrollno , password,course1 ,course2 ,course3 ,course4 ,course5)
VALUES ('$fname','$lname','$branch','$email','$enroll','$pass','$course1','$course2','$course3','$course4','$course5')";
$sql2 = "INSERT INTO login(enroll , passwd) VALUES ('$enroll','$pass')";
$sql3="INSERT INTO `$branch`(Enrollno,course1,course2,course3,course4,course5) VALUES ('$enroll','$course1','$course2','$course3','$course4','$course5')";
$sql4 = "INSERT INTO "
if (mysqli_query($conn, $sql)) {
    echo "connected 1";
} else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    echo "try again";
}
if (mysqli_query($conn, $sql2)) {
    echo "connected 2";
} else {
        echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);
    echo "try again";
}
if (mysqli_query($conn, $sql3)) {
    echo "connected 3";
} else {
    echo "Error: " . $sql3 . "<br>" . mysqli_error($conn);
    echo "try again";
}

mysqli_close($conn);

?>