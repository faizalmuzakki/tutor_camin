<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!--/ FORM REGISTER USER /-->
    <form action="register_form.php" method="post">
    <table>
    	<tr>
        	<td>Nama Lengkap</td><td>:</td><td><input type="text" name="nama" /></td>
        </tr>
        <tr>
        	<td>Username</td><td>:</td><td><input type="text" name="username" /></td>
        </tr>
        <tr>
        	<td>Password</td><td>:</td><td><input type="password" name="password" /></td>
        </tr>
        <tr>
        	<td>Ulangi Password</td><td>:</td><td><input type="password" name="password2" /></td>
        </tr>
        <tr>
        	<td></td><td></td><td><input type="submit" name="register" value="Register" /></td>
        </tr>
    </table>
    </form>
    <p>Sudah punya akun ? <a href="index.php">Login</a></p>
</body>
</html>