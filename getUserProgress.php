<?php
session_start();

if (!isset($_SESSION['username'])) {
    die("User not logged in");
}

require "connection.php";

$username = $_SESSION['username'];

try {
    
    $conn = Connect();

    $sql_videos = "SELECT video_id FROM watched_videos WHERE username = :username";
    $stmt_videos = $conn->prepare($sql_videos);
    $stmt_videos->bindParam(':username', $username);
    $stmt_videos->execute();
    $watched_videos = $stmt_videos->fetchAll(PDO::FETCH_COLUMN);

    $sql_modules = "SELECT module FROM done_module WHERE username = :username";
    $stmt_modules = $conn->prepare($sql_modules);
    $stmt_modules->bindParam(':username', $username);
    $stmt_modules->execute();
    $watched_modules = $stmt_modules->fetchAll(PDO::FETCH_COLUMN);

    header('Content-Type: application/json');
    echo json_encode(array("status" => "success", "watched_videos" => $watched_videos, "watched_modules" => $watched_modules));
} catch (PDOException $ex) {
   
    $response = array("status" => "error", "message" => "Database error: " . $ex->getMessage());

    header('Content-Type: application/json');
    echo json_encode($response);
}
?>
