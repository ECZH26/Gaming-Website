<?php 
session_start();
echo $_SESSION['session'];
?>
<!DOCTYPE html>
<html lang="en">

<!-- This code below is the connection for style.css. This allow us to create class for style or div. 
//This way we dont have too much function clogging up the file. Also this way the style.css can be import to other file -->
<link rel="stylesheet" href="style.css">

<head>
  <title> Main Page </title>
  <h1 style="text-align:center;"> Hub </h1>
</head>

<hr>

<body style="background-color:#D3D3D3; text-align:center;">

  <h3 style="text-align:center;"> Choose the one the option redirect you </h3>

  <p style="text-align:center;">
    <button onclick="document.location='http://localhost/Final/game.php'">Game Page</button> 
  </p>

  <p style="text-align:center;">
    <button onclick="document.location='http://localhost/Final/social.php'">Social Page</button> 
  </p>

</body>

</html>