<?php
	$connect = mysqli_connect("localhost","root","","sport");
    $sql = 'UPDATE member SET MID='.$_POST['mID'].', Mname="'.$_POST['mName'].'", Mtel="'.$_POST['mTel'].'", Mmail="'.$_POST['mMail'].'" WHERE MID='.$_POST['mID'];
	$result = mysqli_query($connect,$sql);
	if (!$result) {
		echo mysqli_error().'<br>';
        die('Can not access database!');
    }else {
		include "admin.php";
        echo '<h3 id="warning">อัพเดทข้อมูลสำเร็จ</h3>';
        // mysqli_close($connect);
	}
?>