<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/ModulesStyle1.css">
    <title>CodeLearner</title>
</head>
<body>

    <nav class="navbar">
        <a href="main.php" class="logo">
        <div class="navbar-left">
            <span style="color: #ffa559">&lt;</span>
            <span style="color: black">Code</span>    
            <span style="color: white">Learner</span>    
            <span style="color: #ffa559">&gt;</span>  
        </div>
        </a>
        <div class="navbar-right">
            <li><a href="main.php" >Home</a></li>
            <li><a href="Workplace.php" style="color: #ffa559;">Workplace</a></li>
            <li><a href="Account.php">Account</a></li>
            <li><a href="AboutUs.php">About Us</a></li>
        </div>
    </nav> 

        <!-- Content Container -->
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
        <a href="module2.php" class="back-button">Back</a>
        <a href="module4.php" class="next-button">Next</a>
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

</body>
</html>
