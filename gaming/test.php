<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Player</title>
    </head>
    <body>


        <from class = "searchfrom" action="search.php" method="post">
            <label> for="search" email: </label>
            <input id="search" type="text" name="usersearch"
            placeholder="Search...">
            <button>Search</button>
        </form>

        <h3>Results</h3> 
        <?php
        if(empty($result)){
            echo "<div>";
            echo "<p> Tgere was no result! </p>";
            echo "</div>";
        }
        else{
            foreach ($result as $row){
                echo htmlspecialchars($row["game"]);
            }
        }
        ?>       
    </body>
</html>