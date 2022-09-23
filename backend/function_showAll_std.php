<?php

    error_reporting(0);
    
    function showAllstd($db) {
        $std_list = [];
        $query = $db->query(
            "SELECT * FROM student" 
        );

        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                array_push($std_list, $row);
            }
        } 
        return $std_list;
    }

    function selectByID($db, $std_id) {
        $std_list = [];
        $query = $db->query(
            "SELECT * FROM student WHERE std_id = $std_id"
        );
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                array_push($std_list, $row);
            }
        }
        
        return $std_list;
    }
    //major
    function selectByMajor($db) {
        $major_list = [];
        $query = $db->query(
            "SELECT * FROM major ORDER BY major_id ASC" 
        );
        if ($query->num_rows > 0) {
            while ($row = $query->fetch_assoc()) {
                array_push($major_list, $row);
            }
        }
        return $major_list;
    }

?>
