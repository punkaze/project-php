<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>Sport Complex Web Booking</title>
</head>
<body>
    <?php
        echo '<table>';
        echo '<tr><td>ชื่อ-นามสกุล :</td> <td> '.$_POST['name'].'</td></tr><br>';
        echo '<tr><td>สนาม :</td> <td>'.$_POST['feild'].'</td></tr><br>';
        echo '<tr><td>วันที่ : </td> <td>'.$_POST['date'].'</td></tr><br>';
        echo '<tr><td>เวลาเริ่ม :</td> <td>'.$_POST['stime'].'</td></tr><br>';
        echo '<tr><td>ระยะเวลา :</td> <td>'.$_POST['hour'].'</td></tr><br>';
        $outcome = $_POST['price'] * $_POST['hour'];
        echo '<tr><td>ยอดเงินรวม : </td> <td>'.$outcome.'</td></tr><br>';
       
       
        if(!preg_match('/^[0-9]{10}$/', $_POST['Mtel']))
        {
            $phoneErr = "<td>เบอร์โทร: </td> <td> <font color = #FF0000 > only numbers allowed </font></td> ";
            echo $phoneErr;
            echo "<br>";
         }else{
            $phone = $_POST['Mtel'];
            echo "<td>เบอร์โทร:</td> <td>$phone</td> <br>";
            }
            echo '</tr>';
            

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

echo '</table>';
    ?>

</body>
</html>