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
        <h1>Chapter 1</h1>
        <div class="content-wrapper">
        <h2>HTML Introduction</h2>
        <p>HTML is the standard markup language for creating Web pages.</p>

        <h2>What is HTML?</h2>

            <li>HTML stands for Hyper Text Markup Language</li>
            <li>HTML is the standard markup language for creating Web pages</li>
            <li>HTML describes the structure of a Web page</li>
            <li>HTML consists of a series of elements</li>
            <li>HTML elements tell the browser how to display the content</li>
            <li>HTML elements label pieces of content such as "this is a heading", "this is a paragraph", "this is a link", etc.</li>

        <hr>
        <h2>A Simple HTML Document</h2>
        <h2>Example</h2>
        <img src="images/html_sample.png" alt="Example"><hr>

        <h2>What is an HTML Element?</h2>
        <p>An HTML element is defined by a start tag, some content, and an end tag:</p>
        <img src="images/tag1.png" alt="Tag 1"><br>
        <img src="images/tag2.png" alt="Tag 2"><hr>

        <h2>Web Browsers</h2>
        <p>The purpose of a web browser (Chrome, Edge, Firefox, Safari) is to read HTML documents and display them correctly.</p>
        <p>A browser does not display the HTML tags, but uses them to determine how to display the document:</p>
        <img src="images/browser_display.png" alt="Browser Display"><hr>

        <h2>HTML Page Structure</h2>
        <p>Below is a visualization of an HTML page structure:</p>
        <img src="images/html_structure.png" alt="HTML Page Structure">
        <p>Note: The content inside the &lt;body&gt; section will be displayed in a browser. The content inside the &lt;title&gt; element will be shown in the browser's title bar or in the page's tab.</p>
        <hr>
        
        <h2>HTML History</h2>
        <p>Since the early days of the World Wide Web, there have been many versions of HTML:</p>
        <img src="images/history.png" alt="History"><hr>
        <div class="bottom-buttons">
        <a href="ModulesMain.php" class="back-button"onclick="markModuleAsDone(1)">Back</a>
        <a href="module2Main.php" class="next-button" onclick="markModuleAsDone(1)">Next</a>

        
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
