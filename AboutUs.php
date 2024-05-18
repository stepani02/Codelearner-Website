<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/about-us.css">
    <title>CodeLearner - About Us</title>
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
                <li><a href="index.php" >Home</a></li>
                <li><a href="Workplace.php">Workplace</a></li>
                <li><a href="Account1.php">Account</a></li>
                <li><a href="AboutUs.php"style="color: #ffa559;">About Us</a></li>
            </ul>
          </div>
        </div>
    </nav>  

    <div class="image-container">
    <img src="images/AboutUs.png" alt="Image Alt Text">
        <p>CodeLearner aims to benefit users who want to learn HTML to build their websites or create web applications, as well as those interested in related fields such as web development or digital marketing. The website's user-friendly interface and high-quality resources aim to help users develop the necessary skills to achieve their goals in web development.</p>
        <p>  CodeLearner's feature interactive quizzes and high-quality resources, including text-based and video tutorials, to cater to users with different learning preferences. The website will be designed using Bootstrap to ensure it works seamlessly across various screen sizes, including desktops, laptops, tablets, and smartphones. The website have several pages, including a home page, tutorials page, quizzes page, resources page, and contact page.</p>
        <P>CodeLearner aims to benefit users who want to learn HTML to build their websites or create web applications, as well as those interested in related fields such as web development or digital marketing. The website's user-friendly interface and high-quality resources aim to help users develop the necessary skills to achieve their goals in web development.</P>
    </div>
    <section>
        <div class="row">
          <h1> THE ☆ TEAM</h1>
        </div>
        <div class="row">
          <!-- Column 1-->
          <div class="column">
            <div class="card">
              <div class="img-container">
                <img src="images/walley.png" />
              </div>
              <h3>Walley Fajardo</h3>
              <p>Full stack Developer</p>
            </div>
          </div>
          <!-- Column 2-->
          <div class="column">
            <div class="card">
              <div class="img-container">
                <img src="images/jethro.png" />
              </div>
              <h3>Jethro Sta. Ana</h3>
              <p>Back-end Developer</p>
            </div>
          </div>
          <!-- Column 3-->
          <div class="column">
            <div class="card">
              <div class="img-container">
                <img src="images/baron.png" />
              </div>
              <h3>Baron David Suzon</h3>
              <p>Back-end Developer</p>
            </div>
          </div>
          <!-- Column 4-->
          <div class="column">
            <div class="card">
              <div class="img-container">
                <img src="images/sharmine.png" />
              </div>
              <h3>Sharmine Cruz</h3>
              <p>UI/UX Designer</p>
            </div>
          </div>
          <!-- Column 5-->
          <div class="column">
            <div class="card">
              <div class="img-container">
                <img src="images/daphne.png" />
              </div>
              <h3>Aarron Daphne Gatchalian</h3>
              <p>Software QA</p>
            </div>
          </div>
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
