<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Page</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
        $connect = mysqli_connect("localhost","root","","sport");
        $sql = 'DELETE FROM member WHERE MID='.$_POST['mID'];
        $result = mysqli_query($connect,$sql);
        if (!$result) {
            echo mysqli_error();
            die('Can not access database!');
        } else {
            include "admin.php";
            echo '<h3 id="warning">ลบข้อมูลสมาชิกเรียบร้อย</h3>';
        }
    ?>
</body>
</html>