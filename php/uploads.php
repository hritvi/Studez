<?php
   if(isset($_FILES['Filedata'])){
      $file_name = $_FILES['Filedata']['name'];
      $file_size =$_FILES['Filedata']['size'];
      $file_tmp =$_FILES['Filedata']['tmp_name'];
      $file_type=$_FILES['Filedata']['type'];
      $exploded = explode('.',$_FILES['Filedata']['name']);
      $file_ext=strtolower(end($exploded));
      
      if($file_size < 2097152){
         move_uploaded_file($file_tmp,"../uploads/".$file_name);
         echo "Success";
      }
      else{
         echo "file size not accepted";
      }
   }
?>
<html>
   <body>
      
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="Filedata" />
         <input type="submit"/>
      </form>
      
   </body>
</html>