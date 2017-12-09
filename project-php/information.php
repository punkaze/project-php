<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>Information</title>
</head>
<body>
<form action="endbooking.php" method="post">  
   <h1>Information</h1>
    <table>
        <tr>
        <td id="text">ชื่อ-สกุล :</td>
       <td> <input type="text" name="name" >
        </td>
        </tr>
        
        <tr>
        <td id="text">เบอร์โทรศัพท์ :</td>
       <td> <input type="text" name="Mtel" >
        </td>
        </tr>
        <tr>
                <td></td>
                <td><input type="submit" value="ยืนยัน"></td>
            </tr>
    </table>
</body>
<?php
echo '<input type="hidden" name="feild" value="'.$_POST['feild'].'">';
echo '<input type="hidden" name="date" value="'.$_POST['date'].'">';
echo '<input type="hidden" name="stime" value="'.$_POST['stime'].'">';
echo '<input type="hidden" name="price" value="'.$_POST['price'].'">';
echo '<input type="hidden" name="hour" value="'.$_POST['hour'].'">';
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>


</html>