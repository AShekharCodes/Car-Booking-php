<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Login</title>
</head>

<body>
    <?php
    include "navbar.php";
    ?>
    <div class="login">
        <h2>Log into your account</h2>
        <form action="" method="">
            Username <input type="text" name="name" id="name" placeholder="Enter you username">
            Password <input type="password" name="password" id="password" placeholder="Enter your password">
            <button type="submit">Login</button>
            <a href="register.php">Don't have an account? Register here!</a>
        </form>

    </div>

</body>

</html>