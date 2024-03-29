<!DOCTYPE html>
<html lang="en">

<!-- This code below is the connection for style.css. This allow us to create class for style or div. 
//This way we dont have too much function clogging up the file. Also this way the style.css can be import to other file -->
<link rel="stylesheet" href="style.css">

<head>
  <title> Game Page </title>
  <h1 style="text-align:center;"> Game Preference </h1>
</head>

<hr>

<!-- None is a function soon to be made. The none check is going be function that uncheck all the box that group -->

<body style="text-align:center; background-color:#D3D3D3;">
  <h3 style="text-align:center;"> Choose the FPS game you play </h3>
  
  CSGO: <input type="checkbox" id="csgo">  
  Apex Legend: <input type="checkbox" id="apex">
  Team Fortress 2: <input type="checkbox" id="tf2">
  Call of Duty: <input type="checkbox" id="cod">
<!-- id might be able to change to value so I can input it into myphpadmin. The sql form -->
</body>
  
<body style="text-align:center;" style="background-color:#D3D3D3;">

  <h3 style="text-align:center;"> Choose the Survival game you play </h3>
  
  Minecraft: <input type="checkbox" id="mc">
  ARK: Survival Evolved: <input type="checkbox" id="ark">
  Don't Starve: <input type="checkbox" id="starve">
  Rust: <input type="checkbox" id="rust">
  Subnautica: <input type="checkbox" id="sub">
  Dayz: <input type="checkbox" id="dayz">

  <p style="text-align:center;">
    <button onclick="document.location='http://localhost/Final/hub.php'">Submit</button> 
  </p>

</body>

</html>

<!-- body and paragraph debug in future -->