<?php
session_start();

if (!isset($_SESSION['username'])) {
    die("User not logged in");
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    require "connection.php";
    $username = $_SESSION['username'];

    try {
        $conn = Connect();
        $sql = "SELECT video_id FROM watched_videos WHERE username = :username";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username);
        $stmt->execute();
        $watched_videos = $stmt->fetchAll(PDO::FETCH_COLUMN);

        header('Content-Type: application/json');
        echo json_encode(array("status" => "success", "watched_videos" => $watched_videos));
    } catch (PDOException $ex) {

        $response = array("status" => "error", "message" => "Database error: " . $ex->getMessage());

        header('Content-Type: application/json');
        echo json_encode($response);
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!isset($_SESSION['username'])) {
        die("User not logged in");
    }

    require "connection.php";

    $username = $_SESSION['username'];

    if (isset($_POST['video_id'])) {

        $videoID = $_POST['video_id'];

        try {
            $conn = Connect();

            $sql = "INSERT INTO watched_videos (username, video_id) VALUES (:username, :video_id)";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':video_id', $videoID);
            $stmt->execute();

            $response = array("status" => "success");

            header('Content-Type: application/json');
            echo json_encode($response);
        } catch (PDOException $ex) {
            $response = array("status" => "error", "message" => "Database error: " . $ex->getMessage());

            header('Content-Type: application/json');
            echo json_encode($response);
        }
    }
} else {
    http_response_code(405); 
    echo json_encode(array("status" => "error", "message" => "Invalid request method"));
}
?>
