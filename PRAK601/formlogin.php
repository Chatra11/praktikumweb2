<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Bang</title>
</head>
<body>
    <h2>Form Login</h2>
    <form action = "login.php" method="post">
        <table>
            <tr>
                <td>
                    Nomor Member <input type = "text" name="nomor_member" required>
                </td>
            </tr>
            <tr>
                <td>
                    Password <input type = "password" name="password" required>
                </td>
            </tr>
            <tr>
                <td>
                    <button type = "submit" name ="login">Login</button>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>