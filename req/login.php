<?php
// $globals = $GLOBALS;

session_start();
session_unset();
session_destroy();
require_once('../DB_connection.php');
include "../DB_connection.php";


if (
	isset($_POST['uname']) &&
	isset($_POST['pass']) &&
	isset($_POST['last']) &&
	isset($_POST['role'])
) {
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	$last = $_POST['last'];
	$role = $_POST['role'];

	$uname = stripcslashes($uname);
	$pass = stripcslashes($pass);
	// $uname = mysqli_real_escape_string($uname);
	// $pass = mysqli_real_escape_string($pass);

	if (empty($uname) || empty($pass)) {
		$Errormsg = "جميع الحقول مطلوبة";
		header("Location : ../login.php?error=$Errormsg");
		echo " <h1 dir='rtl'>فشل في عملية تسجيل الدخول, حاول مجدداً<strong>. قم بالرجوع للصفحة السابقة</strong></h1>";
		// echo " <script>alert('failed to login , try again');</script>";
		exit;
	} else if ($role == "1") {
		$result = mysqli_query($conn, "SELECT * from admin where userName ='$uname' and password ='$pass'");
		$row = mysqli_fetch_array($result);
		if ($row['userName'] == $uname && $row['password'] == $pass) {
			$user_id = $row['user_id'];
			$_SESSION['user_id'] = $user_id;
			// global $globals;
			// $globals['IDUser']  = intval($user_id);
			// $_POST['user'] = $user_id;

			// Save user ID when logging in to a text file
			$file = fopen("user_ids.txt", "a");
			ftruncate($file, 0);
			// fwrite($file, $row['user_id'] . "\n");
			// fwrite($file, $row['userName'] . "\n");
			$entry = $row['user_id'] . PHP_EOL . $row['userName'] . PHP_EOL . 'admin';
			// file_put_contents($file, $entry,  FILE_APPEND | LOCK_EX);
			fwrite($file, $entry);
			fclose($file);

			// define('UserID', intval($row['user_id']));
			// define('UserID', '"' . intval($row['user_id']) . '"');

			// $globals['User_ID'] = intval($row['user_id']);

			echo " <h1 dir='rtl'>تم تسجيل الدخول بنجاح , مرحباً  <strong>" . $row['userName'] . "</strong></h1>";
			header("Location: ../admin/dashboard/index.php");
			exit;
		} else {
			// echo "failed to login";
			echo " <h1 dir='rtl'>فشل في عملية تسجيل الدخول, حاول مجدداً<strong>. قم بالرجوع للصفحة السابقة</strong></h1>";
			// echo " <script>alert('failed to login , try again');</script>";
		}
	} else if ($role == "2") {
		$result1 = mysqli_query($conn, "SELECT * from Teachers where first_name ='$uname' and second_name = '$pass' and last_name ='$last'");
		$row1 = mysqli_fetch_array($result1);
		if ($row1['first_name'] == $uname && $row1['second_name'] == $pass && $row1['last_name'] == $last) {
			$user_id = $row1['id'];
			$_SESSION['user_id'] = $user_id;
			// $_POST['user'] = $user_id;
			// global $globals;
			// $globals['IDUser']  = intval($user_id);

			// Save user ID when logging in to a text file
			$file = fopen("user_ids.txt", "a");
			ftruncate($file, 0);
			// fwrite($file, $row['user_id'] . "\n");
			// fwrite($file, $row['userName'] . "\n");
			$entry = $row1['id'] . PHP_EOL . $row1['first_name'] . ' ' . $row1['second_name'] . ' ' . $row1['last_name'] . PHP_EOL . 'teacher';
			// file_put_contents($file, $entry,  FILE_APPEND | LOCK_EX);
			fwrite($file, $entry);
			fclose($file);

			// $_POST['user'] = $user_id;
			// define('UserID', intval($row1['id']));
			define('UserID', '"' . intval($row['user_id']) . '"');

			// $globals['User_ID'] = intval($row1['id']);
			header("Location: ../Teacher/dashboard/index.php");
			exit;
		} else {
			// echo "failed to login";
			echo " <h1 dir='rtl'>فشل في عملية تسجيل الدخول, حاول مجدداً<strong>. قم بالرجوع للصفحة السابقة</strong></h1>";
			// echo " <script>alert('failed to login , try again');</script>";
		}
	}
	// else if ($role == "3") {
	// 	$result2 = mysqli_query($conn, "SELECT * from students where userName ='$uname' and password ='$pass'");
	// 	$row2 = mysqli_fetch_array($result2);
	// 	if ($row2['userName'] == $uname && $row2['password'] == $pass) {
	// 		$user_id = $row2['id'];
	// 		$_SESSION['user_id'] = $user_id;
	// 		header("Location: ../Student/dashboard/index.php");
	// 		exit;
	// 	} else {
	// 		// echo "failed to login";
	// 		echo " <h1 dir='rtl'>فشل في عملية تسجيل الدخول, حاول مجدداً<strong>. قم بالرجوع للصفحة السابقة</strong></h1>";
	// 		// echo " <script>alert('failed to login , try again');</script>";
	// 	}
	// }
} else {
	echo "جميع الحقول مطلوبة";
	echo " <h1 dir='rtl'>فشل في عملية تسجيل الدخول, حاول مجدداً<strong>. قم بالرجوع للصفحة السابقة</strong></h1>";
	// echo " <script>alert('failed to login , try again');</script>";
}
