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
         header("location: homein.php");
      }else {
         echo "Your Login Name or Password is invalid<BR>";
         echo "<a href=login.php><button>Try Again</button></a>";
      }
   }
?>