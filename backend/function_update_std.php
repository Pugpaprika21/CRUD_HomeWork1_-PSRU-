<?php

    function updateByID(
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
        $query = $db->query(
            "UPDATE student SET 
                std_prefix = '$std_prefix',
                std_firstName = '$std_firstName',
                std_lastName = '$std_lastName',
                std_birthDay = '$std_birthDay',
                std_email = '$std_email',
                std_mobileNumber = '$std_mobileNumber',
                std_faculty = '$std_faculty',
                std_branch = '$std_branch',
                std_img = '$std_img'
            WHERE std_id = $std_id"
        );

        if ($query) {
            return $query;
        } 
    }
    
?>