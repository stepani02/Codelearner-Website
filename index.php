<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>CodeLearner</title>
</head>
<body>

    <nav class="navbar">
        <a href="index.php" class="logo">
        <div class="navbar-left">
            <span style="color: #ffa559">&lt;</span>
            <span style="color: black">Code</span>    
            <span style="color: white">Learner</span>    
            <span style="color: #ffa559">&gt;</span>  
        </div>
        </a>
        <div class="navbar-right">
                <li><a href="index.php" style="color: #ffa559;">Home</a></li>
                <li><a href="Workplace.php">Workplace</a></li>
                <li><a href="Account1.php">Account</a></li>
                <li><a href="AboutUs.php">About Us</a></li>
            </ul>
          </div>
        </div>
    </nav>  

    <section>
        <div class="thinker-container">
        <img src="images/Thinkerist.png" alt="Another Image Alt Text">
        </div>

        <div class="text-container">
            <div class="text">
            <p><strong>CodeLearner</strong> aims to offer a user-friendly platform for individuals of varying skill levels to learn HTML (Hypertext Markup Language) and enhance their knowledge in the field. The target audience includes students, professionals, and anyone interested in learning HTML.</p>
            </div>
            <a href="Workplace.php" class="btn">See more</a>
        </div>
    </section>
    
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
