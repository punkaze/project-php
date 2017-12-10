<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../others/index.css">
    <title>Sport Complex Web Booking</title>
</head>
<body>
    <?php
        $outcome = $_POST['price'] * $_POST['hour'];
        $connect = mysqli_connect("localhost","root","","sport");
        $sql = 'SELECT * FROM member WHERE Mname Like "'.$_POST['mName'].'%"';
        $result = mysqli_query($connect,$sql);
        $numrows = mysqli_num_rows($result);
        if (!$result) {
            echo mysqli_error();
            die('Can not access database!');
        } else {
            if ($numrows > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $mID = $row['MID'];
                }
                if(!preg_match('/^[0-9]{10}$/', test_input($_POST['mTel']))) {
                    echo '<table><tr><td><font color="#FF0000"> เบอร์โทรศัพท์ใส่ได้เฉพาะตัวเลข </font></td></tr></table>';
                    include "information.php";
                }else {
                    echo '<form action="insertBooking.php" method="post">';
                        echo '<table>';
                            echo '<tr><td>ชื่อ-นามสกุล : </td><td>'.$_POST['mName'].'</td></tr>';
                            echo '<tr><td>สนาม : </td><td>'.$_POST['feild'].'</td></tr>';
                            echo '<tr><td>วันที่ : </td><td>'.$_POST['date'].'</td></tr>';
                            echo '<tr><td>เวลาเริ่ม : </td><td>'.date("H:i", strtotime($_POST['sTime'])).' นาฬิกา</td></tr>';
                            echo '<tr><td>ระยะเวลา : </td><td>'.$_POST['hour'].' ชั่วโมง</td></tr>';    
                            echo '<tr><td>เบอร์โทร : </td><td>'.$_POST['mTel'].'</td></tr>';
                            echo '<tr><td>ยอดเงินรวม : </td><td>'.$outcome.'</td></tr><br>';
                            echo '<tr><td></td><td><input type="submit" value="ยืนยันการจอง"></td></tr>';
                        echo '</table>';
                        echo '<input type="hidden" name="mID" value="'.$mID.'">';
                        echo '<input type="hidden" name="fID" value="'.$_POST['fID'].'">';
                        echo '<input type="hidden" name="date" value="'.$_POST['date'].'">';
                        echo '<input type="hidden" name="sTime" value="'.$_POST['sTime'].'">';
                        echo '<input type="hidden" name="eTime" value="'.$_POST['eTime'].'">';
                        echo '<input type="hidden" name="price" value="'.$outcome.'">';
                    echo '</form>';
                    include "../others/backtoHome.php";
                } 
            } else {
                echo '<h2 id="warning">คุณไม่ใช่สมาชิก โปรดลงทะเบียนก่อนทำการจอง</h2>';
                echo '<table><tr><td>สมัครสมาชิก</td></tr><tr><td align="center"><form action="register.php" method="post"><input type="submit" value="Register"></form></td></tr></table>';
                include "../others/backtoHome.php";
            }
            mysqli_close($connect);
        }
        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    ?>
</body>
</html>