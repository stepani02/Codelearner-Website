<?php
session_start();

require 'connection.php';
$connect = Connect();
$errors = array();

if (!isset($_SESSION['username'])) {
    header("Location: login.php"); 
    exit();
}

try {
    $query = "SELECT fname, lname, email, username FROM tbl_userinfo WHERE username = :username";
    $query_run = $connect->prepare($query);
    $query_run->bindParam(':username', $_SESSION['username']);
    $query_run->execute();
    $user_data = $query_run->fetch(PDO::FETCH_ASSOC);

    if (!$user_data) {
        header("Location: error_page.php");
        exit();
    }

    $fname = $user_data['fname'];
    $lname = $user_data['lname'];
    $email = $user_data['email'];
    $user = $user_data['username'];

} catch (PDOException $e) {
    echo $e->getMessage();
}
?>


<?php
if (!isset($_SESSION['username'])) {
    header("Location: login.php"); 
    exit();
}

$firstName = $_SESSION['first_name'];

if (isset($_SESSION['profile_update_errors'])) {
    $errors = $_SESSION['profile_update_errors'];
    unset($_SESSION['profile_update_errors']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/updateProfile.css">
    <title>Update Profile</title>
</head>
<body>

<header>
        <nav>
            <a href="main.php" class="logo">
                <span style="color: #ffa559">&lt;</span>
                <span style="color: black">Code</span>
                <span style="color: white">Learner</span>
                <span style="color: #ffa559">&gt;</span>
            </a>
            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="menu-icon">&#9776;</label>
            <ul class="menu">
                <li><a href="main.php" style="color: #ffa559;">Home</a></li>
                <li><a href="WorkplaceMain.php">Workplace</a></li>
                <li><a href="aboutusMain.php">About Us</a></li>
                <li><a href="updateProfile.php">Settings</a></li>
                <li><a href="index.php">Logout</a></li>
            </ul>
        </nav>
    </header>

    <div class="signup-form">
        <h1 class="signup-title">
            <a style="color: orange;">User Profile</a>
        </h1>

        <form id="profileForm" method="post" action="updateProfile101.php" onsubmit="return validateForm();">
        <label for="first-name">First Name</label>
        <input type="text" id="first_name" name="first_name" placeholder="Enter your First Name" required value="<?php echo $fname; ?>" disabled>

        <label for="last-name">Last Name</label>
        <input type="text" id="last_name" name="last_name" placeholder="Enter your Last Name" required value="<?php echo $lname; ?>" disabled>


        <label for="email-address">Email Address</label>
        <input type="email" id="email_address" name="email_address" placeholder="Enter your Email Address" required autocomplete="email" value="<?php echo $email; ?>" disabled>

        <div class="error-message"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></div>


        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Enter your Username" autocomplete="username" value="<?php echo $user; ?>" disabled>
   
            <div class="error-message"><?php echo isset($errors['username']) ? $errors['username'] : ''; ?></div>

            <div id="buttonContainer">
            <button type="button" id="editBtn" onclick="makeEditable()">Edit</button>
      
            <button type="button" id="cancelBtn" onclick="cancelEdit()" style="display: none;">Cancel</button>
            <button type="submit" id="saveBtn" name="save_btn" style="display: none;">Save</button>
        </div>
        <input type="hidden" name="original_username" value="<?php echo $user; ?>">
        </form>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
        $(document).ready(function(){
            $(".menu-icon").click(function(){
                $(".menu").slideToggle();
            });
        });
    </script>

<script>
  
    var originalFname = "<?php echo $fname; ?>";
    var originalLname = "<?php echo $lname; ?>";
    var originalEmail = "<?php echo $email; ?>";
    var originalUsername = "<?php echo $user; ?>";

    function makeEditable() {
        const form = document.getElementById("profileForm");
        const inputFields = form.querySelectorAll("input[disabled]");
        const editBtn = document.getElementById("editBtn");
        const cancelBtn = document.getElementById("cancelBtn");
        const saveBtn = document.getElementById("saveBtn");

       
        inputFields.forEach((field) => {
            field.removeAttribute("disabled");
        });

     
        editBtn.style.display = "none";
        cancelBtn.style.display = "inline-block";
        saveBtn.style.display = "inline-block";
    }

    function cancelEdit() {
        const form = document.getElementById("profileForm");
        const inputFields = form.querySelectorAll("input:not([type='submit'])");
        const editBtn = document.getElementById("editBtn");
        const cancelBtn = document.getElementById("cancelBtn");
        const saveBtn = document.getElementById("saveBtn");

        form.querySelector("#first_name").value = originalFname;
        form.querySelector("#last_name").value = originalLname;
        form.querySelector("#email_address").value = originalEmail;
        form.querySelector("#username").value = originalUsername;

        inputFields.forEach((field) => {
            field.setAttribute("disabled", "disabled");
        });

        editBtn.style.display = "inline-block";
        cancelBtn.style.display = "none";
        saveBtn.style.display = "none";
    }

    document.getElementById("cancelBtn").addEventListener("click", function(event) {
        event.preventDefault();
        cancelEdit();
    });
    </script>





</body>
</html>