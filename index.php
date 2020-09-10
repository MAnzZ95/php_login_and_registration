<?php include('server.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>welcome</title>
</head>
<body>
<div class="header">
    <h2> Home page</h2>
</div>
    <div class="content">
        <?php if (isset($_SESSION['success'])): ?>
        <div class="error success">
            <h3>
                <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                ?>
            </h3>
        </div>    
        <?php endif ?>

        <?php if(isset($_SESSION['username'])): ?>
            <p>Welcome <strong> <?php echo $_SESSION['username']; ?> </strong></p>
            <p> <a href="index.php?logout='1' " style="color:red;">Logout</p>
        <?php endif ?>
    </div>
</body>
</html>