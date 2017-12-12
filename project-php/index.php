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
    <h1>Sport Booking Application</h1>
    <form action="login.php" method="post">
        <table>
            <tr>
                <td>Login: </td>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" name="passwd" id="passwd"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Sign in"></td>
            </tr>
        </table>
    </form>
    <form action="signup.php" method="post">
        <table>
            <tr align="center">
                <td>New User Please Sign Up</td>
            </tr>
            <tr align="center">
                <td><input type="submit" value="Sign up"></td>
            </tr>
        </table>
    </form>
</body>
</html>