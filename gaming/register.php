<!DOCTYPE html>
<html lang="en">

<!-- This code below is the connection for style.css. This allow us to create class for style or div. 
This way we dont have too much function clogging up the file. Also this way the style.css can be import to other file -->
<link rel="stylesheet" href="style.css">

<head>
  <title> Register Page </title>
  <h1 style="text-align:center;"> Register </h1>
</head>

<hr>



<body style="background-color:#D3D3D3;">

  <p>
    <!-- I changed every input to text, since some has speical features and we need it -->
    <form action="functions/reg_handler.php" method="POST" style="text-align:center;" >
      <h2 style="text-align:center;"> Sign Up </h2>
      <p>
      <input type="email" name="email" placeholder="Email">
      <input type="text" name="password" placeholder="Password">
      </p>
      <h2 style="text-align:center;"> Information </h2>
      <p>
      <input type="text" name="phone" placeholder="Phone Number">
      <input type="text" name="contactInfo" placeholder="Contact Info">
      <button> Submit </button>
    </form>
  </p>

</body>

</html>