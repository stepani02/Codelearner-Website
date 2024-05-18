<?php
session_start();

require 'connection.php';
$connect = Connect();
$errors = array();

try {
    if (isset($_POST['submit_btn'])) {
        $fname = $_POST['first_name'];
        $lname = $_POST['last_name'];
        $email = $_POST['email_address'];
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $cnfrmpass = $_POST['confirm_password'];

        $check_email_query = "SELECT COUNT(*) as email_count FROM tbl_userinfo WHERE email = :email";
        $check_email_query_run = $connect->prepare($check_email_query);
        $check_email_data = [
            ':email' => $email
        ];
        $check_email_query_run->execute($check_email_data);
        $email_result = $check_email_query_run->fetch(PDO::FETCH_ASSOC);

        $check_user_query = "SELECT COUNT(*) as username_count FROM tbl_userinfo WHERE username = :user";
        $check_user_query_run = $connect->prepare($check_user_query);
        $check_user_data = [
            ':user' => $user
        ];
        $check_user_query_run->execute($check_user_data);
        $user_result = $check_user_query_run->fetch(PDO::FETCH_ASSOC);

        $pass = $_POST['password'];
        $cnfrmpass = $_POST['confirm_password'];

        if ($pass !== $cnfrmpass) {
            $errors['cnfrmpass'] = "Password did not match.";
        }

        $hashedPassword = password_hash($pass, PASSWORD_DEFAULT);

        if ($email_result['email_count'] > 0) {
            $errors['email'] = "Email already taken. Please choose a different one.";
        }

        if ($user_result['username_count'] > 0) {
            $errors['username'] = "Username already taken. Please choose a different one.";
        }

        if (empty($errors)) {
            $query = "INSERT INTO tbl_userinfo (fname, lname, email, username, password, cnfrmpass)
                      VALUES (:fname, :lname, :email, :user, :pass, :cnfrmpass)";
        
            $query_run = $connect->prepare($query);

            $data = [
                ':fname' => $fname,
                ':lname' => $lname,
                ':email' => $email,
                ':user' => $user,
                ':pass' => $hashedPassword, 
                ':cnfrmpass' => $cnfrmpass
            ];

    $query_execute = $query_run->execute($data);

            if ($query_execute) {
                $_SESSION['registration_successful'] = true;
            }
        }
    }
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/signup1.css">
    <title>Document</title>
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

    <div class="signup-form">
        <h1 class="signup-title">
            <a href="Account1.php" class="login-link">Login</a> /
            <a style="color: orange;">Sign Up</a>
        </h1>

        <form method="post" onsubmit="return validateForm();">
            <label for="first-name">First Name</label>
            <input type="text" id="first_name" name="first_name" placeholder="Enter your First Name" required value="<?php echo isset($_POST['first_name']) ? $_POST['first_name'] : ''; ?>">

            <label for="last-name">Last Name</label>
            <input type="text" id="last_name" name="last_name" placeholder="Enter your Last Name" required value="<?php echo isset($_POST['last_name']) ? $_POST['last_name'] : ''; ?>">

            <label for="email-address">Email Address</label>
            <input type="email" id="email_address" name="email_address" placeholder="Enter your Email Address" required autocomplete="email" value="<?php echo isset($_POST['email_address']) ? $_POST['email_address'] : ''; ?>">

            <div class="error-message"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></div>

            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your Username" autocomplete="username" value="<?php echo isset($_POST['username']) ? $_POST['username'] : ''; ?>">
          
            <div class="error-message"><?php echo isset($errors['username']) ? $errors['username'] : ''; ?></div>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <label for="confirm-password">Confirm Password</label>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm your password" required>

            <div class="error-message"><?php echo isset($errors['cnfrmpass']) ? $errors['cnfrmpass'] : ''; ?></div>

            <button type="submit" name="submit_btn" id="submit_btn">Sign Up</button>
        </form>
    </div>

    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <p>Registration successful! You can now log in using your credentials.</p>
            <button onclick="redirectToLogin()">Continue to Login</button>
        </div>
    </div>

    <script src="validatereg.js"></script> 
    <script>
    window.onload = function () {
        var registrationSuccessful = <?php echo isset($_SESSION['registration_successful']) && $_SESSION['registration_successful'] ? 'true' : 'false'; ?>;
        if (registrationSuccessful) {
            showRegistrationSuccessMessage();
           
            <?php unset($_SESSION['registration_successful']); ?>
        }
    };
    </script>
</body>
</html>