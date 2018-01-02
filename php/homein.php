<?php
   include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../css/home.css">
<body>
<!--Navbar-->
<nav class="navbar navbar-inverse navbar-fixed-top" id="myNavbar">
  <div class="container-fluid">
    <div class="navbar-header"> 
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">Studez</a>
    </div>
    <div class="collapse navbar-collapse" id="nav">
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Group <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo 'groups/'.$g1.'.php'; ?>"><?php echo $g1; ?></a></li>
          <li><a href="<?php echo 'groups/'.$g2.'.php'; ?>"><?php echo $g2; ?></a></li>
          <li><a href="<?php echo 'groups/'.$g3.'.php'; ?>"><?php echo $g3; ?></a></li>
          <li><a href="<?php echo 'groups/'.$g4.'.php'; ?>"><?php echo $g4; ?></a></li>
          <li><a href="<?php echo 'groups/'.$g5.'.php'; ?>"><?php echo $g5; ?></a></li>
          <li><a href="<?php echo 'groups/'.$g6.'.php'; ?>"><?php echo $g6; ?></a></li>
        </ul>
      </li>
      <li><a href="#myfiles">Files</a></li>
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
<br><br><br>
<span class="group"> Your Groups </span><span class="add"><button class="btn btn-primary">Add Group</button><button class="btn btn-danger">Remove from a group</button></span><hr width="1px">
<div>
  <a href="<?php echo 'groups/'.$g1.'.php'; ?>">
    <span class="display-groups">
      <?php echo $g1; ?>
    </span>
  </a>
  <a href="<?php echo 'groups/'.$g2.'.php'; ?>">
    <span class="display-groups">
      <?php echo $g2; ?>
    </span>
  </a>
  <a href="<?php echo 'groups/'.$g3.'.php'; ?>">
    <span class="display-groups">
      <?php echo $g3; ?>
    </span>
  </a>
  <a href="<?php echo 'groups/'.$g4.'.php'; ?>">
    <span class="display-groups">
      <?php echo $g4; ?>
    </span>
  </a>
  <a href="<?php echo 'groups/'.$g5.'.php'; ?>">
    <span class="display-groups">
      <?php echo $g5; ?>
    </span>
  </a>
  <a href="<?php echo 'groups/'.$g6.'.php'; ?>">
    <span class="display-groups">
      <?php echo $g6; ?>
    </span>
  </a>
</div>
<br><hr width="500px">
<div id="myfiles">
<span class="group"> Your Files </span><span class="add"><a href="uploads.php"><button class="btn btn-primary">Add a file</button></a><button class="btn btn-danger">Remove from a group</button></span><hr width="1px">
<?php
$s=" SELECT files FROM `$_SESSION[name]` ";
    $result1 = $db->query($s);
    if ($result1->num_rows > 0) {
    // output data of each row
    while($row2 = $result1->fetch_assoc()) {
        $file = $row2["files"];
        if($file==' ') continue;
?>

      <span class="file"> 
        <iframe class= "frame" src="<?php echo '../uploads/'.$file ; ?>"></iframe>
            <div class=middle>
              <a href="<?php echo '../uploads/'.$file ; ?>" download><button class="btn btn-primary">
              <?php echo $file ; ?> <span class="glyphicon glyphicon-download-alt"></span>
              </button></a>
            </div>
      </span>
<?php 
    }
  } 
  else {
    echo "0 results";
}
?>
</div>
</body>
</head>
</html>
