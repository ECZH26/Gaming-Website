<!DOCTYPE HTML>
<html lang="en">

<head>
  <title> Login </title>
  <!-- This one is responsible for the icon on the tab  -->
  <link rel="icon" type="x-icon" href="img/logo4.png">
</head>

<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Vina+Sans&display=swap" rel="stylesheet">

<style>



</style>

<body>
<!-- The logo of our website in the center -->
<img src="img/logo4.png" alt="logo" width="200" class="center";>

<!-- I created a box that is 66% of the screen on the left. -->
<div class="left_66p">
  <div class="login_box">
    <div style="padding: 0px 0px 0px 8px;">
      <h1><u>Login</u></h1> 
	    <form action="functions/login_handler.php" method="POST" style="text-align:center;">
      <div style="padding-top:30px;"> <input type="email" name="l_email" placeholder="Email" class="login_text_box"> </div>
      <div style="padding-top:10px;"> <input type="password" name="l_u_password" placeholder="Password" class="login_text_box"> </div>
      <div style="padding-top:10px;"> <button class = login_button> Login </button> </div>
    </form>
    </div>
  </div>
</div>

<!-- I created a box that is 34 of the screen on the right -->
<div style="text-align:center;" class="right_33p">
  <!-- The register box that contains all the text and button -->
  <div class="register_box">
    <!-- Created some distance between the text and top of the box-->
    <div style="padding-top:70px;">
      <!-- Created some distance between Register line and the text -->
      <div style="padding-bottom:10px;"> 
        <h1><u>Register</u></h1> 
      </div>
      <p><h3>If you don't have an account, complete your registration now to unlock exclusive benefits.</h3></p>
      <!-- Created some distance between the text and button-->
      <div style="padding-top:30px;">
        <!-- This is the button that redirect you the regsiter page -->
        <button class="login_button" onclick="document.location='http://localhost/Final/register.php'">Click Here</button> 
      </div>
    <div>
  </div>
</div>




</body>


</html>