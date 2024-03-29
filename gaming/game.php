<?php 
session_start();
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
</head>

<title> test </title>

<body>  
    <div class = "banner";>
        <div class = "banner_content">
            <div class = "banner_text">
            Welcome, Choose The Game You Play!!!
            </div>
        </div>
    </div>
    <form action="functions/game_handler.php" method="POST" style="text-align:center;">
        <div class="g_container">
            <div class="g_box">
                <div class="g_img" style="background-image: url('img/minecraft.jpg') ;background-repeat: no-repeat; background-size:100% 100%;" > </div>
                <div class="g_text">
                    <input type="checkbox" id="minecraft" name="game[]" value="minecraft">
                    <label forbox="minecraft"> Minecraft </label><br>
                </div>
            </div>
            <div class="g_box">
                <div class="g_img" style="background-image: url('img/gta5.jpg') ;background-repeat: no-repeat; background-size:100% 100%;"> </div>
                <div class="g_text">
                    <input type="checkbox" id="gta" name="game[]" value="gta">
                    <label forbox="gta"> GTA 5</label><br>
                </div>
            </div>
            <div class="g_box">
                <div class="g_img" style="background-image: url('img/lol.jpg') ;background-repeat: no-repeat; background-size:100% 100%;"> </div>
                <div class="g_text">
                    <input type="checkbox" id="lol" name="game[]" value="lol">
                    <label forbox="lol"> League of Legend</label><br>
                </div>
            </div>
            <div class="g_box">
                <div class="g_img" style="background-image: url('img/fortnite.jpg') ;background-repeat: no-repeat; background-size:100% 100%;"> </div>
                <div class="g_text">
                    <input type="checkbox" id="fortnite" name="game[]" value="fortnite">
                    <label forbox="fortnite"> Fortnite</label><br>
                </div>
            </div>
            
        </div>
        <div class="g_container">
            <div class="g_box">
                <div class="g_img" style="background-image: url('img/val.jpg') ;background-repeat: no-repeat; background-size:100% 100%;" > </div>
                <div class="g_text">
                    <input type="checkbox" id="val" name="game[]" value="val">
                    <label forbox="val"> Valorant </label><br>
                </div>
            </div>
            <div class="g_box">
                <div class="g_img" style="background-image: url('img/csgo.jpg') ;background-repeat: no-repeat; background-size:100% 100%;"> </div>
                <div class="g_text">
                    <input type="checkbox" id="csgo" name="game[]" value="csgo">
                    <label forbox="csgo"> CSGO 2</label><br>
                </div>
            </div>
            <div class="g_box">
                <div class="g_img" style="background-image: url('img/wonder.jpg') ;background-repeat: no-repeat; background-size:100% 100%;"> </div>
                <div class="g_text">
                    <input type="checkbox" id="mario" name="game[]" value="mario">
                    <label forbox="mario"> Mario Wonder</label><br>
                </div>
            </div>
            <div class="g_box">
                <div class="g_img" style="background-image: url('img/cod.jpg') ;background-repeat: no-repeat; background-size:100% 100%;"> </div>
                <div class="g_text">
                    <input type="checkbox" id="cod" name="game[]" value="cod">
                    <label forbox="cod"> Call of Duty</label><br>
                </div>
            </div>
        </div>
        <button name="submit" type="submit">Submit</button>
    </form>
</body>
</html>