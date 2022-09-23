<?php
include "../backend/dbconnect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../upload/cs_psru.png" type="image/x-icon">
    <title>หน้าเเรก</title>
</head>
<body>
<a href="selectAll_std.php?select_all_std=page1">เเสดงข้อมูลนักศึกษา</a>
<br><br>
<a href="insert_std.php?insert_all_std=page2">เพิ่มข้อมูลนักศึกษา</a>
<br><br>
<a href="update_std.php?update_std_ID=page3">แก้ไขข้อมูลนักศึกษา</a>  
<br><br>
<a href="delete_std.php?delete_std_ID=page4">ลบข้อมูลนักศึกษา</a> 
</body>
</html>
