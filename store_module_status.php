<?php
require 'connection.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (!isset($_SESSION['username'])) {
    http_response_code(401);
    die("User is not logged in.");
  }

  if (!isset($_POST['module'])) {
    http_response_code(400); 
    die("Module number is missing.");
  }

  $moduleNumber = $_POST['module'];

  $username = $_SESSION['username'];

  try {
    $conn = Connect();

    $checkStmt = $conn->prepare("SELECT id FROM done_module WHERE username = ? AND module = ?");
    $checkStmt->execute([$username, $moduleNumber]);

    if ($checkStmt->rowCount() > 0) {
      $updateStmt = $conn->prepare("UPDATE done_module SET marked = NOW() WHERE username = ? AND module = ?");
      $updateStmt->execute([$username, $moduleNumber]);

      http_response_code(200); 
      echo "Module $moduleNumber marked as done!";
    } else {
   
      $insertStmt = $conn->prepare("INSERT INTO done_module (username, module, marked) VALUES (?, ?, NOW())");
      $insertStmt->execute([$username, $moduleNumber]);

      http_response_code(200); 
      echo "Module $moduleNumber marked as done!";
    }

    $conn = null; 
  } catch (PDOException $ex) {
    http_response_code(500); 
    die("Error storing module status: " . $ex->getMessage());
  }
} else {
  http_response_code(405); 
  die("Method not allowed.");
}
?>
