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
        $sql = 'select * from feild where FID='.$_POST['fID'];
        $result = mysqli_query($connect,$sql);
        $row = mysqli_fetch_assoc($result);
        if (!$result) {
            echo mysqli_error().'<br>';
            die('Can not access database!');
        }else {
            echo '<form action="admin-fupdatefeild.php" method="post">';
            echo '<table>';
            echo '<tr><td>FID</td> <td><input type="text" name="fid1" value="'.$row['FID'].'" disabled="disabled"> 
                  <input type="hidden" name="fid" value="'.$row['FID'].'"></td></tr>';
            echo '<tr><td>ชื่อสนาม</td><td><input type="text" name="feild2" value="'.$row['Fname'].'" ></td></tr>';
    
            echo '<tr><td>ราคา</td> <td><input type="text" name="price2" value="'.$row['Fprice'].'"></td></tr>';
         
            echo '<tr><td></td> <td><br><input type="submit" value="Update" name="smtUpdate" onClick="return confirmUpdate();"></td></tr>';
            echo '</table></form>';
        }
        mysqli_close($connect);
    ?>
</body>
</html>