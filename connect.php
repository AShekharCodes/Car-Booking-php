<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "car_booking_db";

$con = mysqli_connect($hostname, $username, $password, $database);

if ($con) {
    echo "Connection Successful!";
} else {
    die(mysqli_error($con));
}

?>