<?php

session_start();
require_once('DB_connection.php');
include "DB_connection.php";

// try {
//     $conn = mysqli_connect($hostname, $username, $password, $DB_Name);
//     if (!$conn) {
//         die('Connection Failed' . mysqli_connect_error());
//     }
// } catch (\Throwable $th) {
//     echo ('Connection Failed' . $th->getMessage());
// }
// // Get Teacher by ID
// function getTeacherById($teacher_id, $conn)
// {
//     $result = mysqli_query($conn, "SELECT * from Teachers where id ='$teacher_id'");
//     $sql = mysqli_fetch_array($result);
//     return $sql;
// }
if (isset($_POST['save_teacher'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $mname = mysqli_real_escape_string($conn, $_POST['mname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $id_school = mysqli_real_escape_string($conn, $_POST['id_school']);
    $job_title = mysqli_real_escape_string($conn, $_POST['job_title']);
    $specialization = mysqli_real_escape_string($conn, $_POST['specialization']);
    $phase = mysqli_real_escape_string($conn, $_POST['phase']);
    $id_state = mysqli_real_escape_string($conn, $_POST['id_state']);
    $hai = mysqli_real_escape_string($conn, $_POST['hai']);
    $district = mysqli_real_escape_string($conn, $_POST['district']);
    //$notes = mysqli_real_escape_string($conn, $_POST['notes']);

    if (empty($fname) || empty($mname) || empty($lname) || empty($id_school) || empty($job_title) || empty($specialization) || empty($phase) || empty($district) || empty($hai) || empty($id_state)) {
        $_SESSION['message'] = "جميع الحقول مطلوبة";
        // $_SESSION['message'] = $fname . ' ' . $mname . ' ' . $lname . ' ' . $id_school . ' ' . $job_title . ' ' . $specialization . ' ' . $phase . ' ' . $id_state . ' ' . $hai . ' ' . $district;
        header("Location: admission.php");
        exit(0);
    } else {
        $query = "INSERT INTO teachers (first_name,second_name,last_name,id_school,job_title,specialization,phase,id_state,hai,district) VALUES ('$fname','$mname','$lname','$id_school','$job_title','$specialization','$phase','$id_state','$hai','$district')";

        $query_run = mysqli_query($conn, $query);
        if ($query_run) {
            // $qury = " update students set colg_id  =(SELECT colg_id FROM colleges where colg_id = $college_id) where Stu_id='(select MAX(Stu_id) from students)' ";
            // $qury_run = mysqli_query($conn, $qury);
            $_SESSION['message'] = "تم انشاء الاستاذ بنجاح";
            header("Location: index.php");
            exit(0);
        } else {
            $_SESSION['message'] = "لم يتم انشاء البيانات";
            header("Location: admission.php");
            exit(0);
        }
    }
}
