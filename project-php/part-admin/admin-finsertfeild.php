<?php
    $connect = mysqli_connect("localhost","root","","sport");
    $sql = 'INSERT INTO feild (FID, Fname, Fprice) VALUES ('.$_POST['mid1'].', "'.$_POST['feild1'].'", "'.$_POST['price1'].'")';
    $result = mysqli_query($connect,$sql);
    if (!$result) {
        echo mysqli_error();
    } else {
        include "admin.php";
        echo '<h3 id="warning">ทำการเพิ่มเสร็จสิ้น ขอบคุณที่ใช้บริการกับเรา...</h3>';
    }
?>