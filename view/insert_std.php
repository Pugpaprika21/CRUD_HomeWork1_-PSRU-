<?php
include "../backend/dbconnect.php";
include "../backend/function_showAll_std.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../upload/cs_psru.png" type="image/x-icon">
    <title>เพิ่มข้อมูลนักศึกษา</title>
</head>

<body>
    <h4>เพิ่มข้อมูลนักศึกษา</h4> 
    <form action="../backend/getData_insert_std.php" method="POST" enctype="multipart/form-data">
        รหัสนักศึกษา : <input type="text" name="std_id" required>
        <br>
        คำนำหน้า
        <br>
        นาย :<input type="radio" name="std_prefix" value="นาย" required>
        <br>
        นาง :<input type="radio" name="std_prefix" value="นาง">
        <br>
        นางสาว :<input type="radio" name="std_prefix" value="นางสาว">
        <br>
        ชื่อ : <input type="text" name="std_firstName" required>
        <br><br>
        สกุล : <input type="text" name="std_lastName" required>
        <br><br>
        วันปีเกิด : <input type="date" name="std_birthDay" required>
        <br><br>
        อีเมล์ : <input type="email" name="std_email" required>
        <br><br>
        เบอร์มือถือ : <input type="text" name="std_mobileNumber" required>
        <br><br>
        คณะ : 
        <select name="std_faculty" required>
            <option disabled>กรุณาเลือกคณะ</option> 
            <option disabled>------------------------------------------------</option>
            <?php foreach(selectByMajor(dbconn()) as $major_list): ?>
                <option value="<?php echo $major_list["major_faculty"]; ?>">
                    <?php echo $major_list["major_id"]." : ".$major_list["major_faculty"]; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br><br>
        สาขา : 
        <select name="std_branch" required>
            <option disabled>กรุณาเลือกสาขา</option>
            <option disabled>------------------------------------------------</option>
            <?php foreach(selectByMajor(dbconn()) as $major_list): ?>
                <option value="<?php echo $major_list["major_name"]; ?>">
                    <?php echo $major_list["major_id"]." : ".$major_list["major_name"]; ?>
                </option>
            <?php endforeach; ?>
        </select>
        <br><br>
        อัฟโหลด : <input type="file" name="std_img" required>
        <br><br>
        <input type="submit" name="submit" value="เพิ่มข้อมูล">
        <a href="index.php?roleback=index_page&from=insert_std_page">ย้อนกลับหน้าเเรก</a>
    </form>

    
</body>

</html>

