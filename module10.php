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
        <h1>Chapter 10</h1>
        <div class="content-wrapper">
        <h2>HTML Quotation and Citation Elements</h2>
        <br><p>In this chapter we will go through the &lt;blockquote&gt;,&lt;q&gt;, &lt;abbr&gt;, 
            &lt;address&gt;, &lt;cite&gt;, and &lt;bdo&gt; HTML elements.</p><hr>

        <h3>Example</h3><br>
        <ul>
        <img src="images/10step1.png" alt="STEP1"><hr>
        </ul>

        <h3>HTML &lt;blockquote&gt; for Quotations</h3><br>
        <ul>
            <p>The HTML &lt;blockquote&gt; element defines a section that is quoted from another source.</p>
            <p>Browsers usually indent &lt;blockquote&gt; elements.</p>
            <img src="images/10step2.png" alt="STEP2"><hr>
        </ul>

        <h3>HTML &lt;q&gt; for Short Quotations</h3><br>
        <ul>
            <p>The HTML &lt;q&gt; tag defines a short quotation.</p>
            <p>Browsers normally insert quotation marks around the quotation.</p>
            <img src="images/10step3.png" alt="STEP3"><hr>
        </ul>

        <h3>HTML &lt;abbr&gt; for Abbreviations</h3>
        <ul>
        <br><p>The HTML &lt;abbr&gt; tag defines an abbreviation or an acronym, 
            like "HTML", "CSS", "Mr.", "Dr.", "ASAP", "ATM".</p>
            <p>Marking abbreviations can give useful information to browsers, 
            translation systems and search-engines.</p>
            <p>Tip: Use the global title attribute to show the description 
            for the abbreviation/acronym when you mouse over the element. </p>
            <img src="images/10step4.png" alt="STEP4"><hr>
        </ul>

        <h3>HTML &lt;address&gt; for Contact Information</h3>
        <ul>
        <br><p>The HTML <address> tag defines the contact information for the 
            author/owner of a document or an article.</p>
            <p>The contact information can be an email address, URL, 
            physical address, phone number, social media handle, etc.</p>
            <p>The text in the &lt;address&gt; element usually renders in italic, and browsers will 
            always add a line break before and after the &lt;address&gt; element.</p>
            <img src="images/10step5.png" alt="STEP5"><hr>
        </ul>

        <h3>HTML &lt;cite&gt; for Work Title</h3>
        <ul>
        <br><p>The HTML &lt;cite&gt; tag defines the title of a creative work 
            (e.g. a book, a poem, a song, a movie, a painting, a sculpture, etc.).</p>
            <p>Note: A person's name is not the title of a work.</p>
            <p>The text in the &lt;cite&gt; element usually renders in italic.</p>
            <img src="images/10step6.png" alt="STEP6"><hr>
        </ul>

        <h3>HTML &lt;cite&gt; HTML &lt;bdo&gt; for Bi-Directional Override</h3>
        <ul>
        <br><p>BDO stands for Bi-Directional Override.</p>
            <p>The HTML &lt;bdo&gt; tag is used to override the current text direction:</p>
            <img src="images/10step7.png" alt="STEP7"><hr>
        </ul>

        <ul>
        <br>
            <img src="images/10step8.png" alt="STEP8"><hr>
        </ul>
        <div class="bottom-buttons">
        <a href="Modules9.php" class="back-button">Back</a>
        <a href="Workplace.php" class="next-button">Done</a>
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
