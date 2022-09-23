<?php

include "../backend/dbconnect.php";  
include "../backend/function_update_std.php";

if (isset($_POST["update"])) {
    //
    $std_id = $_POST["std_id"];
    $std_prefix = $_POST["std_prefix"]; 
    $std_firstName = $_POST["std_firstName"];
    $std_lastName = $_POST["std_lastName"];
    $std_birthDay = $_POST["std_birthDay"];
    $std_email = $_POST["std_email"];
    $std_mobileNumber = $_POST["std_mobileNumber"];
    $std_faculty = $_POST["std_faculty"];
    $std_branch = $_POST["std_branch"];
    //
    $std_img = $_FILES["std_img"]["name"];
    $target = "../upload/".basename($std_img);
    //
    if (move_uploaded_file($_FILES['std_img']['tmp_name'], $target)) {
        $updateByID = updateByID(
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
            dbconn()
        );
        
        $_SESSION["update_succ"] = "เเก้ไขข้อมูลสำเร็จ";
        header("location: ../view/selectAll_std.php?update_success=success");
    } else {
        $_SESSION["update_fail"] = "เเก้ไขข้อมูลไม่สำเร็จ";
        header("location: ../view/update_std2.php?update_error=error");
    }
}

?>