<?php
//phpinfo();
$conn = new mysqli("172.28.128.4", "admin", "Devops1!!", "fiifi");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
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