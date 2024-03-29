<?php
session_start();
//This make sumbits the data into sql database

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  try {
    require_once "dbh.php";
    
    $game = $_POST['game'];
    $id = $_SESSION["session"];

    // Another way of doing inserting data safe way
  
    foreach ($game as $item) {
      $query = "INSERT INTO user_game_table(userid, game) VALUES (?, ?)";
      $stmt = $pdo->prepare($query); 
      if ($stmt->execute([$id, $item])) {
          header("Location: ../hub.php");
      } else {
          header("Location: ../test.php");
      }
  }
    
   
  } catch (PDOException $e) {
    die("Query failed: " . $e->getMessage());
  }

} else {

  header("Location: ../login.php");
}