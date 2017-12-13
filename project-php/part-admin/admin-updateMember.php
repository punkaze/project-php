<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>
    <link rel="stylesheet" href="../others/style.css">
</head>
<body>
<?php include "../header.php"; ?>
<?php
        $connect = mysqli_connect("localhost","root","","sport");
        $sql = 'select * from member where MID='.$_POST['mID'];
        $result = mysqli_query($connect,$sql);
        $row = mysqli_fetch_assoc($result);
        if (!$result) {
            echo mysqli_error().'<br>';
            die('Can not access database!');
        }else {
            echo '<form action="admin-fupdateMember.php" method="post">';
            echo '<table>';
            echo '<tr><td>MID</td><td><input type="text" name="mID" value="'.$row['MID'].'" disabled="disabled"></td></tr>';
            echo '<input type="hidden" name="mID" value="'.$row['MID'].'">';
            echo '<tr><td>ชื่อ-นามสกุล</td><td><input type="text" name="mName" value="'.$row['Mname'].'"></td></tr>';
            echo '<tr><td>เบอร์โทร</td><td><input type="text" name="mTel" value="'.$row['Mtel'].'"></td></tr>';
            echo '<tr><td>e-mail</td><td><input type="text" name="mMail" value="'.$row['Mmail'].'"></td></tr>';
            echo '<tr><td></td><td><br><input type="submit" value="Update" name="smtUpdate"></td></tr>';
            echo '</table></form>';
            echo '<div align="center" id="backtoHome"><form action="admin.php" method="post"><input type="submit" value="กลับไปยังหน้าแรก"></form></div>';
        }
        mysqli_close($connect);
    ?>
</body>
</html>