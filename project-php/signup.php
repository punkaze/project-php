<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="others/style.css">
</head>
<body>
    <form action="insert_member.php" method="post">
        <table>
            <tr>
                <td align="right">Name: </td>
                <td><input type="text" name="suName" id="suName"></td>
            </tr>
            <tr>
                <td align="right">Telephone Number: </td>
                <td><input type="tel" name="suTel" id="suTel"></td>
            </tr>
            <tr>
                <td align="right">E-mail: </td>
                <td><input type="email" name="suMail" id="suMail"></td>
            </tr>
            <tr>
                <td align="right">Password: </td>
                <td><input type="password" name="suPass" id="suPass"></td>
            </tr>
            <tr>
                <td align="right">Confirm Password: </td>
                <td><input type="password" name="cfPass" id="cfPass"></td>
            </tr>
            <tr>
                <td><input type="reset" value="Reset"></td>
                <td><input type="submit" value="Confirm"></td>
            </tr>
        </table>
    </form>
</body>
</html>