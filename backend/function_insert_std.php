<?php

    function insertSTD(
        $std_id,
        $std_prefix,
        $std_firstName,
        $std_lastName,
        $std_birthDay,
        $std_email,
        $std_mobileNumber,
        $std_faculty,
        $std_branch,
        $std_img,
        $db 
    ) {
        //
        $query = $db->query(
            "INSERT INTO student (
                std_id, 
                std_prefix, 
                std_firstName, 
                std_lastName,
                std_birthDay,
                std_email,
                std_mobileNumber,
                std_faculty,
                std_branch,
                std_img
            ) VALUES (
                '$std_id',
                '$std_prefix',
                '$std_firstName',
                '$std_lastName',
                '$std_birthDay',
                '$std_email',
                '$std_mobileNumber',
                '$std_faculty',
                '$std_branch',
                '$std_img'
            )"
        );

        if ($query) {
            return $query;
        } 
    }
?>