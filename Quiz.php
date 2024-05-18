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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/quiz.css">
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

<div class="quiz-container" id="quiz">
    <div class="quiz-header">
        <h2 id="question">Question Text</h2>
        <ul>
            <li>
                <input type="radio" name="answer" id="a" class="answer">
                <label for="a" id="a_text">Answer A</label>
            </li>

            <li>
                <input type="radio" name="answer" id="b" class="answer">
                <label for="b" id="b_text">Answer B</label>
            </li>

            <li>
                <input type="radio" name="answer" id="c" class="answer">
                <label for="c" id="c_text">Answer C</label>
            </li>

            <li>
                <input type="radio" name="answer" id="d" class="answer">
                <label for="d" id="d_text">Answer D</label>
            </li>
        </ul>
        <button id="submit">Submit</button> 
    </div>
</div>


  <script src="Quiz.js"></script>
  
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