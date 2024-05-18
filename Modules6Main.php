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
            <a href="index.php" class="logo">
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
    <h1>Chapter 6</h1>
        <div class="content-wrapper">
        <h2>HTML Headings</h2>
        <p>HTML headings are titles or subtitles that you want to display on a webpage.</p>

        <h2>Example:</h2>
        <img src="images/6 heading.png" alt="Heading"><hr>

        <h2>HTML Headings</h2>
        <p>HTML headings are defined with the &lt;h1&gt; to &lt;h6&gt; tags.</p>
        <p>&lt;h1&gt; defines the most important heading. &lt;h6&gt; defines the least important heading.</p>

        <h2>Example:</h2>
        <img src="images/6 h1.png" alt="H1">

        <p>Note: Browsers automatically add some white space (a margin) before and after a heading.</p>
        <hr>

        <h2>Headings Are Important</h2>
        <p>Search engines use the headings to index the structure and content of your web pages.</p>
        <p>Users often skim a page by its headings. It is important to use headings to show the document structure.</p>
        <p>&lt;h1&gt; headings should be used for main headings, followed by &lt;h2&gt; headings, then the less important &lt;h3&gt;, and so on.</p>
        <p>Note: Use HTML headings for headings only. Don't use headings to make text BIG or bold.</p>
        <hr>
        <h2>Bigger Headings</h2>
        <p>Each HTML heading has a default size. However, you can specify the size for any heading with the style attribute, using the CSS font-size property:</p>

        <h2>Example:</h2>
        <img src="images/6 big.png" alt="Big"><hr>
        <div class="bottom-buttons">
        <a href="Modules5Main.php" class="back-button" onclick="markModuleAsDone(6)">Back</a>
        <a href="Modules7Main.php" class="next-button" onclick="markModuleAsDone(6)">Next</a>
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
