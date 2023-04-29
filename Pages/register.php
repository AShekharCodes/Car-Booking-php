<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "car_booking_db";
$message = "";

$con = mysqli_connect($hostname, $username, $password, $database);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $password = $_POST['password'];
    $type = $_POST['user-type'];

    if (!empty($name) && !empty($password) && !empty($type)) {
        // Check for minimum password length of 8 characters
        if (strlen($password) < 8) {
            $message = "Password must be at least 8 characters long!";
        } else {
            // Hash the password
            $password_hashed = password_hash($password, PASSWORD_DEFAULT);

            // Check for duplicate username
            $duplicate_query = "SELECT * FROM users WHERE name='$name'";
            $result = mysqli_query($con, $duplicate_query);
            if (mysqli_num_rows($result) > 0) {
                $message = "Username already exists!";
            } else {
                // Insert user details into the database
                $query = "INSERT INTO users (name, password, type) VALUES ('$name', '$password_hashed', '$type')";
                if (mysqli_query($con, $query)) {
                    $message = "User registered successfully!";
                    $_POST = array();
                } else {
                    $message = mysqli_error($con);
                }
            }
        }
    } else {
        $message = "Please fill in all fields!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="shortcut icon" href="../assets/favicon.png" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>
    <?php include "navbar.php" ?>
    <div class="login">
        <h2>Register yourself</h2>
        <form method="post" id="register">
            Username <input type="text" name="name" id="name" placeholder="Choose you username"
                value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '' ?>">
            Password <input type="password" name="password" id="password" placeholder="Choose your password"
                value="<?php echo isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '' ?>">
            <label for="user-type">Select User Type</label>
            <select id="user-type" name="user-type">
                <option value="">Select</option>
                <option value="customer" <?php if (isset($_POST['user-type']) && $_POST['user-type'] === 'customer')
                    echo 'selected'; ?>>Customer</option>
                <option value="agency" <?php if (isset($_POST['user-type']) && $_POST['user-type'] === 'agency')
                    echo 'selected'; ?>>Agency</option>
            </select>

            <button type="submit" id="submit">Register</button>
            <a href="login.php">Already have an account? Login here!</a>
            <div class="message">
                <?php echo $message ?>
            </div>
        </form>
    </div>
</body>

</html>