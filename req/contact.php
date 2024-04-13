<?php
session_start();
require_once('../DB_connection.php');
include "../DB_connection.php";

$email = mysqli_real_escape_string($conn, $_POST['email']);
$full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
$message = mysqli_real_escape_string($conn, $_POST['message']);
if (isset($_POST['Save_Message'])) {

	if (empty($email)) {
		$em = "يجب إدخال البريد الإلكتروني";
		header("Location: ../index.php?error=$em#contact");
		exit;
	} else if (empty($full_name)) {
		$em = "يجب إدخال الاسم الكامل";
		header("Location: ../index.php?error=$em#contact");
		exit;
	} else if (empty($message)) {
		$em = "يجب إدخال نص الرسالة";
		header("Location: ../index.php?error=$em#contact");
		exit;
	} else if (empty($email) && empty($full_name) && empty($message)) {
		$em = "يجب إدخال جميع الحقول";
		header("Location: ../index.php?error=$em#contact");
		exit;
	} else {
		$sql = "INSERT INTO message (sender_full_name, sender_email, message) VALUES ('$full_name', '$email','$message')";
		$query_run = mysqli_query($conn, $sql);
		if ($query_run) {
			$sm = "تم إرسال الرسالة بنجاح";
			header("Location: ../index.php?success=$sm#contact");
			exit;
		} else {
			$sm = "لم يتم إرسال الرسالة";
			header("Location: ../index.php?success=$sm#contact");
			exit;
		}
	}
} else {
	header("Location: ../index.php?erorr=$sm#contact");

	exit;
}
