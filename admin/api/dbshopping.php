<?php
    $db_host = 'localhost';
    $db_name = 'shopping';
    $db_user = 'root';
    $db_pass = '';

    header('Content-Type: application/json');
    date_default_timezone_set("Asia/Bangkok");

    try {
        $dsn = "mysql:host=$db_host;dbname=$db_name";
        $db = new PDO($dsn, $db_user, $db_pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "database is connected";

        // dev อยู่ default เป็น connected
        // echo json_encode(["message" => "database is connected"]);
    } catch(PDOException $e) {
        // echo $e->getMessage();
        echo json_encode(["error" => $e->getMessage()]);
    }
?>