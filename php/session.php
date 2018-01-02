<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'Samdar');
   define('DB_DATABASE', 'studymanage');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   session_start();
   
   $user_check = $_SESSION["name"];
   
   $ses_sql = mysqli_query($db,"SELECT enroll FROM login where enroll = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['enroll'];
   
   if(!isset($_SESSION["name"])){
      header("location:login.php");
   }

   if (!$db) {
    die("Connection failed: " . mysqli_connect_error());}
    $sql="SELECT * FROM info WHERE Enrollno = '$user_check' ";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
    while($rows = $result->fetch_assoc()) {
        $g1 = $rows["course1"];
        $g2 = $rows["course2"];
        $g3 = $rows["course3"];
        $g4 = $rows["course4"];
        $g5 = $rows["course5"];
        $g6 = $rows["course6"];
    }
  } 

?>