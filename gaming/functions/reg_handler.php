<?php
//This make sumbits the data into sql database

//The if statement make it, so you have to sumbit login info first to move on or else you go back to previous page
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  //The first "$username" is the name of the column in sql database
  //The "username" in the bracket is the variable in html form "name = username"
  $email = $_POST["email"];
  $password = $_POST["password"];
  $phone = $_POST["phone"];
  $contactinfo = $_POST["contactInfo"];

  try {
    //This links the file. Also require_once sent error if something goes wrong. It makes to run it once. 
    require_once "dbh.php";
    $query = "SELECT email From user_info Where email = :email;"; 
    $stmt = $pdo->prepare($query); 
    $stmt->bindParam(":email", $email); 
    
    $stmt->execute();

    $results = $stmt->fetchAll(PDO::FETCH_DEFAULT);

    foreach ($results as $row){
      if($row["email"] == $email){
        header("Location: ../register.php");
        // maybe add something here to tell user that thing didn't go thorugh.
        die();
      }
    }
    $query = "INSERT INTO contact_info (phone, contactinfo) VALUES (:phone, :contactinfo); 
    INSERT INTO user_info (email, password) VALUES (:email, :password); 
    UPDATE contact_info SET userid = (SELECT userid FROM user_info ORDER BY userid DESC LIMIT 1) WHERE phone = :phone;";
    //First two statements insert data from input fields into sql tables contact_info and user_info, but leave userid in contact_info blank
    //Last statement sets userid from contact_info by reading last query from user_info
    $stmt = $pdo->prepare($query); //$pdo is database connection | This is a prepared statment it allows you repeat a action | 
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password",$password);
    $stmt->bindParam(":contactinfo", $email);
    $stmt->bindParam(":phone",$phone);
    $stmt->execute();
    
    header("Location: ../index.php");
    
    // You could not do this, but it is best practice to do this
    $pdo = null; //Close the conection to the database
    $stmt = null; //Stop the statement 

    die(); //Kills the script 

  } catch (PDOException $e) {
    //terminated the program and alert the user something went wrong
    die("Query failed: " . $e->getMessage());
  }

}
else {
  //This send it back to login page. The ".." goes back one directory to previous folder, since this was in function folder.
  //It goes back to Final folder and finds login.php
  header("Location: ../register.php");
}