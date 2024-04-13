<?php
$hostname = "localhost";
$username = "root";
$password = "";
$DB_Name = "exam"; //universitydb
$conn = mysqli_connect($hostname, $username, $password, $DB_Name);
try {
    $conn = mysqli_connect($hostname, $username, $password, $DB_Name);
    if (!$conn) {
        die('Connection Failed' . mysqli_connect_error());
    }
    mysqli_query($conn, "SET NAMES utf8");
    mysqli_query($conn, "SET CHARACTER SET utf8");
} catch (Throwable $th) {
    echo ('Connection Failed' . $th->getMessage());
}
