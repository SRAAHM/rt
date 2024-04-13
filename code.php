<?php
session_start();
require_once('DB_connection.php');
include "DB_connection.php";

if (isset($_POST['Create_Admin'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $UserName = mysqli_real_escape_string($conn, $_POST['UserName']);
    $Password = mysqli_real_escape_string($conn, $_POST['Password']);
    if (empty($fname) || empty($lname) || empty($UserName) || empty($Password)) {
        $_SESSION['message'] = "جميع الحقول مطلوبة";
        header("Location: user-create.php");
        exit(0);
    } else {
        $query = "INSERT INTO admin(Fname,Lname,userName,password) VALUES ('$fname','$lname','$UserName','$Password');";
        $query_run = mysqli_query($conn, $query);
        if ($query_run) {
            $_SESSION['message'] = "تم إنشاء مسؤول النظام بنجاح";
            header("Location: login.php");
            exit(0);
        } else {
            $_SESSION['message'] = "لم يتم حفظ البيانات";
            header("Location: user-create.php");
            exit(0);
        }
    }
}
