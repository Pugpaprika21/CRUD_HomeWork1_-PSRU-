<?php

include "../backend/dbconnect.php";
include "../backend/function_insert_std.php";

if (isset($_POST["submit"])) {
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
    $std_img = $_FILES["std_img"]["name"];
    //
    $target = "../upload/".basename($std_img);
    //
    if (move_uploaded_file($_FILES['std_img']['tmp_name'], $target)) {
        $insertSTD = insertSTD(
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
        //
        $_SESSION["insert_succ"] = "เพิ่มข้อมูลสำเร็จ";
        header("location: ../view/selectAll_std.php?insert_success=success");
    
    } else {
        $_SESSION["insert_fail"] = "เพิ่มข้อมูลไม่ได้";
        header("location: ../view/insert_std.php?insert_error=error");
    }
}
?>


