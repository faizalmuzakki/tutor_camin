<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login NCC</title>
</head>
<body>
 
 <!--/ FORM LOGIN /-->
 <form action="home.php" method="post">
    <table>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td>
                <input type="text" name="username"/>
            </td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td>
                <input type="password" name="password"/>
            </td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td>
                <input type="submit" name="login" value="Login"/>
            </td>
        </tr>
    </table>
 </form>
 <a href="register.php">Register</a>
</body>