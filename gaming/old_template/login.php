<!DOCTYPE html>
<html lang="en">

<!-- This code below is the connection for style.css. This allow us to create class for style or div. 
This way we dont have too much function clogging up the file. Also this way the style.css can be import to other file. -->
<link rel="stylesheet" href="style.css">

<head>
  <!-- This the name for the tab -->
  <title> Login Page </title>
  <!-- This is just heading -->
  <h1 style="text-align:center;"> Login </h1>
</head>

<!-- The code below is line break -->
<hr>

<!-- Body is the container for all code. You could use mutiple body, but not really needed -->
<body style="background-color:#D3D3D3;">

  <h2 style="text-align:center;"> Sign In </h2>

  <!-- This is the proper way of impelmenting sql collection. I dont know how yet -->
  <p>
    <!-- When sumbiting data we use post method -->
    <form action="functions/login_handler.php" method="POST" style="text-align:center;">
      <!-- label allows to have text next to the input box. id correlates with label. name is the variable name -->
      <label for="username"> Username: </label>
      <input id="email" type="text" name="l_email">
      <label for="u_password"> Password: </label>
      <input id="u_password" type="text" name="l_u_password">
      <button> Submit </button>
    </form>
  </p>

  <!-- //We using class from style.css for the placement of the images -->
  <img src="img/fake_ad1.jpeg" alt="Fake Ad" width="200" class="left_img";>
  <img src="img/fake_ad2.jpg" alt="Fake Ad" width="200" class="right_img";>
  
  <h2 style="text-align:center;"> Register </h2>

  <p style="text-align:center;">
    <button onclick="document.location='http://localhost/Final/register.php'">Registering</button> 
  </p>
  

</body>



</html>