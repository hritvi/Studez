<?php
	$servername = "localhost";
	$username = "root";
	$password = "Samdar";
	$dbname = "studymanage";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
   if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());}
    $sql="SELECT files FROM `EEN-102`";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $file = $row["files"];
        if($file==' ') continue;
        ?>
        <html>
		<head><title>EEN-102</title>
		<link rel="stylesheet" href="grps.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<style type="text/css">
		#myiframe {width:300px; height:300px; background-color: pink; margin:5px; padding: 5px;} 
		</style>
		</head>
		<body>
		<span class="file"> 
        <iframe class= "frame" src="<?php echo '../../uploads/'.$file ; ?>"></iframe>
            <div class=middle>
              <a href="<?php echo '../../uploads/'.$file ; ?>" download><button class="btn btn-primary">
              <?php echo $file ; ?> <span class="glyphicon glyphicon-download-alt"></span>
              </button></a>
            </div>
      </span>
		</body>
		</html>

        <?php 
    }
	} 
	else {
    echo "0 results";
}

$conn->close();
?>
