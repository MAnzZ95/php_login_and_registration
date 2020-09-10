
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="header">
        <h2>Login</h2>
    </div>

    <form method="post" action="login.php" >
        <div class="input-group">
            <label>Email :</lable>
            <input type="text" name="email">
        </div>
        <div class="input-group">
            <label>Password :</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" name="login" class="btn">Login</button>
        </div>
        <p>Not yet a member? <a href="register.php">Sign up</p>
    </form>
</body>
</html>