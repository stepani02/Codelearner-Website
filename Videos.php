<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/Videos style.css">
    <title>CodeLearner</title>
</head>
<body>
<body <?php if(isset($_SESSION['logged_in']) && $_SESSION['logged_in']) echo 'class="logged-in"'; ?>>
<div class="modal" id="disclaimerModal">
        <div class="modal-content">
            <p style="margin-bottom: 20px;"><strong style="color: red;">Disclaimer:</strong> The tutorials displayed above is provided by W3Schools and is intended for educational purposes only. The content and instructions presented in the tutorial are the intellectual property of W3Schools. Our website does not claim ownership of the tutorial.</p>
            <div class="modal-buttons">
                <button id="closeDisclaimerModal">I understand</button>
            </div>
        </div>
    </div>
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
                <li><a href="Workplace.php"style="color: #ffa559;">Workplace</a></li>
                <li><a href="Account1.php">Account</a></li>
                <li><a href="AboutUs.php">About Us</a></li>
            </ul>
          </div>
        </div>
    </nav> 
    
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
    $(document).ready(function () {
        // Show the disclaimer modal on page load
        $("#disclaimerModal").css("display", "block");

        // Close the disclaimer modal when the "I understand" button is clicked
        $("#closeDisclaimerModal").click(function () {
            $("#disclaimerModal").css("display", "none");
        });
            $(".item").click(function () {
                let youtube_id = $(this).find("img").attr("data-id");
                $(this).find(".youtube_icon").addClass("active");
                $(this).siblings().find(".youtube_icon").removeClass("active");
                let newUrl = `https://www.youtube.com/embed/${youtube_id}`;
                $("#video_id").attr("src", newUrl);
            });
        });
    </script>

    <div class="container">
        <div class="row">
            <div class="youtube_video">
                <iframe width="100%" height="0" id="video_id" src="https://www.youtube.com/embed/29l2qxSJSIw"
                    frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
        <div class="gallery">
            <div class="item">
                <img src="images/videoimage1.png" data-id="29l2qxSJSIw">
                <div class="youtube_icon">
                <img src="images/youtube.svg">
                </div>
            </div>
            <div class="item">
                <img src="images/videoimage2.png" data-id="pU8B8dEMeTo">
                <div class="youtube_icon">
                <img src="images/youtube.svg">
                </div>
            </div>
            <div class="item">
                <img src="images/videoimage3.png" data-id="EP8JQhiQb4Q">
                <div class="youtube_icon">
                <img src="images/youtube.svg">
                </div>
            </div>
        </div>

        <div class="gallery">
            <div class="item">
                <img src="images/videoimage4.png" data-id="KC_TB9dsZ5g">
                <div class="youtube_icon">
                <img src="images/youtube.svg">
                </div>
            </div>
            <div class="item">
                <img src="images/videoimage5.png" data-id="C8HuXXlmQLc">
                <div class="youtube_icon">
                <img src="images/youtube.svg">
                </div>
            </div>
            <div class="item">
                <img src="images/videoimage6.png" data-id="x5mYQJTqOWk">
                <div class="youtube_icon">
                <img src="images/youtube.svg">
                </div>
            </div>
        </div>

        <div class="gallery">
            <div class="item">
                <img src="images/videoimage7.png" data-id="lafECAi4F5k">
                <div class="youtube_icon">
                <img src="images/youtube.svg">
                </div>
            </div>
            <div class="item">
                <img src="images/videoimage8.png" data-id="VmiMcxLVVto">
                <div class="youtube_icon">
                <img src="images/youtube.svg">
                </div>
            </div>
            <div class="item">
                <img src="images/videoimage9.png" data-id="t4LTm5x1Gbw">
                <div class="youtube_icon">
                <img src="images/youtube.svg">
                </div>
            </div>
        </div>

        <div class="gallery">
            <div class="item">
                <img src="images/videoimage10.png" data-id="gyhd_4Bu0sc">
                <div class="youtube_icon">
                <img src="images/youtube.svg">
                </div>
            </div>
            <div class="item">
                <img src="images/videoimage11.png" data-id="Bvftn2VpyhU">
                <div class="youtube_icon">
                <img src="images/youtube.svg">
                </div>
            </div>
            <div class="item">
                <img src="images/videoimage12.png" data-id="ZD-ar9iOHaQ">
                <div class="youtube_icon">
                    <img src="images/youtube.svg">
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
    $(document).ready(function () {
        $("#video_id").click(function () {
            var isLoggedIn = <?php echo isset($_SESSION['logged_in']) && $_SESSION['logged_in'] ? 'true' : 'false'; ?>;
            
            if (!isLoggedIn) {
                $(".modal").css("display", "block");
            }
        });

        $(".item").click(function () {
            var isLoggedIn = <?php echo isset($_SESSION['logged_in']) && $_SESSION['logged_in'] ? 'true' : 'false'; ?>;
            
            if (!isLoggedIn) {
                $(".modal").css("display", "block");
            } else {
                let youtube_id = $(this).find("img").attr("data-id");
                $(this).find(".youtube_icon").addClass("active");
                $(this).siblings().find(".youtube_icon").removeClass("active");
                let newUrl = `https://www.youtube.com/embed/${youtube_id}`;
                $("#video_id").attr("src", newUrl);
            }
        });

        $("#closeModal").click(function () {
            $(".modal").css("display", "none");
            $(".item .youtube_icon").removeClass("active");
        });

        $("#continueLogin").click(function () {
            window.location.href = "Account1.php";
        });
    });
</script>
    <script>
        $(document).ready(function(){
            $(".menu-icon").click(function(){
                $(".menu").slideToggle();
            });
        });
    </script>
<div class="modal">
    <div class="modal-content">
        <p style="margin-bottom: 20px;">Please continue to login first.</p>
        <div class="modal-buttons">
            <button id="continueLogin">Continue to login</button>
            <button id="closeModal">Close</button>
        </div>
    </div>
</div>
    
</body>
</html>
