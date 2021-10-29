<?php
$con = new mysqli("192.168.100.32", "admin", "password", "fiifi");
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}else{

echo 'Connected to Mysql successfully';
}
?>
<html>
<head>
  <title> Fiifi's website</title>

  <h1> Added changes to test git</h1>
</head>
<h1> Using git and pushing changes</h1>
<img width="1000px" height="500px" src="gitlogo.php"/>
<h2> Adding new branch</h2>

<h3>Test Merging</h3> 
<body style="background-image: url('background.png');">
    <h1>My first Apache</h1>
  <p> Testing devops skills </p>

</html>