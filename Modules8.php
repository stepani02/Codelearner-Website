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
    <h1>Chapter 8</h1>
    <div class="content-wrapper">
        <h2>HTML Styles</h2>
        <p>The HTML style attribute is used to add styles to an element, such as color, font, size, and more.</p>
        <h2>Example:</h2>
        <img src="images/8 sample.png" alt="Example">
        <hr>

        <h2>The HTML Style Attribute</h2>
        <p>Setting the style of an HTML element, can be done with the style attribute.</p>
        <p>The HTML style attribute has the following syntax:</p>
        <h2>Example:</h2>
        <img src="images/8 style.png" alt="Style">
        <hr>

        <h2>Background Color</h2>
        <p>The CSS background-color property defines the background color for an HTML element.</p>
        <h2>Example:</h2>
        <p>Set the background color for a page to powderblue:</p>
        <img src="images/8 bg.png" alt="Background"><hr>
        <h2>Example:</h2>
        <p>Set background color for two different elements:</p>
        <img src="images/8 bg 1.png" alt="Background 1">
        <hr>

        <h2>Text Color</h2>
        <p>The CSS color property defines the text color for an HTML element:</p>
        <h2>Example:</h2>
        <img src="images/8 color.png" alt="Color">
        <hr>

        <h2>Fonts</h2>
        <p>The CSS font-family property defines the font to be used for an HTML element:</p>
        <h2>Example:</h2>
        <img src="images/8 fonts.png" alt="Fonts">
        <hr>

        <h2>Text Size</h2>
        <p>The CSS font-size property defines the text size for an HTML element:</p>
        <h2>Example:</h2>
        <img src="images/8 size.png" alt="Size">
        <hr>

        <h2>Text Alignment</h2>
        <p>The CSS text-align property defines the horizontal text alignment for an HTML element:</p>
        <h2>Example:</h2>
        <img src="images/8 align.png" alt="Alignment">
        <hr>
        <div class="bottom-buttons">
        <a href="Modules7.php" class="back-button">Back</a>
        <a href="Modules9.php" class="next-button">Next</a>
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
