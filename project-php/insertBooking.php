<?php
    $connect = mysqli_connect("localhost","root","","sport");
    $sql = 'INSERT INTO booking (BID, FID, MID, Bdate, Tstart, Tend, Bprice, Bstatus) VALUES (NULL, '.$_POST['fID'].', '.$_POST['mID'].', "'.$_POST['date'].'", "'.$_POST['sTime'].'", "'.$_POST['eTime'].'", '.$_POST['price'].', "Waiting for payment")';
    $result = mysqli_query($connect,$sql);
    if (!$result) {
        echo mysqli_error();
    } else {
        include "selectfeild.php";
        echo '<h3 id="warning">ทำการจองเสร็จสิ้น ขอบคุณที่ใช้บริการกับเรา...</h3>';
    }
?>