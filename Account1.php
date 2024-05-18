<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/account1.css">
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
                <li><a href="index.php" >Home</a></li>
                <li><a href="Workplace.php">Workplace</a></li>
                <li><a href="Account1.php" style="color: #ffa559;">Account</a></li>
                <li><a href="AboutUs.php">About Us</a></li>
            </ul>
          </div>
        </div>
    </nav> 

    <div class="login-form">
    <h1 class="signup-title">    
            <a style="color: orange;">Login</a>  /  
            <a href="signup1.php" class="signup-link">Sign Up</a>
        </h1>

        <form method="post" action="login.php">

    <label for="username">Username</label>
    <input type="text" id="username" name="username" placeholder="Enter your Username" autocomplete="username">

    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Enter your password" required>

    <button type="submit" name="submit_btn" id="submit_btn">Login</button>
    </form>
    </div>


<div id="myModal" class="modal">

  <div class="modal-content">
    <span class="close">&times;</span>
    <p id="modalMessage">Invalid credentials</p>
    <button id="modalOKBtn">OK</button>
  </div>
</div>

<script>

document.addEventListener('DOMContentLoaded', function () {
  var modal = document.getElementById('myModal');
  var btn = document.getElementById('modalOKBtn');
  var span = document.getElementsByClassName('close')[0];


  if (window.location.search.includes('error=Invalid+credentials')) {
    modal.style.display = 'block';
  }

 
  function closeModal() {
    modal.style.display = 'none';
  }

  btn.onclick = closeModal;
  span.onclick = closeModal;

  
  window.onclick = function (event) {
    if (event.target === modal) {
      closeModal();
    }
  };
});
</script>


</body>
</html>
