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
    <title>ลบข้อมูลนักศึกษา</title>
</head>

<body>
    <h4>ลบข้อมูลนักศึกษา</h4>
    <form action="../backend/getDate_delete_stdID.php" method="GET">
        ลบข้อมูลนักศึกษา : <input type="text" name="std_id" required>
        <input type="submit" value="ลบข้อมูล">
    </form>
    <br>
    <a href="index.php?roleback=index_page&from=delete_std_page">ย้อนกลับหน้าเเรก</a>
</body>

</html>