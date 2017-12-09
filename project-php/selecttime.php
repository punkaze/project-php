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
        $sql = 'select Fprice from feild where Fname="'.$_POST['feild'].'"';
        $result = mysqli_query($connect,$sql);
        if (!$result) {
            echo mysqli_error();
            die('Can not access database!');
        } else {
            while ($row = mysqli_fetch_array($result)) {
                $Fprice = $row['Fprice'];
                //echo '<input type="hidden" name="price" value="'.$row['Fprice'].'">';
            }
            mysqli_close($connect);
        }
    ?>
    <form action="information.php" method="post">
        <table>
            <tr>
                <td id="text">สนามที่เลือก : </td>
                <td><?php echo $_POST['feild'] ?></td>
            </tr>
            <tr>
                <td id="text">วันที่เลือก : </td>
                <td><?php echo $_POST['date'] ?></td>
            </tr>
            <tr>
                <td id="text">เลือกเวลาเริ่ม : </td>
                <td>
                    <input type="radio" name="sTime" id="1630" value="16:30:01"><label for="1630">16:30 น.</label><br>
                    <input type="radio" name="sTime" id="1730" value="17:30:01"><label for="1730">17:30 น.</label><br>
                    <input type="radio" name="sTime" id="1830" value="18:30:01"><label for="1830">18:30 น.</label><br>
                    <input type="radio" name="sTime" id="1930" value="19:30:01"><label for="1930">19:30 น.</label>
                </td>
            </tr>
            <tr>
                <td id="text">จำนวนเงิน :</td>
                <td><?php echo $Fprice.'Bath' ?></td>
            </tr>
            <tr>
                <td id="text">เลือกระยะเวลา : </td>
                <td>
                    <select name="hour" id="hour">
                        <option value="1">1 hour</option>
                        <option value="2">2 hour</option>
                        <option value="3">3 hour</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="ยืนยัน"></td>
            </tr>
        </table>
        <?php
            echo '<input type="hidden" name="price" value="'.$Fprice.'">';
            echo '<input type="hidden" name="feild" value="'.$_POST['feild'].'">';
            echo '<input type="hidden" name="date" value="'.$_POST['date'].'">';
        ?>
    </form>
</body>
</html>