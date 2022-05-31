<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in</title>
</head>
<body>
    <h1>Sign in</h1>
    <form action="store_member.php" method="post">
    <table>
        <tr>
            <td>Acoount</td>
            <td><input type="text" name="account" id=""></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="pwd" id=""></td>
        </tr>
        <tr>
            <td>Birthday</td>
            <td><input type="date" name="birthday" id=""></td>
        </tr>
        <tr>
            <td>Clue</td>
            <td><input type="text" name="clue" id=""></td>
        </tr>
        <tr>
            <td>E-mail</td>
            <td><input type="email" name="email" id=""></td>
        </tr>
    </table>
    <div>
        <input type="submit" value="register">
        <input type="reset" value="reset">
    </div>
</form>
</body>
</html>