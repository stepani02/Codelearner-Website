<?php
session_start();
include "connection.php";

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = validate($_POST['username']);
    $password = validate($_POST['password']);

    if (empty($username)) {
        header("Location: Account1.php?error=Username is required");
        exit();
    } else if (empty($password)) {
        header("Location: Account1.php?error=Password is required");
        exit();
    }

    $conn = Connect(); 
    $sql = "SELECT username, password FROM tbl_userinfo WHERE username = :username";

    try {
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
           
            $hashedPasswordFromDB = $result['password'];
            if (password_verify($password, $hashedPasswordFromDB)) {
                
                $sql_get_firstname = "SELECT fname FROM tbl_userinfo WHERE username = :username";
                $stmt_get_firstname = $conn->prepare($sql_get_firstname);
                $stmt_get_firstname->bindParam(':username', $username, PDO::PARAM_STR);
                $stmt_get_firstname->execute();
                $user = $stmt_get_firstname->fetch(PDO::FETCH_ASSOC);

                if ($user) {
                    
                    $_SESSION['username'] = $username;
                    $_SESSION['first_name'] = $user['fname'];
                    $_SESSION['logged_in'] = true; 

                    header("Location: main.php");
                    exit();
                } else {
                    
                    header("Location: Account1.php?error=User+not+found");
                    exit();
                }
            } else {
                
                header("Location: Account1.php?error=Invalid+credentials");
                exit();
            }
        } else {
            
            header("Location: Account1.php?error=Invalid+credentials");
            exit();
        }
    } catch (PDOException $ex) {
        die("Error: " . $ex->getMessage());
    }
}
?>
