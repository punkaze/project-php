<html>
<link rel="stylesheet" href="index.css">
</html>
<?php
$connect = mysqli_connect("localhost","root","","sport");
$sql = 'INSERT INTO member VALUES(null,"'.$_POST['Mname'].'","'.$_POST['Mtel'].'","'.$_POST['Mmail'].'")';
$result = mysqli_query($connect,$sql);
if (!$result) {
    echo mysqli_error();
} else {
    echo 'Register Compelete';
    
    mysqli_close($connect);

}

/*$sql = 'select * from student';
$result = mysqli_query($connect,$sql);
if (!$result) {
    echo mysqli_error().'<br>';
    die('Can not access database!');
} else {
     echo'<"finish">';
    /*echo '<table border="1" cellpading="0" cellspacing="0"><tr>';
    echo '<td>Student ID</td>';
    echo '<td>Firstname</td>';
    echo '<td>Lastname</td>';
    echo '<td>Address</td>';
    echo '<td>TeacherID</td>';
    echo '</tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        while (list($key,$value)=each($row)) {
            if ($value=='') {
                echo '<td>&nbsp</td>';
            } else {
                echo '<td>'.$value.'</td>';
            }
        }
        echo '</tr>';
    }
    echo '</table>';*/
   header("Location:selectfeild.php");
?>