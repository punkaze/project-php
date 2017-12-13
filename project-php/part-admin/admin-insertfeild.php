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
      
            echo '<form action="admin-finsertfeild.php" method="post">';
            echo '<table>';
           // echo '<tr><td>FID</td> <td><input type="text" name="floor" value="'.$row['FID'].'" disabled="disabled"></td></tr>';

            echo '<tr><td>FID</td><td><input type="text" name="fid1"></td></tr>';
            echo '<tr><td>สนาม</td> <td><input type="text" name="feild1"></td></tr>';
            //echo '<input type="hidden" name="bID" value="'.$row['BID'].'">';
            echo '<tr><td>ราคา</td> <td><input type="text" name="price1"></td></tr>';
            /*echo '<tr><td>เวลาเสร็จ</td> <td><input type="text" name="price" value="'.$row['Tend'].'"></td></tr>';
            echo '<tr><td>ราคาที่ต้องจ่าย</td> <td><input type="text" name="sd" value="'.$row['Bprice'].'"></td></tr>';
            echo '<tr><td>สถานะ</td> <td><input type="text" name="rt" value="'.$row['Bstatus'].'"></td></tr>';
            echo '<tr><td></td> <td><br><input type="submit" value="เพิ่มสนาม" name="smtUpdate" onClick="return confirmUpdate();"></td></tr>';*/
            echo '<tr><td><input type="submit" value="Insert" align="center"></td></tr>';
            echo '</table></form>';
            
       
    ?>
</body>
</html>