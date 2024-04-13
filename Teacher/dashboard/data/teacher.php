<?php

require_once('../DB_connection.php');
include "../DB_connection.php";

// Get Teacher by ID
function getTeacherById($teacher_id, $conn)
{
    $result = mysqli_query($conn, "SELECT * from Teachers where id ='$teacher_id'");
    $sql = mysqli_fetch_array($result);
    return $sql;
}
