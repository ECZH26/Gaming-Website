<?php
//This make sumbits the data into sql database

//The if statement make it, so you have to sumbit login info first to move on or else you go back to previous page
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //The first "$username" is the name of the column in sql database
  //The "username" in the bracket is the variable in html form "name = username"
  $username = $_POST["username"];
  $password = $_POST["pwd"];

  try {
    //This links the file. Also require_once sent error if something goes wrong. It makes to run it once. 
    require_once "dbh.php";

    /*
      The First method of inserting data
      This the safe way of inserted data. It prevents sql injection.
    */

    $query = "INSERT INTO login_info (username, password) VALUES (:username, :password);"; // This connects with bind data the ":"
    $stmt = $pdo->prepare($query); //$pdo is database connection | This is a prepared statment it allows you repeat a action | 
    $stmt->bindParam(":username", $username); // This the safe method where they bind the values
    $stmt->bindParam(":password", $password);
    $stmt->execute(); // This execute the prepared statment and data already bind so you dont need to insert data

    /*
      The Second method of inserting data
      This the simple way of inserted data and unsafe way to insert data. It is susceptible to sql injection
    */

    // $query = "INSERT INTO login_info (username, password) VALUES (?, ?);"; 
    // $stmt = $pdo->prepare($query); //$pdo is database connection | This is a prepared statment it allows you repeat a action | 
    // $stmt->execute([$username, $password]); // This execute the prepared statment and inserts the data


    // You could not do this, but it is best practice to do this
    $pdo = null; //Close the conection to the database
    $stmt = null; //Stop the statement 

    // Sends you to different location
    header("Location: ../new_login_template.php");

    die(); //Kills the script 

  } catch (PDOException $e) {
    //terminated the program and alert the user something went wrong
    die("Query failed: " . $e->getMessage());
  }

} else {
  //This send it back to login page. The ".." goes back one directory to previous folder, since this was in function folder.
  //It goes back to Final folder and finds login.php
  header("Location: ../login.php");
}