<!DOCTYPE html>

<!-- หน้าเเสดงข้อมูลต่อจากหน้า search.php -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../others/index.css">
</head>
<body>
<body>
    <?php
        $connect = mysqli_connect("localhost","root","","sport");
        //  หา member id จาก database
            $sql = 'select MID, Mname from member where Mname like "%'.$_POST['sName'].'%"';
            $result = mysqli_query($connect,$sql);
            $row = mysqli_fetch_array($result);
            $numrows = mysqli_num_rows($result);
            if (!$result) {
                echo mysqli_error().'<br>';
                die('Can not access database!');
            } else {
                if ($numrows > 0) {
                    echo '<h2 id="topic">Booking detail of '.$row['Mname'].'</h2>';
                    $mID = $row['MID'];

                    //  โชว์ข้อมูลการจองของ member เป็น ตาราง
                        $sql = 'select * from booking where MID='.$mID.' ORDER BY FID ASC';
                        $result = mysqli_query($connect,$sql);
                        $numrows = mysqli_num_rows($result);
                        if (!$result) {
                            echo mysqli_error().'<br>';
                            die('Can not access database!');
                        } else {
                            if ($numrows > 0) {
                                echo '<table border="1" cellpading="0" cellspacing="0"><tr id="tHead">';
                                echo '<td>สนาม</td>';
                                echo '<td>วันที่จอง</td>';
                                echo '<td>เวลาเริ่ม</td>';
                                echo '<td>เวลาเสร็จ</td>';
                                echo '<td>ราคาที่ต้องจ่าย</td>';
                                echo '<td>สถานะ</td>';
                                echo '</tr>';
                                    while ($row = mysqli_fetch_array($result)) {
                                        switch ($row['FID']) {
                                            case '101': $fName = 'Tennis court 1'; break;
                                            case '102': $fName = 'Tennis court 2'; break;
                                            case '201': $fName = 'Badminton court 1'; break;
                                            case '202': $fName = 'Badminton court 2'; break;
                                            case '203': $fName = 'Badminton court 3'; break;
                                            case '204': $fName = 'Badminton court 4'; break;
                                            case '301': $fName = 'Basketball court'; break;
                                            case '401': $fName = 'Volleyball court'; break;
                                            default: $fName = 'Do not match Fname'; break;
                                        }
                                        $correct = strtotime($row['Tstart'])-1;
                                        echo '<tr>';
                                        echo '<td>'.$fName.'</td>';
                                        echo '<td>'.$row['Bdate'].'</td>';
                                        echo '<td>'.$correct.'</td>';
                                        echo '<td>'.$row['Tend'].'</td>';
                                        echo '<td>'.$row['Bprice'].' บาท</td>';
                                        echo '<td>'.$row['Bstatus'].'</td>';
                                        echo '</tr>';
                                    }
                                echo '</table>';
                                include "../others/backtoHome.php";
                            } else {
                                echo '<table><tr><td>คุณไม่เคยมีประวัติการจอง</td></tr></table>';
                                include "../others/backtoHome.php";
                            }
                            mysqli_close($connect);
                        }
                } else {
                    echo '<h1 id="warning">*เราไม่มีข้อมูลการจองของคุณ</h1>';
                    include "../others/backtoHome.php";
                }
            }
    ?>
        
</body>
</html>