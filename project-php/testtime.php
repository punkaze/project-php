<?php
$d=strtotime("10:30pm 2017-12-04");
echo "Created date is " . date("Y-m-d h:i:sa", $d);

$a = mktime(17,0,0,12,4,2017);
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