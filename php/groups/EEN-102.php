<?php
	$servername = "localhost";
	$username = "root";
	$password = "Samdar";
	$dbname = "studymanage";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
   if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());}
    $sql="SELECT files FROM EEN-102";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $file = $row["files"];?>
        <html>
		<head><title>EEN-102</title>
		<style type="text/css">
		#myiframe {width:300px; height:300px; background-color: pink; margin:5px; padding: 5px;} 
		</style>
		</head>
		<body>
		<iframe src="<?php echo '../../uploads/'.$file ; ?>"></iframe>
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
