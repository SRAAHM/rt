<?php
// session_start();
// require_once('dbcon.php');
// include "dbcon.php";
session_start();
require_once('../../DB_connection.php');
include "../../DB_connection.php";

// Read from the text file on other pages
$lines = [];
$file = fopen("../../req/user_ids.txt", "r");
while (!feof($file)) {
    $lines[] = fgets($file);
    // echo $line;
}
fclose($file);
$userid = $lines[0];

$teachinfo = mysqli_query($conn, "SELECT t.id as 'id', t.first_name as 'Fname', t.second_name as 'Mname', t.last_name as 'Lname', sc.name as 'id_school', t.job_title as 'job_title', sp.name as 'specialization', t.phase as 'phase', st.name as 'id_state', h.name as 'hai', d.name as 'district' FROM teachers t, hai h, district d, state st, school sc, specialization sp WHERE t.id_school = sc.id and t.specialization = sp.id and t.id_state = st.id and t.hai = h.id and  t.district = d.id  and  t.id = '$userid'");
$row = mysqli_fetch_array($teachinfo);
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Development</title>
    <script src="../../Bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="../../Bootstrap/js/jquery-3.3.1.slim.min.js"></script>
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
    <link rel="stylesheet" type="text/css" href="css/custom.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="style.css" />

    <script src="../../Bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../../Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../Bootstrap/js/bootstrap.min.js"></script>
    <script src="../../Bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="../../Bootstrap/fonts/font-awesome.min.css" />
    <link rel="icon" href="../../logo6.png">

    <script>
        function openNav() {
            document.getElementById("sidebar").style.width = "270px";
            document.getElementById("xp-menubar").style.marginLeft = "270px";

        }

        function closeNav() {
            document.getElementById("sidebar").style.width = "0";
            document.getElementById("xp-menubar").style.marginLeft = "0";

        }
    </script>
</head>
<style>
    /* #sidebar {
        float: right;
        height: 100%;
    } */
    /* #sidebar {
        position: relative;float: right;width: 22%;
        height: inherit;
    } */
</style>

<body class="body-home">
    <!-- <div id="sidebar">
        <div class="sidebar-header">
            <h3><img src="logo6.png" class="img-fluid" /><span><span style="color:rgba(121, 34, 46, 0.779);font-size: x-large; font-family: 'Lobster', cursive;font-style: italic; ">N</span>
                    نظام</span></h3>
        </div>
        <ul class="list-unstyled component m-0">

            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&blacktriangleright;</a>

            <li class="active">
                <a href="#" class="dashboard"><i class="material-icons">dashboard</i>لوحة التحكم </a>
            </li>

            <li class="dropdown">
                <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="material-icons"></i>الطلاب
                </a>
                <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                    <li><a href="#">واجهة الطلاب</a></li>
                </ul>
            </li>

            <li class="dropdown">
                <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <i class="material-icons"></i>الدرجات
                </a>
                <ul class="collapse list-unstyled menu" id="homeSubmenu2" <li><a href="#">واجهة الدرجات</a>
            </li>

        </ul>

        <br><br>
        <hr>
        <h3>نمط الثيم</h3>
        <button class="toggle-btn">
            <span class="circle"><i class="icon fas fa-sun"></i></span>
        </button>
    </div> -->
    <div class="container-fluid" style="padding: 0%;">
        <div id="sidebar" style="position: relative;float: right;width: 22%; height: max-content;">
            <div class="sidebar-header">
                <h3><img src="logo6.png" class="img-fluid" /><span style="color:rgba(121, 34, 46, 0.779); font-size: x-large; font-family: 'Lobster', cursive;font-style: italic; "><span>نظام</span>N</span></h3>
            </div>
            <ul class="list-unstyled component m-0">

                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&blacktriangleright;</a>

                <li class="active">
                    <a href="#" class="dashboard" style="font-size: larger; font-family: 'Lobster', cursive; "><i class="material-icons">dashboard</i> - لوحة التحكم</a>
                    <!-- <p style="color: black;"><?= $user_id; ?></p> -->
                </li>

                <li class="dropdown">

                    <a href="#homeSubmenu1" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <img src="img/info.png" alt=".." width="40px">
                        <i class="material-icons"></i>التوزيع
                    </a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu1">
                        <li> <a href="Distribution/index.php"> <img src="img/info.png" alt=".." width="40px">واجهة التوزيع</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#homeSubmenu2" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                        <img src="img/log-out.png" alt=".." width="40px" style="margin-right: 50px;">
                        <i class="material-icons"></i>تسجيل الخروج
                    </a>
                    <ul class="collapse list-unstyled menu" id="homeSubmenu2">
                        <li><a href="../../index.php"><img src="img/log-out.png" alt=".." width="40px" style="margin-right: 50px;">تسجيل الخروج</a></li>
                    </ul>
                </li>
            </ul>
            <hr>
            <h3>نمط الثيم</h3>
            <button class="toggle-btn">
                <span class="circle"><i class="icon fas fa-sun"></i></span>
            </button>
        </div>

        <div class="top-navbar">
            <div class="xd-topbar">
                <div class="row">
                    <div id="cls1" class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                        <div class="xp-menubar">
                            <!-- ☰ -->
                            <span id="openbtn" class="material-icons text-white" onclick="openNav()">&blacktriangle;</span>
                        </div>
                    </div>

                    <div class="col-md-5 col-lg-3 order-3 order-md-2">
                        <div class="xp-searchbar">
                            <form>
                                <div class="input-group" id="cls">
                                    <input type="search" class="form-control" placeholder="أبحث هنا">
                                    <div class="input-group-append" style="float: left;">
                                        <button class="btn" type="submit" id="button-addon2">ابحث
                                        </button>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="Deatiles" style="align-items: center;">
            <div style="display: inline-table;  position: absolute; width: 22rem;">
                <!-- <a href="../../Distribution/index.php"> <button id="grpbtns" type="submit"><img src="img/info.png"><br><span>التوزيع</span></button></a> -->
            </div>
            <div style="display: flex;  position: relative; width: 22rem; ">
                <a href="../../index.php"> <button id="grpbtns" type="submit"><img src="img/log-out.png"><br><span>تسجيل الخروج</span></button></a>
            </div>
            <div style="display: block; margin-right: 20%;">
                <div class="card" style="width: 22rem;">
                    <img style="height: 70%; width: 60%;margin: 5px auto;  " src="img/teacher-Male.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">@
                            <?= $row['Fname'] ?>
                        </h5>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">الاسم الاول :
                            <?= $row['Fname'] ?>
                        </li>
                        <li class="list-group-item">الاسم الاخير :
                            <?= $row['Lname'] ?>
                        </li>
                        <li class="list-group-item">المدرسة :
                            <?= $row['id_school'] ?>
                        </li>
                        <li class="list-group-item">العمل :
                            <?= $row['job_title'] ?>
                        </li>
                        <li class="list-group-item">الرغبة في المراقبة :
                            <?= $row['phase'] ?>
                        </li>
                        <li class="list-group-item">التخصص :
                            <?= $row['specialization'] ?>
                        </li>

                        <!-- <li id="grpbtns" class="dropdown" style="width: 300px; margin :5px auto; font-size:20px; height: 80px; ">
                        <a href="changepassword.php?id=<?= $row['id']; ?>" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle1">
                            تغيير كلمة المرور
                        </a>

                    </li><br> -->
                    </ul>
                </div>
                <!-- <a href="../../index.php"><button id="grpbtns" type="submit"><img src="img/log-out.png"><br><span>خروج</span></button></a> -->

            </div>

        </div>
        <!-- <footer> -->
        <div class="footer" style="text-align: center; background-color: #092c3e; color:white;  ">
            <h3>نظام N</h3>
            <p>تم تطوير هذا النظام بفضل الله ثم بمجهود دكاترتنا الاعزاء من لهم كل الفضل في تعليمنا وارشادنا. الحمد والشكر لله!
            </p>
            <p class="footer-bottom-text" style="text-align: center; ">حقوق النسخ والنشر &copy .المهندسين 2023 . كل الحقوق محفوظة.</p>
            <div class="bottom_pos" style="margin-top: 0%;">
                <a href="AboutManagement.php" style="text-decoration: none; font-size: x-large;font-weight: bold; text-align: center; color:darkblue; background-color: white;">حول النظام</a>
            </div>
        </div>
        <!-- </footer> -->
    </div>
</body>

<script>
    document.querySelector(".toggle-btn").addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
        document.getElementById("sidebar").classList.toggle('dark-mode');

        if (document.body.classList.contains('dark-mode') || document.getElementById("sidebar").classList.contains('dark-mode')) {
            document.querySelector(".icon").classList.remove('fa-sun');
            document.querySelector(".icon").classList.add('fa-moon');
        } else {
            document.querySelector(".icon").classList.remove('fa-moon');
            document.querySelector(".icon").classList.add('fa-sun');
        }
    });
</script>
</script>
</body>

</html>