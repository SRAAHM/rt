<?php
session_start();
session_unset();
session_destroy();
require_once('DB_connection.php');
include "DB_connection.php";

$max_id = array();
$sql = "SELECT max(`user_id`) FROM `admin`;";
$result = mysqli_query($conn, $sql);
$max_id = mysqli_fetch_assoc($result);
$id = max($max_id) + 0;

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<script>
    window.addEventListener("DOMContentLoaded", function() {
        var mxid = <?php echo '["' . implode('", "', $max_id) . '"]' ?>;
        var xx = Number(mxid[0]) + 0;
        var x = document.getElementById("signupBtnDiv");
        if (xx != 0) {
            x.style.visibility = "hidden";
        } else {
            x.style.visibility = "show";
        }
    });
</script>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Development</title>
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
    <link rel="stylesheet" type="text/css" href="css/css2.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />

    <script src="Bootstrap/js/bootstrap.bundle.js"></script>
    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <script src="Bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="Bootstrap/fonts/font-awesome.min.css" />

    <link rel="icon" href="logo6.png">
</head>

<body class="body-home">
    <div style=" margin-top: 0%;">
        <div class="black-fill"><br />
            <div class="d-flex align-items-center flex-column">
                <form class="login" method="post" action="req/login.php">
                    <div class="text-center">
                        <img src="logo6.png" width="100">
                        <p style="font-size:larger  ;color:brown"> نظام</p>
                    </div>
                    <h3>تسجيل الدخول</h3>
                    <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $_GET['error'] ?>
                        </div>
                    <?php } ?>

                    <div class="mb-3">
                        <label class="form-label">تسجيل الدخول كـ</label>
                        <select class="form-control" name="role" require id="userType" onchange="selectUserType(this.value)" value="">
                            <option value="1">مسؤول النظام في مديرية التربية</option>
                            <option value="2">أستاذ</option>
                            <!-- <option value="3">طالب</option> -->
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" id="useName">اسم المستخدم</label>
                        <input type="text" class="form-control" name="uname" value="" require>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" id="usePass">كلمة المرور</label>
                        <input type="password" class="form-control" value="" name="pass" require id="usePass2">
                    </div>

                    <div class="mb-3" style="display: none;" id="useLast">
                        <label class="form-label">الاسم الاخير</label>
                        <input type="text" class="form-control" value="" name="last" require>
                    </div>

                    <!-- <button type="submit" class="btn btn-primary">دخــــــول</button> -->
                    <input type="submit" class="btn btn-primary" value="دخــــــول">
                    <a href="index.php" class="btn btn-success">الصفحة الرئيسية</a>

                    <div style="display: inline;" id="signupBtnDiv"><a href="user-create.php" class="btn btn-light" id="signupBtn">انشاء مسؤول نظام جديد</a></div>

                </form>
                <br /><br />

            </div>
        </div>

        <footer>
            <div class="footer" style="text-align: center; background-color: #092c3e; color:white;  ">
                <h3>نظام N</h3>
                <p>تم تطوير هذا النظام بفضل الله ثم بمجهود دكاترتنا الاعزاء من لهم كل الفضل في تعليمنا وارشادنا. الحمد والشكر لله!
                </p>
                <p class="footer-bottom-text" style="text-align: center; ">حقوق النسخ والنشر &copy .المهندسين 2023 . كل الحقوق محفوظة.</p>
                <div class="bottom_pos" style="margin-top: 1%;">
                    <a href="admin/dashboard/AboutManagement.php" style="text-decoration: none; font-size: x-large;font-weight: bold; text-align: center; color:darkblue; background-color: white;">حول النظام</a>
                </div>
            </div>
        </footer>
    </div>
    <script>
        function selectUserType(slct) {
            // var userType = document.getElementById('userType');
            var useName = document.getElementById('useName');
            var usePass = document.getElementById('usePass');
            var usePass2 = document.getElementById('usePass2');
            var useLast = document.getElementById('useLast');

            if (slct == 2) {
                // useName.style.display = '';
                // usePass.style.type = 'text';
                if (usePass2.type === "password") {
                    usePass2.type = "text";
                }
                useLast.style.display = '';

                useName.innerText = 'الاسم الاول';
                usePass.innerText = 'الاسم الثاني';
                // useLast.innerText = 'الاسم الاخير';

            } else if (slct == 1) {
                // useName.style.display = '';
                // usePass.style.display = '';
                // usePass.type = 'password';
                if (usePass2.type === "text") {
                    usePass2.type = "password";
                }

                useLast.style.display = 'none';

                useName.innerText = 'اسم المستخدم';
                usePass.innerText = 'كلمة المرور';
                // useLast.innerText = 'الاسم الاخير';

            }
        }
    </script>
</body>

</html>