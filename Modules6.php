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
        <a href="module5.php" class="back-button">Back</a>
        <a href="Modules7.php" class="next-button">Next</a>
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

</body>
</html>
