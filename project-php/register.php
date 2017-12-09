<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index.css">
    <title>Register</title>
</head>
<body>
    <h1>REGISTER</h1>
    <form action="afregister.php" method="post">
        <table>
            <tr>
                <td id="text">Name : </td><td><input type="text" name="Mname"></td>
            </tr>
            <tr>
                <td id="text">Phone : </td><td><input type="text" name="Mtel"></td>
            </tr>
            <tr>
                <td id="text">E-mail :</td><td><input type="email" name="Mmail"></td>
            </tr>
            <tr>
                <td></td><td><input type="submit" value="Register"></td> 
            </tr>
        </table>
    </form>

</body>
</html>