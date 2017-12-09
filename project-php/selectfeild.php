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

    <form action="selecttime.php" method="post">
       <h1>BOOKING!!</h1>
        <table>
            <tr>
                <td id="text">สนาม :</td>
                <td>
                    <select name="feild" id="feild">
                        <?php
                        $connect = mysqli_connect("localhost","root","","sport");
                        $sql = 'select Fname from feild';
                        $result = mysqli_query($connect,$sql);
                        if (!$result) {
                            echo mysqli_error();
                            die('Can not access database!');
                        } else {
                            while ($row = mysqli_fetch_array($result)) {
                                echo '<option value="'.$row['Fname'].'">'.$row['Fname'].'</option>';
                            }
                            mysqli_close($connect);
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td id="text">วันที่ :</td>
                <td><input type="date" name="date" id="date" value="<?php echo date('Y-m-d'); ?>" min="<?php echo date('Y-m-d'); ?>"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="ยืนยัน"></td>
            </tr>
        </table>
    </form>
    <table>
        <tr><td>ค้นหาการจอง</td><td>สมัครสมาชิก</td></tr>
        <tr>
            <td align="center"><form action="search.php" method="post"><input type="submit" value="ค้นหา"></form></td>
            <td align="center"><form action="register.php" method="post"><input type="submit" value="Register"></form></td>
        </tr>
    </table>

</body>
</html>