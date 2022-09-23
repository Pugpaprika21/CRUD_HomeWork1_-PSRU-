<?php

    function deleteByID($std_id, $db) {
        $query = $db->query(
            "DELETE FROM student WHERE std_id = $std_id"
        );

        if ($query) {
            return $query;
        }
    }

?>