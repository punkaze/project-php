<?php
	$connect = mysqli_connect("localhost","root","","sport");
    $sql = 'UPDATE feild SET FID='.$_POST['fid'].', Fname="'.$_POST['feild2'].'", Fprice="'.$_POST['price2'].'" where FID='.$_POST['fid'];
	$result = mysqli_query($connect,$sql);
	if (!$result) {
		echo mysqli_error().'<br>';
        die('Can not access database!');
    }else {
		include "admin.php";
        echo '<h3 id="warning">อัพเดทข้อมูลสำเร็จ</h3>';
        
	}
?>