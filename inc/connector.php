<?php

function dbQuery($query)

{
    try {
        require("settings.php");
        $conn = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = $query;

       $result = $conn->query($sql);

        //echo "Connected to DB: successfully";

    } catch (PDOException $e) {
        echo "Connection to DB: failed: " . $e->getMessage();
    }

    //close connection to DB
    $conn = null;

    return $result;
}





