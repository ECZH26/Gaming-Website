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
            Welcome, Choose The Social Media You Use!!!
            </div>
        </div>
    </div>
    <form action="functions/social_handler.php" method="POST" style="text-align:center;">
        <div class="g_container">
            <div class="g_box">
                <div class="g_img" style="background-image: url('img/fb.jpg') ;background-repeat: no-repeat; background-size:100% 100%;" > </div>
                <div class="g_text">
                    <input type="checkbox" id="facebook" name="social[]" value="facebook">
                    <label forbox="facebook"> Facebook </label><br>
                </div>
            </div>
            <div class="g_box">
                <div class="g_img" style="background-image: url('img/insta.jpg') ;background-repeat: no-repeat; background-size:100% 100%;"> </div>
                <div class="g_text">
                    <input type="checkbox" id="instagram" name="social[]" value="instagram">
                    <label forbox="instagram"> Instagram</label><br>
                </div>
            </div>
            <div class="g_box">
                <div class="g_img" style="background-image: url('img/reddit.jpg') ;background-repeat: no-repeat; background-size:100% 100%;"> </div>
                <div class="g_text">
                    <input type="checkbox" id="reddit" name="social[]" value="reddit">
                    <label forbox="reddit"> Reddit</label><br>
                </div>
            </div>
            <div class="g_box">
                <div class="g_img" style="background-image: url('img/snap.jpg') ;background-repeat: no-repeat; background-size:100% 100%;"> </div>
                <div class="g_text">
                    <input type="checkbox" id="snap" name="social[]" value="snap">
                    <label forbox="snap"> Snapchat</label><br>
                </div>
            </div>
            
        </div>
        <div class="g_container">
            <div class="g_box">
                <div class="g_img" style="background-image: url('img/tik.jpg') ;background-repeat: no-repeat; background-size:100% 100%;" > </div>
                <div class="g_text">
                    <input type="checkbox" id="tik" name="social[]" value="tik">
                    <label forbox="tik"> Tik Tok </label><br>
                </div>
            </div>
            <div class="g_box">
                <div class="g_img" style="background-image: url('img/wechat.jpg') ;background-repeat: no-repeat; background-size:100% 100%;"> </div>
                <div class="g_text">
                    <input type="checkbox" id="wechat" name="social[]" value="wechat">
                    <label forbox="wechat"> Wechat</label><br>
                </div>
            </div>
            <div class="g_box">
                <div class="g_img" style="background-image: url('img/yt.jpg') ;background-repeat: no-repeat; background-size:100% 100%;"> </div>
                <div class="g_text">
                    <input type="checkbox" id="yt" name="social[]" value="yt">
                    <label forbox="yt">Youtube</label><br>
                </div>
            </div>
            <div class="g_box">
                <div class="g_img" style="background-image: url('img/x.jpg') ;background-repeat: no-repeat; background-size:100% 100%;"> </div>
                <div class="g_text">
                    <input type="checkbox" id="x" name="social[]" value="x">
                    <label forbox="x"> X</label><br>
                </div>
            </div>
        </div>
        <button name="submit" type="submit">Submit</button>
    </form>
</body>
</html>