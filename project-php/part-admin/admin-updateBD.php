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
        $sql = 'select * from booking where BID='.$_POST['bID'];
        $result = mysqli_query($connect,$sql);
        $row = mysqli_fetch_assoc($result);
        if (!$result) {
            echo mysqli_error().'<br>';
            die('Can not access database!');
        }else {
            echo '<form action="admin-fupdateBD.php" method="post">';
            echo '<table>';
            echo '<tr><td>BID</td><td><input type="text" name="bID" value="'.$row['BID'].'" disabled="disabled"></td></tr>';
            echo '<input type="hidden" name="bID" value="'.$row['BID'].'">';
            echo '<tr><td>Floor</td> <td><input type="text" name="floor" value="'.$row['Floors'].'"></td></tr>';
            echo '<tr><td>Price</td> <td><input type="text" name="price" value="'.$row['Price'].'"></td></tr>';
            echo '<tr><td>Single Double</td> <td><input type="text" name="sd" value="'.$row['SD'].'"></td></tr>';
            echo '<tr><td>Room Type</td> <td><input type="text" name="rt" value="'.$row['Room_Type'].'"></td></tr>';
            echo '<tr><td></td> <td><br><input type="submit" value="Update" name="smtUpdate" onClick="return confirmUpdate();"></td></tr>';
            echo '</table></form>';
        }
        mysqli_close($connect);
    ?>
</body>
</html>