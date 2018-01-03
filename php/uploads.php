<?php
   include('session.php');
?>
<?php
   $servername = "localhost";
   $username = "root";
   $password = "Samdar";
   $dbname = "studymanage";

   if(isset($_FILES['Filedata'])){
      $file_name = $_FILES['Filedata']['name'];
      $file_size =$_FILES['Filedata']['size'];
      $file_tmp =$_FILES['Filedata']['tmp_name'];
      $file_type=$_FILES['Filedata']['type'];
      $exploded = explode('.',$_FILES['Filedata']['name']);
      $file_ext=strtolower(end($exploded));
      $tablename=$_POST["group"];
      $filename= "../uploads/".$file_name;
      if($file_size < 300097152){
         
         if(file_exists($filename)){ echo "File name already exists. Please rename your file and then upload.";}
         else{
         move_uploaded_file($file_tmp,"../uploads/".$file_name);
         echo "Success";
         if (!$db) {
            die("Connection failed: " . mysqli_connect_error());}
         $sql="INSERT INTO `$tablename`(enrollno , files) VALUES ('0' , '$file_name')";
         if (mysqli_query($db, $sql)) {
            echo "File uploaded successfully";
         } 
         else {
            echo "Error: " . $sql . "<br>" . $db->error;;
         }
         }

      }
      else{
         echo "file size not accepted";
      }
// Check connection
}
?>
<html>
   <head>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="../css/uploads.css">
      <title>Uplaod a File</title>
   </head>
   <body>
   <nav class="navbar navbar-inverse" id="myNavbar">
  <div class="container-fluid">
    <div class="navbar-header"> 
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand " href="homein.php">Studez</a>
    </div>
    <div class="collapse navbar-collapse" id="nav">
    <ul class="nav navbar-nav">
      <li class="active "><a href="homein.php">Home</a></li>
      <li class="dropdown "><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Group <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo 'groups/'.$g1.'.php'; ?>"><?php echo $g1; ?></a></li>
          <li><a href="<?php echo 'groups/'.$g2.'.php'; ?>"><?php echo $g2; ?></a></li>
          <li><a href="<?php echo 'groups/'.$g3.'.php'; ?>"><?php echo $g3; ?></a></li>
          <li><a href="<?php echo 'groups/'.$g4.'.php'; ?>"><?php echo $g4; ?></a></li>
          <li><a href="<?php echo 'groups/'.$g5.'.php'; ?>"><?php echo $g5; ?></a></li>
          <li><a href="<?php echo 'groups/'.$g6.'.php'; ?>"><?php echo $g6; ?></a></li>
        </ul>
      </li>
      <li ><a href="homein.php#myfiles">Files</a></li>
    </ul>
    <div class="navbar-form navbar-right">
      <span class="wel">Welcome <?php echo $_SESSION["name"]; ?> </span>
      <span class="dropdown">
      <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
      <span class="glyphicon glyphicon-plus"></span></button>
      <ul class="dropdown-menu">
      <li><a href="#">Add a group</a></li>
      <li><a href="uploads.php">Add a file</a></li>
      </ul>
     </span>
      <span class="dropdown">
      <button class="btn dropdown-toggle" type="button" data-toggle="dropdown">
      <span class="glyphicon glyphicon-cog"></span></button>
      <ul class="dropdown-menu">
      <li><a href="#">Your Profile</a></li>
      <li><a href="#">lorem ipsum</a></li>
      <li><a href="#">lorem ipsum</a></li>
      </ul>
     </span>
      <a href="logout.php"><button class="btn btn-danger"><span class="glyphicon glyphicon-log-out"></span></button></a>
    </div>
    </div>
  </div>
</nav>
<center>
   <h2 class="hbh">Select files to upload either privately or in a group of students sharing the same course</h2>
      <h3><form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="Filedata" /><br>
         <select name="group" required >
            <option selected disabled>Select the mode</option>
            <option><?php echo $g1; ?></option>
            <option><?php echo $g2; ?></option>
            <option><?php echo $g3; ?></option>
            <option><?php echo $g4; ?></option>
            <option><?php echo $g5; ?></option>
            <option><?php echo $g6; ?></option>
            <option value="<?php echo $user_check ; ?>">Save privately</option>
         </select><br><br>
         <input type="submit" value="Upload" />
      </form></h3><br>
      <h4 class="hbh">*Files can be uploaded in any format but file size should be less than 250 MB </h4>
</center>    
   </body>
</html>
