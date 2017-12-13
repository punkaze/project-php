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
        $sql = 'select * from member ORDER BY Mname ASC';
        $result = mysqli_query($connect,$sql);
        $numrows = mysqli_num_rows($result);
        $numfields = mysqli_num_fields($result);
        if (!$result) {
            echo mysqli_error().'<br>';
            die('Can not access database!');
        } else {
            if ($numrows > 0) {
                echo '<h1>Admin Page</h1>';
                echo '<table border="1" cellpading="0" cellspacing="0"><tr id="tHead">';
                echo '<td>ชื่อสมาชิก</td>';
                echo '<td>เบอร์โทร</td>';
                echo '<td>e-mail</td>';
                echo '<td>ข้อมูลการจอง</td>';
                echo '<td>แก้ไขข้อมูล</td>';
                echo '<td>ลบสมาชิก</td>';
                echo '</tr>';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr>';
                        echo '<td>'.$row['Mname'].'</td>';
                        echo '<td>'.$row['Mtel'].'</td>';
                        echo '<td>'.$row['Mmail'].'</td>';
                        echo '<td align="center">
                                <form name="bDetail'.$row['MID'].'" method="post" action="admin-bookingdetail.php">
                                    <input type="submit" value="ข้อมูลการจอง">
                                    <input type="hidden" name="mID" value="'.$row['MID'].'">
                                    <input type="hidden" name="Mname" value="'.$row['Mname'].'">
                                </form>
                            </td>';
                        echo '<td align="center">
                                <form name="mUpdate'.$row['MID'].'" method="post" action="admin-updateMember.php">
                                    <input type="submit" value="แก้ไขข้อมูล">
                                    <input type="hidden" name="mID" value="'.$row['MID'].'">
                                    <input type="hidden" name="Mname" value="'.$row['Mname'].'">
                                </form>
                            </td>';
                        echo '<td align="center">
                                <form name="mDelete'.$row['MID'].'" method="post" action="admin-deleteMember.php">
                                    <input type="submit" value="Delete">
                                    <input type="hidden" name="mID" value="'.$row['MID'].'">
                                </form>
                            </td>';
                        echo '</tr>';
                    }
                echo '</table>';
            } else {
                echo '<table><tr><td>คุณไม่เคยมีประวัติการจอง</td></tr></table>';
            }
            mysqli_close($connect);
        }
    ?>


<?php
        $connect = mysqli_connect("localhost","root","","sport");
        $sql = 'select * from feild';
        $result = mysqli_query($connect,$sql);
        $numrows = mysqli_num_rows($result);
        $numfields = mysqli_num_fields($result);
        if (!$result) {
            echo mysqli_error().'<br>';
            die('Can not access database!');
        } else {
            if ($numrows > 0) {
                echo '<table border="1" cellpading="0" cellspacing="0"><tr id="tHead">';
                echo '<td>MID</td>';
                echo '<td>สนาม</td>';
                echo '<td>ราคา</td>';
                echo '</tr>';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr>';
                        echo '<td>'.$row['FID'].'</td>';
                        echo '<td>'.$row['Fname'].'</td>';
                        echo '<td>'.$row['Fprice'].'</td>';
                    
                        echo '<td align="center">
                                <form name="mUpdate'.$row['FID'].'" method="post" action="admin-updatefeild.php">
                                    <input type="submit" value="แก้ไขสนาม">
                                    <input type="hidden" name="fID" value="'.$row['FID'].'">
                                    <input type="hidden" name="fname" value="'.$row['Fname'].'">
                                </form>
                            </td>';
                        echo '<td align="center">
                                <form name="mDelete'.$row['FID'].'" method="post" action="admin-deleteMember.php">
                                    <input type="submit" value="Delete">
                                    <input type="hidden" name="fID" value="'.$row['FID'].'">
                                </form>
                            </td>';
                        echo '</tr>';
                    }
                echo '</table>';
            } else {
                echo '<table><tr><td>คุณไม่เคยมีประวัติการจอง</td></tr></table>';
            }
            echo '<br><br>';
            echo '<div align="center">';
          
            echo '<form name="bDetail'.$row['FID'].'" method="post" action="admin-insertfeild.php">
                <input type="submit" value="เพิ่มสนาม">
                <input type="hidden" name="fID" value="'.$row['FID'].'">
                <input type="hidden" name="fname" value="'.$row['Fname'].'">
            </form>';
          
            echo '</div>';


            mysqli_close($connect);
        }
    ?>
</body>
</html>