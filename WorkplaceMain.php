<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php"); 
    exit();
}

$firstName = $_SESSION['first_name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/WorkplaceMain.css">
    <title>CodeLearner - Workplace</title>
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


    <div class="welcome-message">
                <?php echo "Welcome, $firstName!"; ?>
            </div>
    <div class="row">
        <div class="column">
        <img src="images/videos.png" alt="" width="87%;">
            <a href="videosMain.php" class="image-button">Videos</a>
        </div>

        <div class="column">
        <img src="images/modules.png" alt="" width="87%;">
            <a href="ModulesMain.php" class="image-button">Modules</a>
        </div>

        <div class="column">
        <img src="images/html.png" alt="" width="87%;">
            <a href="Quiz.php" class="image-button">Quizzes</a>
        </div>
    </div>

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
