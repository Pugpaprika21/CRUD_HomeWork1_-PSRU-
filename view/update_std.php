<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../upload/cs_psru.png" type="image/x-icon">
    <title>เเก้ไขข้อมูลนักศึกษา</title>
</head>
<body>
    <h4>เเก้ไขข้อมูลนักศึกษา</h4>
    <form action="../backend/getData_update_stdID.php" method="GET">
        <input type="text" name="std_id">
        <input type="submit" value="เเก้ไข">
    </form>
    <br>
    <a href="index.php?roleback=index_page&from=update_std_page">ย้อนกลับหน้าเเรก</a>
    
</body>
</html>