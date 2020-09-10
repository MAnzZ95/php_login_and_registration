<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!--<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <div class="header">
       <h2> Register</h2>
    </div>

    <form method="post" action="register.php">
    <!-- display errors -->
        <?php include('errors.php');?>
        <div class ="input-group">
            <label>User Name :</lebel>
            <input type="text" name="username" value="<?php echo $username;?>">
        </div>
        <div class="input-group">
            <label>Email :</label>
            <input type="text" name="email" value="<?php echo $email?>">
        </div>
        <div class="input-group">
            <label>Password :</label>
            <input type="password" name="password_1">
        </div>
        <div class="input-group">
            <label>Confirm Password :</label>
            <input type="password" name="password_2">
        </div>
        <div class="input-group">
            <button type="submit" name="register" class="btn">Register</button>
        </div>
        <p>
            Already a member ? <a href="login.php">Sign up</a>
        </p>

    </form>
    
</body>
</html>