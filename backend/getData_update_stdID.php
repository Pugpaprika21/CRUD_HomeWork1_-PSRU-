<?php

include "../backend/dbconnect.php"; 

$std_id = $_GET["std_id"];

if ($std_id) {
    //
    $_SESSION["std_id"] = $std_id; 
    header("location: ../view/update_std2.php?update_stdID=update_page");
} else {
    header("location: update_std.php?update_std_error=error");
}

?>