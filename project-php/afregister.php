<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sport Complex Web Booking</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php
        $connect = mysqli_connect("localhost","root","","sport");
        $sql = 'select * from member where Mname like "'.$_POST['Mname'].'%" and Mtel="'.$_POST['Mtel'].'" and Mmail="'.$_POST['Mmail'].'"';
        $result = mysqli_query($connect,$sql);
        $row = mysqli_fetch_array($result);
        $numrow = mysqli_num_rows($result);
        if (!$result) {
            echo mysqli_error();
            die('Can not access database!');
        } else {
            if ($numrow > 0) {
                echo '<h1>เกิดข้อผิดพลาด!! ข้อมูลที่คุณกรอกมีความซ้ำซ้อน มีความเป็นไปได้ที่คุณจะเป็นสมาชิกอยู่แล้ว</h1>';
            } else {
                $sql = 'INSERT INTO member VALUES(null,"'.$_POST['Mname'].'","'.$_POST['Mtel'].'","'.$_POST['Mmail'].'")';
                $result = mysqli_query($connect,$sql);
                if (!$result) {
                    echo mysqli_error();
                    die('Can not access database!');
                } else {
                    include "selectfeild.php";
                    echo '<h2 id="warning">สมัครสมาชิกเรียบร้อย</h2>';
                }
            }
        }
    ?>
</body>
</html>

