<?php

    session_start();
    
    function dbconn() {
        $conn = new mysqli(
            $db_host = "localhost",
            $db_user = "6012231021",
            $db_pass = "1021",
            $db_name = "6012231021"
        );
        /* $conn = new mysqli(
            $db_host = "localhost",
            $db_user = "root",
            $db_pass = "",
            $db_name = "6012231021" 
        ); */
        $conn->set_charset("utf8");
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        return $conn;
    }   
?>