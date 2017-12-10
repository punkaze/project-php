<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../others/index.css">
    <title>Search</title>

</head>
<body>
    <h1>SEARCH BOOKING</h1>
    <form action="resultSearch.php" method="post">    
        <table>
            <tr><td>ระบุชื่อ : <input type="text" name="sName"></td></tr>
            <tr><td align="center"><input type="submit" value="ค้นหา" name="search1"></td></tr>
        </table>
    </form>
    <?php include "../others/backtoHome.php"; ?>
</body>
</html>