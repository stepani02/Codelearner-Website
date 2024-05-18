<?php
session_start();
require 'connection.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_SESSION['username']) && isset($_POST['score'])) {
    $username = $_SESSION['username'];
    $score = $_POST['score'];

    $conn = Connect();

    try {
      $stmt = $conn->prepare("INSERT INTO quiz_score (username, quiz_score, marked) VALUES (:username, :score, NOW())");
      $stmt->bindParam(':username', $username);
      $stmt->bindParam(':score', $score);
      $stmt->execute();
      
      echo 'Quiz result stored successfully.';
    } catch (PDOException $ex) {

      echo 'Error storing quiz result: ' . $ex->getMessage();
    }
  } else {

    echo 'Invalid request.';
  }
}
?>
