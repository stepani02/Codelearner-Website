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
    <h1>Chapter 9</h1>
    <div class="content-wrapper">
        <h2>HTML Text Formatting</h2>
        <p>HTML contains several elements for defining text with a special meaning.</p>
        <h2>Example:</h2>
        <img src="images/9 sample.png" alt="Example">
        <hr>

        <h2>HTML Formatting Elements</h2>
        <p>Formatting elements were designed to display special types of text:</p>

        <li>&lt;b&gt; - Bold text</li>
        <li>&lt;strong&gt; - Important text</li>
        <li>&lt;i&gt; - Italic text</li>
        <li>&lt;em&gt; - Emphasized text</li>
        <li>&lt;mark&gt; - Marked text</li>
        <li>&lt;small&gt; - Smaller text</li>
        <li>&lt;del&gt; - Deleted text</li>
        <li>&lt;ins&gt; - Inserted text</li>
        <li>&lt;sub&gt; - Subscript text</li>
        <li>&lt;sup&gt; - Superscript text</li>
        <hr>

        <h2>HTML &lt;b&gt; and &lt;strong&gt; Elements</h2>
        <p>The HTML &lt;b&gt; element defines bold text, without any extra importance.</p>
        <h2>Example:</h2>
        <img src="images/9 b.png" alt="Bold">
        <br>

        <p>The HTML &lt;strong&gt; element defines text with strong importance. The content inside is typically displayed in bold.</p>
        <h2>Example:</h2>
        <img src="images/9 strong.png" alt="Strong">
        <hr>

        <h2>HTML &lt;i&gt; and &lt;em&gt; Elements</h2>
        <p>The HTML &lt;i&gt; element defines a part of text in an alternate voice or mood. The content inside is typically displayed in italic.</p>
        <p>Tip: The &lt;i&gt; tag is often used to indicate a technical term, a phrase from another language, a thought, a ship name, etc.</p>
        <h2>Example:</h2>
        <img src="images/9 i.png" alt="Italic">
        <br>

        <p>The HTML &lt;em&gt; element defines emphasized text. The content inside is typically displayed in italic.</p>
        <p>Tip: A screen reader will pronounce the words in &lt;em&gt; with an emphasis, using verbal stress.</p>
        <h2>Example:</h2>
        <img src="images/9 em.png" alt="Emphasize">
        <hr>

        <h2>HTML &lt;small&gt; Element</h2>
        <p>The HTML &lt;small&gt; element defines smaller text:</p>
        <h2>Example:</h2>
        <img src="images/9 small.png" alt="Small">
        <hr>

        <h2>HTML &lt;mark&gt; Element</h2>
        <p>The HTML &lt;mark&gt; element defines text that should be marked or highlighted:</p>
        <h2>Example:</h2>
        <img src="images/9 mark.png" alt="Mark">
        <hr>

        <h2>HTML &lt;del&gt; Element</h2>
        <p>The HTML &lt;del&gt; element defines text that has been deleted from a document. Browsers will usually strike a line through deleted text:</p>
        <h2>Example:</h2>
        <img src="images/9 del.png" alt="Delete">
        <hr>

        <h2>HTML &lt;ins&gt; Element</h2>
        <p>The HTML &lt;ins&gt; element defines a text that has been inserted into a document. Browsers will usually underline inserted text:</p>
        <h2>Example:</h2>
        <img src="images/9 ins.png" alt="Insert">
        <hr>

        <h2>HTML &lt;sub&gt; Element</h2>
        <p>The HTML &lt;sub&gt; element defines subscript text. Subscript text appears half a character below the normal line, and is sometimes rendered in a smaller font. Subscript text can be used for chemical formulas, like H2O:</p>
        <h2>Example:</h2>
        <img src="images/9 sub.png" alt="Subscript">
        <hr>

        <h2>HTML &lt;sup&gt; Element</h2>
        <p>The HTML &lt;sup&gt; element defines superscript text. Superscript text appears half a character above the normal line, and is sometimes rendered in a smaller font. Superscript text can be used for footnotes, like WWW[1]:</p>
        <h2>Example:</h2>
        <img src="images/9 sup.png" alt="Superscript">
        <hr>
        <div class="bottom-buttons">
        <a href="Modules8.php" class="back-button">Back</a>
        <a href="module10.php" class="next-button">Next</a>
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
