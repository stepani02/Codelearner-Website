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
    <h1>Chapter 5</h1>
        <div class="content-wrapper">
    <h2>HTML Attributes</h2>
        <p>HTML attributes provide additional information about HTML elements.</p>

        <h2>What are HTML Attributes</h2>
        <li>All HTML elements can have attributes</li>
        <li>Attributes provide additional information about elements</li>
        <li>Attributes are always specified in the start tag</li>
        <li>Attributes usually come in name/value pairs like: name="value"</li><hr>

        <h2>The href Attribute</h2>
        <p>The &lt;a&gt; tag defines a hyperlink. The href attribute specifies the URL of the page the link goes to:</p>
        <h2>Example:</h2>
        <img src="images/5 sample.png" alt="Example"><hr>

        <h2>The src Attribute</h2>
        <p>The &lt;img&gt; tag is used to embed an image in an HTML page. The src attribute specifies the path to the image to be displayed:</p>
        <h2>Example:</h2>
        <img src="images/5 img.png" alt="IMG"><hr>

        <p>There are two ways to specify the URL in the src attribute:</p><br>

            <li>Absolute URL - Links to an external image that is hosted on another website. Example: src="https://www.w3schools.com/images/img_girl.jpg".<br>
            Notes: External images might be under copyright. If you do not get permission to use it, you may be in violation of copyright laws. In addition, you cannot control external images; it can suddenly be removed or changed.</li>
            <li>Relative URL - Links to an image that is hosted within the website. Here, the URL does not include the domain name. If the URL begins without a slash, it will be relative to the current page. Example: src="img_girl.jpg". If the URL begins with a slash, it will be relative to the domain. Example: src="/images/img_girl.jpg".<br>
            Tip: It is almost always best to use relative URLs. They will not break if you change domain.</li><hr>


        <h2>The width and height Attributes</h2>
        <p>The &lt;img&gt; tag should also contain the width and height attributes, which specify the width and height of the image (in pixels):</p>
        <img src="images/5 girl.png" alt="Girl"><hr>

        <h2>The alt Attribute</h2>
        <p>The required alt attribute for the &lt;img&gt; tag specifies an alternate text for an image, if the image for some reason cannot be displayed. This can be due to a slow connection, or an error in the src attribute, or if the user uses a screen reader.</p>
        <h2>Example:</h2>
        <img src="images/5 alt1.png" alt="ALT">
        <h2>Example:</h2>
        <img src="images/5 alt2.png" alt="Typo"><hr>

        <h2>The style Attribute</h2>
        <p>The style attribute is used to add styles to an element, such as color, font, size, and more.</p>
        <img src="images/5 style.png" alt="Style"><hr>

        <h2>The lang Attribute</h2>
        <p>You should always include the lang attribute inside the &lt;html&gt; tag, to declare the language of the Web page. This is meant to assist search engines and browsers.</p>
        <p>The following example specifies English as the language:</p>
        <img src="images/5 english.png" alt="English">

        <p>Country codes can also be added to the language code in the lang attribute. So, the first two characters define the language of the HTML page, and the last two characters define the country.</p><br>
        <p>The following example specifies English as the language and United States as the country:</p>
        <img src="images/5 english us.png" alt="English-US"><hr>

        <h2>The title Attribute</h2>
        <p>The title attribute defines some extra information about an element.</p>
        <p>The value of the title attribute will be displayed as a tooltip when you mouse over the element:</p>
        <h2>Example:</h2>
        <img src="images/5 tooltip.png" alt="Tooltip"><hr>
        <div class="bottom-buttons">
        <a href="module4Main.php" class="back-button" onclick="markModuleAsDone(5)">Back</a>
        <a href="Modules6Main.php" class="next-button" onclick="markModuleAsDone(5)">Next</a>
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
