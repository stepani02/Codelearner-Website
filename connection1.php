<?php
function Connect (){
    $dbhost = "localhost";
    $dbuser = "if0_34697126";
    $dbpass = "uEcH2yHSmKS";
    $dbname = "	sql306.infinityfree.com";

    try {
        $conn = new PDO ("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;
    }
    catch (PDOException $ex){
        die ("Could not connect to Database $dbname: " . $ex->getMessage());
    }
}
?>
