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
        <h1>Chapter 4</h1>
        <div class="content-wrapper">
        <h2>HTML Elements</h2>
        <br><p>An HTML element is defined by a start tag, some content, and an end tag.</p><hr>

        <h3>HTML Elements</h3><br>
        <ul>
            <p>The HTML element is everything from the start tag to the end tag:</p>
            <img src="images/4step1.png" alt="STEP1">
            <img src="images/4step2.png" alt="STEP2"><br>
            
            <p class="highlight"> <strong>NOTE:</strong> Some HTML elements have no content (like the &lt;br&gt; element). 
                These elements are called empty elements. 
                Empty elements do not have an end tag! 
                Follow the steps below to create your first web page with Notepad or TextEdit.</p><hr>
        </ul>

        <h3>Nested HTML Elements</h3><br>
        <ul>
            <p>HTML elements can be nested (this means that elements can contain other elements).</p>
            <p>All HTML documents consist of nested HTML elements.</p>
            <p>The following example contains four HTML elements (&lt;html&gt;, &lt;body&gt;, &lt;h1&gt; and &lt;p&gt;):</p>
            <img src="images/4step3.png" alt="STEP3">
        </ul>

        <br><h3>Example Explained</h3><br>
        <ul>
            <p>The &lt;html&gt; element is the root element and it defines the whole HTML document.</p>
            <p>It has a start tag &lt;html&gt; and an end tag &lt;/html&gt;.</p>
            <p>Then, inside the &lt;html&gt; element there is a &lt;body&gt; element:</p><br>
            <img src="images/4step4.png" alt="STEP4"><br>
            
            <p>The &lt;body&gt; element defines the document's body.</p>
            <p>It has a start tag &lt;body&gt; and an end tag &lt;/body&gt;.</p>
            <p>Then, inside the &lt;body&gt; element there are two other elements: &lt;h1&gt; and &lt;p&gt;:</p><br>
            <img src="images/4step5.png" alt="STEP5"><br>

            <p>The &lt;h1&gt; element defines a heading.&lt;/p&gt;
            <p>It has a start tag &lt;h1&gt; and an end tag &lt;/h1&gt;:</p><br>
            <img src="images/4step6.png" alt="STEP6"><br>

            <p>The &lt;p&gt;element defines a paragraph.</p>
            <p>It has a start tag &lt;p&gt; and an end tag &lt;/p&gt;:</p><br>
            <img src="images/4step7.png" alt="STEP7"><hr>
        </ul>
        <div class="bottom-buttons">
        <a href="module3Main.php" class="back-button" onclick="markModuleAsDone(4)">Back</a>
        <a href="Modules5Main.php" class="next-button" onclick="markModuleAsDone(4)">Next</a>
        
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
