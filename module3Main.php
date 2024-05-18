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
        <h1>Chapter 3</h1>
        <div class="content-wrapper">
        <h2>HTML Basic Examples</h2>
        <br><p>In this chapter we will show some basic HTML examples.</p>
        <p>Don't worry if we use tags you have not learned about yet.</p><hr>

        <h3>HTML Documents</h3><br>
        <ul>
            <p>All HTML documents must start with a document type declaration: &lt;!DOCTYPE html&gt;.</p>
            <p>The HTML document itself begins with &lt;html&gt; and ends with &lt;html&gt;.</p>
            <p>The visible part of the HTML document is between &lt;body&gt; and &lt;body&gt;.</p>
            <br><p>EXAMPLE</p>
            <img src="images/3step1.png" alt="STEP1"><hr>
        </ul>

        <h3>The &lt;!DOCTYPE&gt; Declaration</h3><br>
        <ul>
            <p>The &lt;!DOCTYPE&gt; declaration represents the document type, and helps browsers to display web pages correctly.</p>
            <p>It must only appear once, at the top of the page (before any HTML tags).</p>
            <p>The &lt;!DOCTYPE&gt; declaration is not case sensitive.</p>
            <p>The &lt;!DOCTYPE&gt; declaration for HTML5 is:</p>
            <img src="images/3step2.png" alt="STEP2"><hr>
        </ul>

        <h3>HTML Headings</h3><br>
        <ul>
            <p>HTML headings are defined with the &lt;h1&gt; to &lt;h6&gt; tags.</p>
            <p> &lt;h1&gt; defines the most important heading. &lt;h6&gt; defines the least important heading: </p>
            <br><p>EXAMPLE</p>
            <img src="images/3step3.png" alt="STEP3"><hr>
        </ul>

        <h3>HTML Paragraphs</h3>
        <ul>
        <br><p>HTML paragraphs are defined with the &lt;p&gt; tag:</p>
            <img src="images/3step4.png" alt="STEP4"><hr>
        </ul>

        <h3>HTML Links</h3>
        <ul>
        <br><p>HTML links are defined with the &lt;a&gt; tag:</p>
            <img src="images/3step5.png" alt="STEP5">
            <p>The link's destination is specified in the href attribute. </p>
            <p>Attributes are used to provide additional information about HTML elements.</p>
            <p>You will learn more about attributes in a later chapter.</p><hr>
        </ul>

        <h3>HTML Images</h3>
        <ul>
        <br><p>HTML images are defined with the &lt;img&gt; tag.</p>
            <p>The source file (src), alternative text (alt), width, and height are provided as attributes:</p>
            <img src="images/3step6.png" alt="STEP6"><hr>
        </ul>

        <h3>How to View HTML Source</h3>
        <ul>
        <br><p>Have you ever seen a Web page and wondered "Hey! How did they do that?"</p>
        </ul><br>

        <h3>View HTML Source Code:</h3>
        <ul>
        <br><p>Right-click in an HTML page and select "View Page Source" (in Chrome) or "View</p>
            <p>Source" (in Edge), or similar in other browsers. This will open a window containing</p>
            <p>the whole page.</p><br>
        </ul>

        <h3>Inspect an HTML Element:</h3>
        <ul>
        <br><p>Right-click on an element (or a blank area), and choose "Inspect" or "Inspect</p>
            <p>Element" to see what elements are made up of (you will see both the HTML and the</p>
            <p>CSS). You can also edit the HTML or CSS on-the-fly in the Elements or Styles panel that opens.</p><hr>
        </ul>
        <div class="bottom-buttons">
        <a href="module2Main.php" class="back-button" onclick="markModuleAsDone(3)">Back</a>
        <a href="module4Main.php" class="next-button" onclick="markModuleAsDone(3)">Next</a>
    </div>
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
