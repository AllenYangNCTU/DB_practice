<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
    <style>
        table{
            margin:auto;
            width:400px;
        }
        table td{
            padding:1rem;
        }
        .btns{
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="check_login.php" method="post"></form>
    <table>
        <tr>
            <td>Account</td>
            <td><input type="text" name="account" id=""></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="pwd" id=""></td>
        </tr>
        <tr>
            <td><a href="register.php">Register</a></td>
            <td><a href="forgot.php">Forgot Passwords?</a></td>
        </tr>
    </table>
    <div class="btns">
        <input type="submit" value="login">
        <input type="reset" value="reset">
    </div>
</body>
</html>