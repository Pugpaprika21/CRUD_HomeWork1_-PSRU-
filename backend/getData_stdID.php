<?php

include "../backend/dbconnect.php";
include "../backend/function_showAll_std.php";


$std_id = $_GET["std_id"];

if ($std_id)  {
    //
    $selectByID = selectByID(dbconn(), $std_id);
    $_SESSION["std_id"] = $std_id;
    $_SESSION["find_succ"] = "แสดงข้อมูลที่ค้นพบ";
    header("location: ../view/selectAll_std.php?std_id=$std_id");

} else {
    header("location: ../view/selectAll_std.php");
}

?>