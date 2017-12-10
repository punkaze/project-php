<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../others/index.css">
    <title>Information</title>
</head>
<body>
    <?php
        if (!isset($_POST['sTime'])) {
            echo '<h3 id="warning">*โปรดเลือกเวลาเริ่มเล่นของท่าน</h3>';
            include "selecttime.php";
        } else {
            //  function หาเวลาสิ้นสุด ของการเล่นของผู้จอง
                function endTime($startTime, $during){
                    switch ($during) {      //  link เกี่ยวกับ function ที่เกี่ยวกับ date and time : https://www.w3schools.com/php/php_date.asp
                        case '1': $eTime = date("H:i", strtotime($startTime) + 3599); break;
                        case '2': $eTime = date("H:i", strtotime($startTime) + (3599*2)+1); break;
                        case '3': $eTime = date("H:i", strtotime($startTime) + (3599*3)+2); break;
                        default: echo "Something Wrong!!!"; break;
                    }
                    return $eTime;
                }

            //  function ตรวจสอบว่าการจองซ้ำซ้อนหรือไม่
                function checkBooking($fID,$date,$sTime,$eTime){
                    //  Connect database
                        $connect = mysqli_connect("localhost","root","","sport");
                    //  เช็คว่า การจองที่ผู้จองต้องการ ซ้ำกับที่มีอยู่ใน database หรือเปล่า
                        $sql = 'SELECT * FROM booking WHERE (FID='.$fID.') AND (Bdate="'.$date.'") AND (("'.$sTime.'" BETWEEN Tstart AND Tend) OR ("'.$eTime.'" BETWEEN Tstart AND Tend))';
                        $result = mysqli_query($connect,$sql);
                        $numrows = mysqli_num_rows($result);
                        if (!$result) {
                            echo mysqli_error();
                            die('Can not access database!');
                        } else {
                            if ($numrows > 0) {
                                $res = false;
                            } else {
                                $res = true;
                            }
                            mysqli_close($connect);
                        }
                        return $res;
                }
            
            //  หา FID จาก feild name ที่ได้มากจากหน้า selectfeild.php
                $connect = mysqli_connect("localhost","root","","sport");
                $sql = 'SELECT FID FROM feild WHERE Fname="'.$_POST['feild'].'"';
                $result = mysqli_query($connect,$sql);
                if (!$result) {
                    echo mysqli_error();
                    die('Can not access database!');
                } else {
                    while ($row = mysqli_fetch_array($result)) {
                        $fID = $row['FID'];     //เก็บค่า FID ที่ได้ไว้ใน $fid
                    }
                    mysqli_close($connect);
                }

            $eTime = endTime($_POST['sTime'],$_POST['hour']);
            $res = checkBooking($fID,$_POST['date'],$_POST['sTime'],$eTime);

            if (strtotime($eTime) <= strtotime("20:30:00")) {
                if ($res) {     //  เช็คว่า ถ้าไม่ซ้ำ ให้ทำการจองต่อไป
                    echo '<form action="endbooking.php" method="post">';
                        echo '<h1>Information</h1>';
                        echo '<table><tr><td id="text">ชื่อ-สกุล :</td><td><input type="text" name="mName"></td></tr>';
                        echo '<tr><td id="text">เบอร์โทรศัพท์ :</td><td><input type="text" name="mTel"></td></tr>';
                        echo '<tr><td></td><td><input type="submit" value="ยืนยัน"></td></tr></table>';
                        echo '<input type="hidden" name="feild" value="'.$_POST['feild'].'">';
                        echo '<input type="hidden" name="fID" value="'.$fID.'">';
                        echo '<input type="hidden" name="date" value="'.$_POST['date'].'">';
                        echo '<input type="hidden" name="sTime" value="'.$_POST['sTime'].'">';
                        echo '<input type="hidden" name="eTime" value="'.endTime($_POST['sTime'],$_POST['hour']).'">';
                        echo '<input type="hidden" name="hour" value="'.$_POST['hour'].'">';
                        echo '<input type="hidden" name="price" value="'.$_POST['price'].'">';
                    echo '</form>';
                    include "../others/backtoHome.php";
                } else {        //  ถ้าซ้ำ ให้ทำการกรอกเวลา หรือ วันที่ ใหม่
                    echo '<h1 id="warning">*เวลาซ้ำโปรดเลือกเวลาใหม่</h1>';
                    include 'selecttime.php';
                }
            } else {
                echo '<h1 id="warning">*เวลาที่คุณจองเกินเวลาปิดสนามของเรา โปรดเลือกระยะเวลาจองใหม่</h1>';
                include 'selecttime.php';
            }
        }
    ?>
</body>
</html>