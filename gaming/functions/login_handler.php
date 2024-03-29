<?php
session_start();
//This make sumbits the data into sql database

//The if statement make it, so you have to sumbit login info first to move on or else you go back to previous page
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $l_email = $_POST["l_email"];
  $l_u_password = $_POST["l_u_password"];

  try {
    require_once "dbh.php";

    $query = "SELECT password From user_info Where email = :l_email;"; 
    $stmt = $pdo->prepare($query); 
    $stmt->bindParam(":l_email", $l_email); 
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_DEFAULT);


    foreach ($results as $row){
        if($row["password"] == $l_u_password){
            $_SESSION["session"] = intval(1);
            header("Location: ../hub.php");
            die();
        }
        else{
            header("Location: ../index.php");
            die();
        }
    }
    
    $pdo = null;
    $stmt = null;

    header("Location: ../index.php");
   
  } catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
  }

} else {
  //This send it back to login page. The ".." goes back one directory to previous folder, since this was in function folder.
  //It goes back to Final folder and finds login.php
  header("Location: ../login.php");
}