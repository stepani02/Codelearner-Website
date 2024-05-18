<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/Workplace.css">
    <title>CodeLearner - Workplace</title>
</head>
<body>

    <nav class="navbar">
        <a href="index.php" class="logo">
        <div class="navbar-left">
            <span style="color: #ffa559">&lt;</span>
            <span style="color: black">Code</span>    
            <span style="color: white">Learner</span>    
            <span style="color: #ffa559">&gt;</span>  
        </div>
        </a>
        <div class="navbar-right">
                <li><a href="index.php" >Home</a></li>
                <li><a href="Workplace.php"style="color: #ffa559;">Workplace</a></li>
                <li><a href="Account1.php">Account</a></li>
                <li><a href="AboutUs.php">About Us</a></li>
            </ul>
          </div>
        </div>
    </nav> 

    <div class="row">
        <div class="column">
        <img src="images/videos.png" alt="" width="87%;">
            <a href="Videos.php" class="image-button">Videos</a>
        </div>

        <div class="column">
        <img src="images/modules.png" alt="" width="87%;">
            <a href="Modules.php" class="image-button">Modules</a>
        </div>

        <div class="column">
        <img src="images/html.png" alt="" width="87%;">
            <a href="Quiz.php" class="image-button">Quizzes</a>
        </div>
    </div>
    
<div class="modal" id="loginModal">
    <div class="modal-content">
        <p style="margin-bottom: 20px;">Please continue to login first.</p>
        <div class="modal-buttons">
            <button id="continueLogin">Continue to login</button>
            <button id="closeModal">Close</button>
        </div>
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

<script>
  $(document).ready(function() {
    $(".image-button[href='Quiz.php']").click(function(event) {
      event.preventDefault();
      $("#loginModal").css("display", "block");
    });

    $("#closeModal").click(function() {
      $("#loginModal").css("display", "none");
    });

    $(window).click(function(event) {
      if (event.target.id === "loginModal") {
        $("#loginModal").css("display", "none");
      }
    });

    $("#continueLogin").click(function () {
            window.location.href = "Account1.php";
        });
        
  });
</script>

</body>
</html>
