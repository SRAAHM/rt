<?php
session_start();
require_once('../DB_connection.php');
include "../DB_connection.php";
?>

<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Development</title>
    <script src="../../Bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src=".../../Bootstrap/js/jquery-3.3.1.slim.min.js"></script>
    <script src="../../Bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="../../Bootstrap/js/jquery-3.6.3.js"></script>
    <script src="../../Bootstrap/js/jquery-3.6.3.min.js"></script>
    <script src="../../Bootstrap/js/jquery.min.js"></script>
    <script src="../../Bootstrap/js/popper.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../../Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../../Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../Bootstrap/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="../../Bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" type="text/css" href="../../Bootstrap/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="../../Bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" type="text/css" href="../../Bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="../../Bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="../../Bootstrap/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="../../Bootstrap/css/normalize.css">
    <link rel="stylesheet" type="text/css" href=css/custom.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <script src="../../Bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../../Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../Bootstrap/js/bootstrap.min.js"></script>
    <script src="../../Bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="../../Bootstrap/fonts/font-awesome.min.css" />
    <link rel="icon" href="../../logo6.png">

</head>

<body>

    <div class="container mt-5">
        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>تغيير كلمة المرور
                            <a href="index.php" class="btn btn-danger float-end">رجوع</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <?php
                        if (isset($_GET['id'])) {
                            $teacher_id = mysqli_real_escape_string($conn, $_GET['id']);
                            $query = "SELECT * FROM teachers WHERE t_id='$teacher_id' ";
                            $query_run = mysqli_query($conn, $query);

                            if (mysqli_num_rows($query_run) > 0) {
                                $teacher = mysqli_fetch_array($query_run);
                        ?>
                                <form action="code.php" method="POST">
                                    <input type="hidden" name="oldpass" value="<?= $teacher['password']; ?>">
                                    <div class="mb-3">
                                        <label>الاسم الاول</label>
                                        <input type="text" name="newpass" value="<?= $teacher['Fname']; ?>" class="form-control">
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" name="update_teacher_pass" class="btn btn-primary">
                                            تعديل البيانات
                                        </button>
                                    </div>

                                </form>
                        <?php
                            } else {
                                echo "<h4 dir='rtl'>لا يوجد سجل بهذا المعرف</h4>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>