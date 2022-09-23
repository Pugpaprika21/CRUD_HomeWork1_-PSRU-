<?php

include "../backend/dbconnect.php";  
include "../backend/function_delete_std.php";

$std_id = $_GET["std_id"];

if ($std_id)  {
    //
    $deleteByID = deleteByID(
        $std_id,
        dbconn()
    );
    //
    $_SESSION["std_id"] = $std_id;
    $_SESSION["delete_success"] = "ลบข้อมูลสำเร็จ";
    header("location: ../view/selectAll_std.php?delete_std=success");
} else {
    $_SESSION["delete_error"] = "ลบข้อมูลไม่สำเร็จ";
    header("location: ../view/delete_std.php?delete_std=error");
}


?>