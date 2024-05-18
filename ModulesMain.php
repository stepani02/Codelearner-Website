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
    <link rel="stylesheet" type="text/css" href="css/modulesMain.css">
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

    <h1 class="heading"> HTML and CSS Modules </h1>

<section class="course">

    <div class="box">
        <span class="amount">Chapter 1</span>
        <img src="images/course-1.svg" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>HTML</h3>
        <p>This chapter contains the Introduction to HTML.</p>
        <a href="Modules1Main.php" class="btn" onclick="markModuleAsDone(1)">learn more</a>

    </div>

    <div class="box">
        <span class="amount">Chapter 2</span>
        <img src="images/course-2.svg" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>HTML</h3>
        <p>This chapter contains the HTML editors you can use.</p>
        <a href="module2Main.php" class="btn" onclick="markModuleAsDone(2)">learn more</a>

    </div>

    <div class="box">
        <span class="amount">Chapter 3</span>
        <img src="images/course-3.svg" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>HTML</h3>
        <p>This chapter contains basics of HTML.</p>
        <a href="module3Main.php" class="btn" onclick="markModuleAsDone(3)">learn more</a>
    </div>

    <div class="box">
        <span class="amount">Chapter 4</span>
        <img src="images/course-4.svg" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>HTML</h3>
        <p>This chapter contains the elements of HTML.</p>
        <a href="module4Main.php" class="btn" onclick="markModuleAsDone(4)">learn more</a>
    </div>

    <div class="box">
        <span class="amount">Chapter 5</span>
        <img src="images/course-5.svg" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>HTML</h3>
        <p>This chapter contains the attributes of HTML.</p>
        <a href="Modules5Main.php" class="btn" onclick="markModuleAsDone(5)">learn more</a>

    </div>

    <div class="box">
        <span class="amount">Chapter 6</span>
        <img src="images/course-6.svg" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>HTML</h3>
        <p>This chapter contains the different types of headings in HTML.</p>
        <a href="Modules6Main.php" class="btn" onclick="markModuleAsDone(6)">learn more</a>
    </div>

    <div class="box">
        <span class="amount">Chapter 7</span>
        <img src="images/course-6.svg" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>HTML</h3>
        <p>This chapter contains the Paragraphs of HTML.</p>
        <a href="Modules7Main.php" class="btn" onclick="markModuleAsDone(7)">learn more</a>
    </div>

    <div class="box">
        <span class="amount">Chapter 8</span>
        <img src="images/course-6.svg" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>HTML</h3>
        <p>This chapter contains the different styles you can use in HTML.</p>
        <a href="Modules8Main.php" class="btn" onclick="markModuleAsDone(8)">learn more</a>
    </div>

    <div class="box">
        <span class="amount">Chapter 9</span>
        <img src="images/course-6.svg" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>HTML</h3>
        <p>This chapter contains the different formatting of HTML.</p>
        <a href="Modules9Main.php" class="btn" onclick="markModuleAsDone(9)">learn more</a>
    </div>

    <div class="box">
        <span class="amount">Chapter 10</span>
        <img src="images/course-6.svg" alt="">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="far fa-star"></i>
        </div>
        <h3>HTML</h3>
        <p>This chapter contains how to use qoutations in HTML.</p>
        <a href="module10Main.php" class="btn" onclick="markModuleAsDone(10)">learn more</a>
    </div>

</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".menu-icon").click(function(){
                $(".menu").slideToggle();
            });
        });
    </script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  function markModuleAsDone(moduleNumber) {
    $.ajax({
      type: 'POST',
      url: 'store_module_status.php', 
      data: {
        module: moduleNumber
      },
      success: function(response) {
        console.log(response); 
      },
      error: function(xhr, status, error) {
        console.error(error); 
        alert('Failed to mark the module as done. Please try again.');
      }
    });
  }
</script>

</body>
</html>