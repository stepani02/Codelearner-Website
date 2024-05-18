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
        <h1>Chapter 2</h1>
        <div class="content-wrapper">
        <h2>HTML Editors</h2>
        <br><p>A simple text editor is all you need to learn HTML!</p><hr>

        <h3>Learn HTML Using Notepad or TextEdit</h3><br>
        <ul>
            <p>Web pages can be created and modified by using professional HTML editors.</p>
            <p>However, for learning HTML we recommend a simple text editor like Notepad (PC) or TextEdit (Mac).</p>
            <p>We believe that using a simple text editor is a good way to learn HTML.</p>
            <p>Follow the steps below to create your first web page with Notepad or TextEdit.</p><hr>
        </ul>

        <h3>Step 1: Open Notepad (PC)</h3><br>
        <ul>
            <p>Windows 8 or later:</p>
            <p>Open the Start Screen (the window symbol at the bottom left on your screen). Type Notepad.</p>
            <p>Windows 7 or earlier:</p>
            <p>Open Start > Programs > Accessories > Notepad</p><hr>
        </ul>

        <h3>Step 1: Open TextEdit (Mac)</h3><br>
        <ul>
            <p>Open Finder > Applications > TextEdit</p>
            <p>Also change some preferences to get the application to save files correctly. In Preferences > Format > choose "Plain Text"</p>
            <p>Then under "Open and Save", check the box that says "Display HTML files as HTML code instead of formatted text".</p>
            <p>Then open a new document to place the code.</p><hr>
        </ul>

        <h3>Step 2: Write Some HTML</h3>
        <ul>
        <br><p>Write or copy the following HTML code into Notepad:</p>
            <img src="images/2step2.png" alt="STEP2"><hr>
        </ul>

        <h3>Step 3: Save the HTML Page</h3>
        <ul>
        <br><p>Save the file on your computer. Select File > Save as in the Notepad menu.</p>
            <p>Name the file "index.htm" and set the encoding to UTF-8 (which is the preferred encoding for HTML files).</p>
            <img src="images/2step3.png" alt="STEP3">
            <p class="highlight"><strong>Tip:</strong> You can use either .htm or .html as file extension. There is no difference; it is up to you.</p><hr>
        </ul>

        <h3>Step 4: View the HTML Page in Your Browser</h3>
        <ul>
        <br><p>Open the saved HTML file in your favorite browser (double click on the file, or right-click - and choose "Open with").</p>
            <p>The result will look much like this:</p>
            <img src="images/2step4.png" alt="STEP4"><hr>
        </ul>
        <div class="bottom-buttons">
        <a href="Modules1.php" class="back-button">Back</a>
        <a href="module3.php" class="next-button">Next</a>
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
