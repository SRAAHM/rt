<?php
session_start();
require_once('DB_connection.php');
include "DB_connection.php";

$sql = "select * from school";
$resultschool = mysqli_query($conn, $sql);
$sql = "select * from hai";
$resulthai = mysqli_query($conn, $sql);
$sql = "select * from district";
$resultdistrict = mysqli_query($conn, $sql);
$sql = "select * from state";
$resultstate = mysqli_query($conn, $sql);
$sql = "select * from specialization";
$resultspecialization = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
	<title>Development</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<script src="Bootstrap/js/jquery-3.3.1.min.js"></script>
	<script src="Bootstrap/js/jquery-3.3.1.slim.min.js"></script>
	<script src="Bootstrap/js/jquery-3.5.1.min.js"></script>
	<script src="Bootstrap/js/jquery-3.6.3.js"></script>
	<script src="Bootstrap/js/jquery-3.6.3.min.js"></script>
	<script src="Bootstrap/js/jquery.min.js"></script>
	<script src="Bootstrap/js/popper.min.js"></script>

	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap-grid.min.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/stylead.css" />

	<script src="Bootstrap/js/bootstrap.bundle.js"></script>
	<script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="Bootstrap/js/bootstrap.min.js"></script>
	<script src="Bootstrap/js/bootstrap.js"></script>

	<link rel="stylesheet" href="Bootstrap/fonts/font-awesome.min.css" />
	<link rel="icon" href="logo6.png">

</head>

<body class="admission">

	<div class="container-fluid">
		<div class="row pt-0" style="margin-left: 0%; margin-right: 0%;">
			<div class="col-xl-12 col-lg-12 col-md-12 w-100">
				<div class="bg-info text-center">
					<div class="table-one flex-wrap flex-md-no-wrap pt-3 pb-2 mb-3 text-white admin-dashboard pl-3">
						<h4>استمارة تسجيل استاذ جديد</h4>
					</div>
				</div>
			</div>
		</div>
		<?php include('message.php'); ?>

		<div class="row m-3">
			<div class="col-md-12">
				<form action="registration.php" method="POST">
					<!-- enctype="multipart/form-data" -->
					<div class="row mt-3">
						<div class="col-md-4">
							<div class="form-group" style="text-align: right;">
								<label>*الاسم الاول:</label>
								<input type="text" name="fname" class="form-control" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group" style="text-align: right;">
								<label>*الاسم الاوسط:</label>
								<input type="text" name="mname" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group" style="text-align: right;">
								<label required>*الاسم الاخير:</label>
								<input type="text" name="lname" class="form-control">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group" style="text-align: right;">
								<label>*المدرسة: </label>
								<select class="browser-default custom-select" name="id_school">
									<option>اختار المدرسة</option>
									<?php
									// $query = "select course_code from courses";
									// $run = mysqli_query($conn, $query);
									while ($row = mysqli_fetch_array($resultschool)) {
										echo	"<option value=" . $row['id'] . ">" . $row['name'] . "</option>";
									}
									?>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group" style="text-align: right;">
								<label required>*عنوان العمل:</label>
								<input type="text" name="job_title" class="form-control">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group" style="text-align: right;">
								<label>*التخصص:</label>
								<select class="browser-default custom-select" name="specialization">
									<option>اختار التخصص</option>
									<?php
									// $query = "select session from sessions";
									// $run = mysqli_query($con, $query);
									while ($row = mysqli_fetch_array($resultspecialization)) {
										echo	"<option value=" . $row['id'] . ">" . $row['name'] . "</option>";
									}
									?>
								</select>

							</div>
						</div>

					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group" style="text-align: right;">
								<label>*الرغبة في المراقبة: </label>
								<select class="browser-default custom-select" name="phase">
									<option>اختار الرغبة</option>
									<option value="نعم">نعم</option>
									<option value="لا">لا</option>
								</select>
							</div>
						</div>
						<!-- <div class="col-md-4">
							<div class="form-group" style="text-align: right;">
								<label required>*المرحلة:</label>
								<input type="text" name="phase" class="form-control">
							</div>
						</div> -->
						<div class="col-md-4">
							<div class="form-group" style="text-align: right;">
								<label>*المحافظة:</label>
								<select class="browser-default custom-select" name="id_state">
									<option>اختار المحافظة</option>
									<?php
									// $query = "select session from sessions";
									// $run = mysqli_query($con, $query);
									while ($row = mysqli_fetch_array($resultstate)) {
										echo	"<option value=" . $row['id'] . ">" . $row['name'] . "</option>";
									}
									?>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group" style="text-align: right;">
								<label>*الحي:</label>
								<select class="browser-default custom-select" name="hai">
									<option>اختار الحي</option>
									<?php
									// $query = "select session from sessions";
									// $run = mysqli_query($con, $query);
									while ($row = mysqli_fetch_array($resulthai)) {
										echo	"<option value=" . $row['id'] . ">" . $row['name'] . "</option>";
									}
									?>
								</select>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group" style="text-align: right;">
								<label>*القضاء:</label>
								<select class="browser-default custom-select" name="district">
									<option>اختار القضاء</option>
									<?php
									// $query = "select session from sessions";
									// $run = mysqli_query($con, $query);
									while ($row = mysqli_fetch_array($resultdistrict)) {
										echo	"<option value=" . $row['id'] . ">" . $row['name'] . "</option>";
									}
									?>
								</select>
							</div>
						</div>
						<!-- 
						<div class="col-md-4">
							<div class="form-group" style="text-align: right;">
								<label>*ملاحظات:</label>
								<textarea class="form-control" name="notes" rows="4" placeholder="ليس من الضروري كتابة الملاحظات"></textarea>
							</div>
						</div> -->
					</div>

					<!-- <div class="modal-footer">
						<input type="submit" class="btn btn-primary px-5" name="save_teacher" value="حفظ وإرسال">
					</div> -->
					<div class="modal-footer">
						<button type="submit" name="save_teacher" class="btn btn-primary">حفظ وإرسال</button>
					</div>
				</form>
			</div>
		</div>
		<!-- <div class="row">
			<div class="col-md-12 w-100 p-5">
				<h4 class="bg-secondary p-3 text-center text-white">Undertaking</h4>
				<h5>Candidates awaiting results are required to sign the following undertaking:</h5>
				<p class="tet-justify">
					I solemnly declare that I have submitted the application with the consent of my father / guardian. I pledge to abide by the Rules and Regulations of the ICBS Lahore and shall not take part in political activities of any kind. If I do so the ICBS Administration will have the right to strike my name off the ICBS Rolls. I pledge that I will not keep in my possession weapons of any kind whether licensed or unlicensed. I affirm that I was never expelled / rusticated by any Institution at any time. I understand that if my class attendance percentage is not up to the required standard of the ICBS, I will not be eligible to sit in the final examinations. I affirm that if at any stage the documents submitted by me for admission are proved forged, fake, or erroneous I shall be responsible for that and the ICBS Administration shall be rightful to cancel my admission and to take necessary action against me.
					I solemnly declare that I have submitted the application with the consent of my father / guardian. I pledge to abide by the Rules and Regulations of the ICBS Lahore and shall not take part in political activities of any kind. If I do so the ICBS Administration will have the right to strike my name off the ICBS Rolls. I pledge that I will not keep in my possession weapons of any kind whether licensed or unlicensed. I affirm that I was never expelled / rusticated by any Institution at any time. I understand that if my class attendance percentage is not up to the required standard of the ICBS, I will not be eligible to sit in the final examinations. I affirm that if at any stage the documents submitted by me for admission are proved forged, fake, or erroneous I shall be responsible for that and the ICBS Administration shall be rightful to cancel my admission and to take necessary action against me..
				</p>
			</div>
		</div> -->
	</div>
</body>

</html>