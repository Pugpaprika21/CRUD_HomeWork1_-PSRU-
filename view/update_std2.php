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
    <title>เเก้ไขข้อมูลนักศึกษา</title>
</head>

<body>
    <h4>เเก้ไขข้อมูลนักศึกษา</h4>
    <div id="update-stdID">
        <?php foreach (selectByID(dbconn(), $_SESSION["std_id"]) as $std_list) :?>
            <form action="../backend/getData_update_std_all.php" method="POST" enctype="multipart/form-data">
                รหัสนักศึกษา : <input type="text" name="std_id" value="<?php echo $std_list["std_id"]; ?>" readonly>
                <br>
                คำนำหน้า
                <br>
                นาย :<input type="radio" name="std_prefix" value="นาย" <?php echo ($std_list["std_prefix"] == "นาย") ? "checked" : ""; ?>>
                <br>
                นาง :<input type="radio" name="std_prefix" value="นาง" <?php echo ($std_list["std_prefix"] == "นาง") ? "checked" : ""; ?>>
                <br>
                นางสาว :<input type="radio" name="std_prefix" value="นางสาว" <?php echo ($std_list["std_prefix"] == "นางสาว") ? "checked" : ""; ?>>
                <br>
                ชื่อ : <input type="text" name="std_firstName" value="<?php echo $std_list["std_firstName"]; ?>">
                <br><br>
                สกุล : <input type="text" name="std_lastName" value="<?php echo $std_list["std_lastName"]; ?>">
                <br><br>
                วันปีเกิด : <input type="date" name="std_birthDay" value="<?php echo $std_list["std_birthDay"]; ?>">
                <br><br>
                อีเมล์ : <input type="email" name="std_email" value="<?php echo $std_list["std_email"]; ?>">
                <br><br>
                เบอร์มือถือ : <input type="text" name="std_mobileNumber" value="<?php echo $std_list["std_mobileNumber"]; ?>">
                <br><br>
                คณะ : 
                <select name="std_faculty" required>
                    <option disabled><?php echo $std_list["std_faculty"]; ?></option>
                    <option disabled>------------------------------------------------</option>
                    <?php foreach(selectByMajor(dbconn()) as $major_list): ?>
                        <?php $selected = ($std_list["std_faculty"] == $major_list["major_faculty"]) ? "selected" : "" ;?>
                            <option value="<?php echo $major_list["major_faculty"]; ?>" <?php echo $selected; ?>>
                                <?php echo $major_list["major_id"]." : ".$major_list["major_faculty"]; ?>
                            </option>
                    <?php endforeach; ?>
                </select>
                <br><br>
                สาขา : 
                <select name="std_branch" required>
                    <option disabled><?php echo $std_list["std_branch"]; ?></option>
                    <option disabled>------------------------------------------------</option>
                    <?php foreach(selectByMajor(dbconn()) as $major_list): ?>
                        <?php $selected = ($std_list["std_branch"] == $major_list["major_name"]) ? "selected" : "" ;?>
                            <option value="<?php echo $major_list["major_name"]; ?>" <?php echo $selected; ?>>
                                <?php echo $major_list["major_id"]." : ".$major_list["major_name"]; ?>
                            </option>
                    <?php endforeach; ?>
                </select>
                <br><br>
                อัฟโหลด : <input type="file" name="std_img" value="<?php echo $std_list["std_img"]; ?>" required>
                <br><br>
                <div class="img-div"><img src="../upload/<?php echo $std_list["std_img"];?>" while="100" height="100"></div>
                <hr>
                <br>
                <input type="submit" name="update" value="เเก้ไขข้อมูล">
                <a href="update_std.php?roleback=update_stdID_page">ย้อนกลับหน้าเเรก</a>
            </form>
        <?php endforeach; ?>
    </div>

</body>

</html>

\
