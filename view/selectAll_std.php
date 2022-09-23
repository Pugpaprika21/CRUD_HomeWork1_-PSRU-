<?php

include "../backend/dbconnect.php";
include "../backend/function_showAll_std.php";

$std_id = isset($_GET["std_id"]) ? $_GET["std_id"] : "";

if (selectByID(dbconn(), $std_id)) {
    $msg = "แสดงข้อมูลที่ค้นพบ...";
} else {
    $msg = "ค้นหาไม่ได้...";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../upload/cs_psru.png" type="image/x-icon">
    <link rel="stylesheet" href="../frontend/selectAll_std.css">
    <title>เเสดงข้อมูลนักศึกษาทั้งหมด</title>
</head>


<body>
    <form action="../backend/getData_stdID.php" method="GET">
        ค้นหารหัสนักศึกษา : <input name="std_id" required> <input type="submit" value="ค้นหา">
    </form>
    <br>
    <div id="table-show-stdID">
        <table>
            <thead>
                <tr>
                    <th scope="col">รหัสนักศึกษา</th>
                    <th scope="col">คำนำหน้า</th>
                    <th scope="col">ชื่อ</th>
                    <th scope="col">สกุล</th>
                    <th scope="col">วันเดือนปีเกิด</th>
                    <th scope="col">อีเมล์</th>
                    <th scope="col">เบอร์มือถือ</th>
                    <th scope="col">คณะ</th>
                    <th scope="col">สาขา</th>
                    <th scope="col">รูปภาพ</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach (selectByID(dbconn(), $_SESSION["std_id"]) as $std_list) :
                ?>
                    <tr>
                        <td><?php echo $std_list["std_id"]; ?></td>
                        <td><?php echo $std_list["std_prefix"]; ?></td>
                        <td><?php echo $std_list["std_firstName"]; ?></td>
                        <td><?php echo $std_list["std_lastName"]; ?></td>
                        <td><?php echo $std_list["std_birthDay"]; ?></td>
                        <td><?php echo $std_list["std_email"]; ?></td>
                        <td><?php echo $std_list["std_mobileNumber"]; ?></td>
                        <td><?php echo $std_list["std_faculty"]; ?></td>
                        <td><?php echo $std_list["std_branch"]; ?></td>
                        <td><div class="img-div"><img src="../upload/<?php echo $std_list["std_img"];?>" height="80" width="80"></div></td>
                    </tr>
                <?php
                endforeach;
                ?>
            </tbody>
        </table>
        <?php
        echo "<h4>$msg</h4>";
        ?>
    </div>

    <h4>ข้อมูลนักศึกษาทั้งหมด</h4>
    <div id="table-showAll-std">
        <table>
            <thead>
                <tr>
                    <th scope="col">รหัสนักศึกษา</th>
                    <th scope="col">คำนำหน้า</th>
                    <th scope="col">ชื่อ</th>
                    <th scope="col">สกุล</th>
                    <th scope="col">วันเดือนปีเกิด</th>
                    <th scope="col">อีเมล์</th>
                    <th scope="col">เบอร์มือถือ</th>
                    <th scope="col">คณะ</th>
                    <th scope="col">สาขา</th>
                    <th scope="col">รูปภาพ</th>
                    <th scope="col">เเก้ไข</th>
                    <th scope="col">ลบ</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach (showAllstd(dbconn()) as $std_list) :
                ?>
                    <tr>
                        <td><?php echo $std_list["std_id"]; ?></td>
                        <td><?php echo $std_list["std_prefix"]; ?></td>
                        <td><?php echo $std_list["std_firstName"]; ?></td>
                        <td><?php echo $std_list["std_lastName"]; ?></td>
                        <td><?php echo $std_list["std_birthDay"]; ?></td>
                        <td><?php echo $std_list["std_email"]; ?></td>
                        <td><?php echo $std_list["std_mobileNumber"]; ?></td>
                        <td><?php echo $std_list["std_faculty"]; ?></td>
                        <td><?php echo $std_list["std_branch"]; ?></td>
                        <td><div class="img-div"><img src="../upload/<?php echo $std_list["std_img"];?>" height="80" width="80"></div></td>
                        <td><a href="../backend/getData_update_stdID.php?std_id=<?php echo $std_list["std_id"]; ?>">เเก้ไข</a></td>
                        <td><a href="../backend/getData_delete_stdID.php?std_id=<?php echo $std_list["std_id"]; ?>">ลบ</a></td>
                    </tr>
                <?php
                    endforeach;
                ?>
                </thead>
            <tbody>
        </table>   
        <br>  
        <a href="../view/index.php">ย้อนกลับ</a> 
    </div>

</body>

</html>



