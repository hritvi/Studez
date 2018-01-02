<?php
session_start();
?>
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
$course6=test_input($_POST["course6"]);

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
$s="CREATE TABLE `$enroll` ( files VARCHAR (100) , enrollno INT (11) ) ";
$sql = "INSERT INTO info(Fname, Lname, Branch, Email, Enrollno , password,course1 ,course2 ,course3 ,course4 ,course5 ,course6)
VALUES ('$fname','$lname','$branch','$email','$enroll','$pass','$course1','$course2','$course3','$course4','$course5','$course6')";
$sql2 = "INSERT INTO login(enroll , passwd) VALUES ('$enroll','$pass')";
$sql3=" INSERT INTO `$branch`(Enrollno,course1,course2,course3,course4,course5,course6) VALUES ('$enroll','$course1','$course2','$course3','$course4','$course5','$course6')";
$sql4="INSERT INTO `$course1`(files , enrollno) VALUES (' ' ,'$enroll')";
$sql5="INSERT INTO `$course2`(files , enrollno) VALUES (' ' ,'$enroll')";
$sql6="INSERT INTO `$course3`(files , enrollno) VALUES (' ' ,'$enroll')";
$sql7="INSERT INTO `$course4`(files , enrollno) VALUES (' ' ,'$enroll')";
$sql8="INSERT INTO `$course5`(files , enrollno) VALUES (' ' ,'$enroll')";
$sql9="INSERT INTO `$course6`(files , enrollno) VALUES (' ' ,'$enroll')";
$error="";
if (mysqli_query($conn, $s)) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . mysqli_error($conn);
}
if (mysqli_query($conn, $sql)) {
    $_SESSION["name"] = $enroll;
    header("location:homein.php");
} else {
    $error="There is some problem in data. \n This may be due to incorrect enrollment number or you may have already registered. ";
}
if (mysqli_query($conn, $sql2)) {
    header("location:homein.php");
} else {
    $error="There is some problem in data. \n This may be due to incorrect enrollment number<br> or you may have already registered. ";
}
if (mysqli_query($conn, $sql3)) {
    header("location:homein.php");
} else {
    $error="There is some problem in data. \n This may be due to incorrect enrollment number or you may have already registered. ";
}
if (mysqli_query($conn, $sql4)) {
    header("location:homein.php");
} else {
    
}
if (mysqli_query($conn, $sql5)) {
    header("location:homein.php");
} else {

}
if (mysqli_query($conn, $sql6)) {
    header("location:homein.php");
} else {
 
}
if (mysqli_query($conn, $sql7)) {
    header("location:homein.php");
} else {

}
if (mysqli_query($conn, $sql8)) {
    header("location:homein.php");
} else {

}
if (mysqli_query($conn, $sql9)) {
    header("location:homein.php");
} else {

}
mysqli_close($conn);

?>
<html>
  <head>
    <title>
      Oops!! Something went wrong
    </title>
    <style type="text/css">
      body{
        background-image: url('../images/e2.png');
        background-size: cover;
        background-repeat: no-repeat;
      }
      .error{
        position:absolute;
        top:40%;
        left: 40%;
        right:45%;
        transform:translate(-50%,-50%);
        -ms-transform:translate(-50%,-50%);
        font-size: 30px;
        color:red;
        font-weight: bold;
}
    </style>
</head>
<body>
<?php echo "<span class=error>".$error."</span>";?>
</body>
</html>