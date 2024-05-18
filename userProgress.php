<?php
session_start();
require 'connection.php';
if (!isset($_SESSION['username'])) {
   
    exit();
}

$firstName = $_SESSION['first_name'];
$username = $_SESSION['username'];

function isVideoWatched($conn, $username, $videoId) {
    try {
        $stmt = $conn->prepare("SELECT * FROM watched_videos WHERE username = :username AND video_id = :videoId");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':videoId', $videoId);
        $stmt->execute();
        return $stmt->rowCount() > 0;
    } catch (PDOException $ex) {
        die("Error: " . $ex->getMessage());
    }
}

function isModuleRead($conn, $username, $moduleNumber) {
  try {
      $stmt = $conn->prepare("SELECT * FROM done_module WHERE username = :username AND module = :moduleNumber");
      $stmt->bindParam(':username', $username);
      $stmt->bindParam(':moduleNumber', $moduleNumber);
      $stmt->execute();
      return $stmt->rowCount() > 0;
  } catch (PDOException $ex) {
      die("Error: " . $ex->getMessage());
  }
}

function getUserQuizScores($conn, $username) {
    try {
        $stmt = $conn->prepare("SELECT quiz_score FROM quiz_score WHERE username = :username");
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    } catch (PDOException $ex) {
        die("Error: " . $ex->getMessage());
    }
}

$conn = Connect();

$quizScores = getUserQuizScores($conn, $username);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/userProgress.css">
    <title>Document</title>
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
            <div class="welcome-message">
                <?php echo "Welcome, $firstName!"; ?>
            </div>
            <input type="checkbox" id="menu-toggle">
            <label for="menu-toggle" class="menu-icon">&#9776;</label>
            <ul class="menu">
                <li><a href="main.php" style="color: #ffa559;">Home</a></li>
                <li><a href="WorkplaceMain.php">Workplace</a></li>
                <li><a href="aboutusMain.php">About Us</a></li>
                <li><a href="updateProfile.php">Settings</a></li>
                <li><a href="main.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    

    <div class="progress-report-form">
    <h2 style="margin-bottom: 25px;">Progress Report</h2>


    <form method="post" onsubmit="return validateForm();">
        <div class="input-group">
            <label for="ytvideo1">Video Part 1</label>
            <input type="text" id="29l2qxSJSIw" name="ytvideo1" placeholder="" required disabled
            <?php if (isVideoWatched($conn, $username, '29l2qxSJSIw', 'video_id')) echo 'value="DONE"'; ?>> 
        </div>

        <div class="input-group">
            <label for="ytvideo2">Video Part 2</label>
            <input type="text" id="pU8B8dEMeTo" name="ytvideo2" placeholder="" required disabled
            <?php if (isVideoWatched($conn, $username, 'pU8B8dEMeTo', 'video_id')) echo 'value="DONE"'; ?>>
        </div>

        <div class="input-group">
            <label for="ytvideo3">Video Part 3</label>
            <input type="text" id="EP8JQhiQb4Q" name="ytvideo3" placeholder="" required disabled
            <?php if (isVideoWatched($conn, $username, 'EP8JQhiQb4Q', 'video_id')) echo 'value="DONE"'; ?>>
        </div>

        <div class="input-group">
            <label for="ytvideo4">Video Part 4</label>
            <input type="text" id="KC_TB9dsZ5g" name="ytvideo4" placeholder="" required disabled
            <?php if (isVideoWatched($conn, $username, 'KC_TB9dsZ5g', 'video_id')) echo 'value="DONE"'; ?>>
        </div>

        <div class="input-group">
            <label for="ytvideo5">Video Part 5</label>
            <input type="text" id="C8HuXXlmQLc" name="ytvideo5" placeholder="" required disabled
            <?php if (isVideoWatched($conn, $username, 'C8HuXXlmQLc', 'video_id')) echo 'value="DONE"'; ?>>
        </div>

        <div class="input-group">
            <label for="ytvideo6">Video Part 6</label>
            <input type="text" id="x5mYQJTqOWk" name="ytvideo6" placeholder="" required disabled
            <?php if (isVideoWatched($conn, $username, 'x5mYQJTqOWk', 'video_id')) echo 'value="DONE"'; ?>>
        </div>

        <div class="input-group">
            <label for="ytvideo7">Video Part 7</label>
            <input type="text" id="lafECAi4F5k" name="ytvideo7" placeholder="" required disabled
            <?php if (isVideoWatched($conn, $username, 'lafECAi4F5k', 'video_id')) echo 'value="DONE"'; ?>>
        </div>

        <div class="input-group">
            <label for="ytvideo8">Video Part 8</label>
            <input type="text" id="VmiMcxLVVto" name="ytvideo8" placeholder="" required disabled
            <?php if (isVideoWatched($conn, $username, 'VmiMcxLVVto', 'video_id')) echo 'value="DONE"'; ?>>
        </div>

        <div class="input-group">
            <label for="ytvideo9">Video Part 9</label>
            <input type="text" id="t4LTm5x1Gbw" name="ytvideo9" placeholder="" required disabled
            <?php if (isVideoWatched($conn, $username, 't4LTm5x1Gbw', 'video_id')) echo 'value="DONE"'; ?>>
        </div>

        <div class="input-group">
            <label for="ytvideo10">Video Part 10</label>
            <input type="text" id="gyhd_4Bu0sc" name="ytvideo10" placeholder="" required disabled
            <?php if (isVideoWatched($conn, $username, 'gyhd_4Bu0sc', 'video_id')) echo 'value="DONE"'; ?>>
        </div>

        <div class="input-group">
            <label for="ytvideo11">Video Part 11</label>
            <input type="text" id="Bvftn2VpyhU" name="ytvideo11" placeholder="" required disabled
            <?php if (isVideoWatched($conn, $username, 'Bvftn2VpyhU', 'video_id')) echo 'value="DONE"'; ?>>
        </div>

        <div class="input-group">
            <label for="ytvideo12">Video Part 12</label>
            <input type="text" id="ZD-ar9iOHaQ" name="ytvideo12" placeholder="" required disabled
            <?php if (isVideoWatched($conn, $username, 'ZD-ar9iOHaQ', 'video_id')) echo 'value="DONE"'; ?>>
        </div>
    </form>
</div>

<div class="progress-report-form">
  <h2 style="margin-bottom: 25px;">Modules</h2>

  <form method="post" onsubmit="return validateForm2();">
    <div class="input-group">
      <label for="module1">Module 1</label>
      <input type="text" id="1" name="module1" placeholder="" required disabled
      <?php if (isModuleRead($conn, $username, '1', 'module')) echo 'value="DONE"'; ?>>
    </div>

    <div class="input-group">
      <label for="module1">Module 2</label>
      <input type="text" id="2" name="module2" placeholder="" required disabled
      <?php if (isModuleRead($conn, $username, '2', 'module')) echo 'value="DONE"'; ?>>
    </div>

    <div class="input-group">
      <label for="module1">Module 3</label>
      <input type="text" id="3" name="module3" placeholder="" required disabled
      <?php if (isModuleRead($conn, $username, '3', 'module')) echo 'value="DONE"'; ?>>
    </div>

    <div class="input-group">
      <label for="module1">Module 4</label>
      <input type="text" id="4" name="module4" placeholder="" required disabled
      <?php if (isModuleRead($conn, $username, '4', 'module')) echo 'value="DONE"'; ?>>
    </div>

    <div class="input-group">
      <label for="module1">Module 5</label>
      <input type="text" id="5" name="module5" placeholder="" required disabled
      <?php if (isModuleRead($conn, $username, '5', 'module')) echo 'value="DONE"'; ?>>
    </div>

    <div class="input-group">
      <label for="module1">Module 6</label>
      <input type="text" id="6" name="module6" placeholder="" required disabled
      <?php if (isModuleRead($conn, $username, '6', 'module')) echo 'value="DONE"'; ?>>
    </div>

    <div class="input-group">
      <label for="module1">Module 7</label>
      <input type="text" id="7" name="module7" placeholder="" required disabled
      <?php if (isModuleRead($conn, $username, '7', 'module')) echo 'value="DONE"'; ?>>
    </div>

    <div class="input-group">
      <label for="module1">Module 8</label>
      <input type="text" id="8" name="module8" placeholder="" required disabled
      <?php if (isModuleRead($conn, $username, '8', 'module')) echo 'value="DONE"'; ?>>
    </div>

    <div class="input-group">
      <label for="module1">Module 9</label>
      <input type="text" id="9" name="module9" placeholder="" required disabled
      <?php if (isModuleRead($conn, $username, '9', 'module')) echo 'value="DONE"'; ?>>
    </div>

    <div class="input-group">
      <label for="module1">Module 10</label>
      <input type="text" id="10" name="module10" placeholder="" required disabled
      <?php if (isModuleRead($conn, $username, '10', 'module')) echo 'value="DONE"'; ?>>
    </div>
  </form>
</div>

<div class="progress-report-form">
        <h2 style="margin-bottom: 25px;">Quiz Scores</h2>
        <?php if (!empty($quizScores)): ?>
            <div class="input-group">
                <label for="quizScore">Quiz 1 Score</label>
                <input type="text" id="quizScore" name="quizScore" value="<?php echo $quizScores[0]; ?>" disabled>
            </div>

            <?php for ($i = 1; $i < count($quizScores); $i++): ?>
                <div class="input-group">
                    <label for="quizScore<?php echo $i + 1; ?>">Quiz <?php echo $i + 1; ?> Score</label>
                    <input type="text" id="quizScore<?php echo $i + 1; ?>" name="quizScore<?php echo $i + 1; ?>" value="<?php echo $quizScores[$i]; ?>" disabled>
                </div>
            <?php endfor; ?>

        <?php else: ?>
            <p>No quiz scores available.</p>
        <?php endif; ?>
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