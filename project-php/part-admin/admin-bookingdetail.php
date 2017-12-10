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
    <?php
        $connect = mysqli_connect("localhost","root","","sport");
        $sql = 'select * from booking where MID='.$_POST['mID'].' ORDER BY booking.Bdate DESC';
        $result = mysqli_query($connect,$sql);
        $numrows = mysqli_num_rows($result);
        if (!$result) {
            echo mysqli_error().'<br>';
            die('Can not access database!');
        } else {
            if ($numrows > 0) {
                echo '<h2 id="topic">Booking detail of '.$_POST['Mname'].'</h2>';
                echo '<table border="1" cellpading="0" cellspacing="0"><tr id="tHead">';
                echo '<td>สนาม</td>';
                echo '<td>วันที่จอง</td>';
                echo '<td>เวลาเริ่ม</td>';
                echo '<td>เวลาเสร็จ</td>';
                echo '<td>ราคาที่ต้องจ่าย</td>';
                echo '<td>สถานะ</td>';
                echo '<td>แก้ไขข้อมูล</td>';
                echo '<td>ลบการจอง</td>';
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
                        echo '<td align="center">
                                <form name="bDetail'.$row['BID'].'" method="post" action="admin-updateBD.php">
                                    <input type="submit" value="Update">
                                    <input type="hidden" name="bID" value="'.$row['BID'].'">
                                    <input type="hidden" name="fName" value="'.$fName.'">
                                </form>
                            </td>';
                        echo '<td align="center">
                                <form name="bDetail'.$row['BID'].'" method="post" action="admin-deleteBD.php">
                                    <input type="submit" value="Delete">
                                    <input type="hidden" name="bID" value="'.$row['BID'].'">
                                </form>
                            </td>';
                        echo '</tr>';
                    }
                echo '</table>';
                echo '<div align="center" id="backtoHome"><form action="admin.php" method="post"><input type="submit" value="กลับไปยังหน้าแรก"></form></div>';
            } else {
                echo '<table><tr><td>คนนี้ยังไม่มีประวัติการจอง</td></tr></table>';
                echo '<div align="center" id="backtoHome"><form action="admin.php" method="post"><input type="submit" value="กลับไปยังหน้าแรก"></form></div>';
            }
            mysqli_close($connect);
        }
    ?>
</body>
</html>