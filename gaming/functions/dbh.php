<?php
//dbh = database handler
//This php file is used as a connecter between the sql database(phpmyadmin)

// Creating variables from the database's information in phpmyadmin to use when creating connection.
// mysql is database driver, host the location which is local host in our case, 
// and dbname is the database name
// These are all the value of the database we are going use to connect it

$dsn = "mysql:host=localhost;dbname=gameconnect";
$dbusername = "root";
$dbpassword = "";



try {
  // pdo = php database object
  // This creates a connection between phpmyadmin using the info above. 
  // The connection is set as object, so you can call it.
  $pdo = new PDO($dsn, $dbusername, $dbpassword);
  // Sets the error mode and gets the error mode 
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  //Alert the us the something failed
  echo "Connection failed: " . $e->getMessage();
}
