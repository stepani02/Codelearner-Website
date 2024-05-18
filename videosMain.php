<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php"); 
    exit();
}

$firstName = $_SESSION['first_name'];
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/videosMain.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>CodeLearner</title>


</head>
<body>
<header>
        <nav>
            <a href="main.php" class="logo">
                <span style="color: #ffa559">&lt;</span>
                <span style="color: black">Code</span>
                <span style="color: white">Learner</span>
                <span style="color: #ffa559">&gt;</span>
            </a>            
            <div class="welcome-message">
                <?php echo "Welcome, $firstName!"; ?>
            </div>
            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="menu-icon">&#9776;</label>
            <ul class="menu">
                <li><a href="main.php" style="color: #ffa559;">Home</a></li>
                <li><a href="WorkplaceMain.php">Workplace</a></li>
                <li><a href="aboutusMain.php">About Us</a></li>
                <li><a href="updateProfile.php">Settings</a></li>
                <li><a href="index.php">Logout</a></li>
            </ul>
        </nav>
</header>
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <div class="container">
        <div class="row">
            <div class="youtube_video">
                <iframe width="100%" height="0" id="video_id" src="https://www.youtube.com/embed/29l2qxSJSIw"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="gallery">
            <div class="item">
                <img src="images/videoimage1.png" data-id="29l2qxSJSIw">
                <div class="youtube_icon">
                <img src="images/youtube.svg">
                </div>
            </div>
            <div class="item">
                <img src="images/videoimage2.png" data-id="pU8B8dEMeTo">
                <div class="youtube_icon">
                <img src="images/youtube.svg">
                </div>
            </div>
            <div class="item">
                <img src="images/videoimage3.png" data-id="EP8JQhiQb4Q">
                <div class="youtube_icon">
                <img src="images/youtube.svg">
                </div>
            </div>
        </div>

        <div class="gallery">
            <div class="item">
                <img src="images/videoimage4.png" data-id="KC_TB9dsZ5g">
                <div class="youtube_icon">
                <img src="images/youtube.svg">
                </div>
            </div>
            <div class="item">
                <img src="images/videoimage5.png" data-id="C8HuXXlmQLc">
                <div class="youtube_icon">
                <img src="images/youtube.svg">
                </div>
            </div>
            <div class="item">
                <img src="images/videoimage6.png" data-id="x5mYQJTqOWk">
                <div class="youtube_icon">
                <img src="images/youtube.svg">
                </div>
            </div>
        </div>

        <div class="gallery">
            <div class="item">
                <img src="images/videoimage7.png" data-id="lafECAi4F5k">
                <div class="youtube_icon">
                <img src="images/youtube.svg">
                </div>
            </div>
            <div class="item">
                <img src="images/videoimage8.png" data-id="VmiMcxLVVto">
                <div class="youtube_icon">
                <img src="images/youtube.svg">
                </div>
            </div>
            <div class="item">
                <img src="images/videoimage9.png" data-id="t4LTm5x1Gbw">
                <div class="youtube_icon">
                <img src="images/youtube.svg">
                </div>
            </div>
        </div>

        <div class="gallery">
            <div class="item">
                <img src="images/videoimage10.png" data-id="gyhd_4Bu0sc">
                <div class="youtube_icon">
                <img src="images/youtube.svg">
                </div>
            </div>
            <div class="item">
                <img src="images/videoimage11.png" data-id="Bvftn2VpyhU">
                <div class="youtube_icon">
                <img src="images/youtube.svg">
                </div>
            </div>
            <div class="item">
                <img src="images/videoimage12.png" data-id="ZD-ar9iOHaQ">
                <div class="youtube_icon">
                    <img src="images/youtube.svg">
                </div>
            </div>
        </div>
    </div>
    <script src="ajaxrequest.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".menu-icon").click(function(){
                $(".menu").slideToggle();
            });
        });
    </script>

</body>
</html>
