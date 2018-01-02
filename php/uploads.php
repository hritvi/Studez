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
      <title>Uplaod a File</title>
   </head>
   <body>
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="Filedata" />
         <select name="group" required>
            <option selected disabled>Select the mode</option>
            <option><?php echo $g1; ?></option>
            <option><?php echo $g2; ?></option>
            <option><?php echo $g3; ?></option>
            <option><?php echo $g4; ?></option>
            <option><?php echo $g5; ?></option>
            <option><?php echo $g6; ?></option>
            <option value="<?php echo $user_check ; ?>">Save privately</option>
         </select>
         <input type="submit"/>
      </form>
      
   </body>
</html>
