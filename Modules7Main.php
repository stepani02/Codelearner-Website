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
    <link rel="stylesheet" type="text/css" href="css/ModulesStyle1Main.css">
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
        <div class="container">
        <div class="content">
    <div class="content">
    <h1>Chapter 7</h1>
    <div class="content-wrapper">
        <h2>HTML Paragraphs</h2>
        <p>A paragraph always starts on a new line, and is usually a block of text.</p>
<br>

        <h2>What are HTML Paragraphs?</h2>
        <p>The HTML &lt;p&gt; element defines a paragraph.</p>
        <p>A paragraph always starts on a new line, and browsers automatically add some white space (a margin) before and after a paragraph.</p>
        <h2>Example:</h2>
        <img src="images/7 sample.png" alt="Example">
        <hr>

        <h2>HTML Display</h2>
        <p>You cannot be sure how HTML will be displayed.</p>
        <p>Large or small screens, and resized windows will create different results.</p>
        <p>With HTML, you cannot change the display by adding extra spaces or extra lines in your HTML code.</p>
        <p>The browser will automatically remove any extra spaces and lines when the page is displayed:</p>
        <h2>Example:</h2>
        <img src="images/7 display.png" alt="Display">
        <hr>

        <h2>HTML Horizontal Rules</h2>
        <p>The &lt;hr&gt; tag defines a thematic break in an HTML page, and is most often displayed as a horizontal rule.</p>
        <p>The &lt;hr&gt; element is used to separate content (or define a change) in an HTML page:</p>
        <h2>Example:</h2>
        <img src="images/7 hor.png" alt="Horizontal">
        <hr>

        <h2>HTML Line Breaks</h2>
        <p>The HTML &lt;br&gt; element defines a line break.</p>
        <p>Use &lt;br&gt; if you want a line break (a new line) without starting a new paragraph:</p>
        <h2>Example:</h2>
        <img src="images/7 linebreak.png" alt="Line Breaks">

        <p>The &lt;br&gt; tag is an empty tag, which means that it has no end tag.</p>
        <hr>

        <h2>The Poem Problem</h2>
        <p>This poem will display on a single line:</p>
        <h2>Example:</h2>
        <img src="images/7 poem.png" alt="Poem">
        <hr>

        <h2>Solution - The HTML &lt;pre&gt; Element</h2>
        <p>The HTML &lt;pre&gt; element defines preformatted text.</p>
        <p>The text inside a &lt;pre&gt; element is displayed in a fixed-width font (usually Courier), and it preserves both spaces and line breaks:</p>
        <h2>Example:</h2>
        <img src="images/7 pre.png" alt="Pre">
        <hr>
        <div class="bottom-buttons">
        <a href="Modules6Main.php" class="back-button" onclick="markModuleAsDone(7)">Back</a>
        <a href="Modules8Main.php" class="next-button" onclick="markModuleAsDone(7)">Next</a>
    </div>
    </div></div></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".menu-icon").click(function(){
                $(".menu").slideToggle();
            });
        });
    </script>

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
