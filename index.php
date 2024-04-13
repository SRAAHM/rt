<!DOCTYPE html>
<html lang="ar" dir="rtl">

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
    <!-- <link rel="stylesheet" type="text/css" href="css/custom.css" /> -->
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/css2.css" />

    <script src="Bootstrap/js/bootstrap.bundle.js"></script>
    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <script src="Bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="Bootstrap/fonts/font-awesome.min.css" />

    <link rel="icon" href="logo6.png">
</head>

<body class="body-home" dir="rtl">
    <div class="black-fill">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-light" id="homeNav">
                <div class="container-fluid" style="margin-top: 1%;">
                    <a class="navbar-brand" href="#">
                        <img src="logo6.png" width="40">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#" style="color:black; font-weight:500; font-size: larger;">الصفحة الرئيسية</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about" style="color:black; font-weight:500; font-size: larger;">حـــول</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact" style="color:black; font-weight:500; font-size: larger;">تواصل معنا</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav me-right mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="login.php" style="color:black; font-weight:500; font-size: larger;">تسجيل الدخول</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="admission.php" style="color:black; font-weight:500; font-size: larger;">تعبئة الاستمارة</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <section class="welcome-text d-flex justify-content-center align-items-center flex-column">
                <img src="logo8.png">
                <h4>مرحباً بكم في نظام توزيع المراقبين على المراكز الامتحانية</h4>
                <p style="font-size: large;">
                    جودة عالية وثقة كبيرة وعمليات ذكاء اصطناعي
                </p>
            </section>
            <section id="about" class="d-flex justify-content-center align-items-center flex-column">
                <div class="card mb-3 card-1">
                    <div class="row g-0">
                        <div class="col-md-4">
                            <img src="logo6.png" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">حـــول</h5>
                                <p class="card-text">
                                    نظام توزيع المراقبين على المراكز الامتحانية هو نظام يهدف إلى تسهيل عملية توزيع المراقبين على المراكز الامتحانية بشكل أكثر دقة وسرعة وأمان. يتميز النظام بالدقة العالية في توزيع المراقبين والمراكز الامتحانية والتي تعتبر من أهم العوامل التي تؤثر على نجاح العملية الامتحانية.
                                </p>
                                    <!-- <?php //$setting['about'] 
                                            ?> -->
                                    <!-- </p>
                                <p class="card-text"><small class="text-muted">N University</small></p> -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="contact" class="d-flex justify-content-center align-items-center flex-column">
                <form method="POST" action="req/contact.php">
                    <h3>تواصل معنا</h3>
                    <?php if (isset($_GET['error'])) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $_GET['error'] ?>
                        </div>
                    <?php } ?>
                    <?php if (isset($_GET['success'])) { ?>
                        <div class="alert alert-success" role="alert">
                            <?= $_GET['success'] ?>
                        </div>
                    <?php } ?>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">البريد الإلكتروني</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">لن يتم مشاركة عنوان بريدك الإلكتروني مع أي أحد آخر.</div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">الاسم الكامل</label>
                        <input type="text" name="full_name" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">نص الرسالة</label>
                        <textarea class="form-control" name="message" rows="4"></textarea>
                    </div>
                    <button type="submit" name="Save_Message" class="btn btn-primary" style="background-color: #092c3e; color: white; width:30%;">إرسال</button>
                </form>
            </section>

        </div>

        <!-- <footer class="footer" style=" margin-top: 10%;">
        <div class="container">
            <div class="footer-in">
                <p class="mb-0" style="text-align: center;">حقوق النسخ والنشر &copy .المهندسين 2023 . كل الحقوق محفوظة.</p>
            </div>
        </div>
        <div class="bottom_pos">
            <a href="AboutManagement.php" style="text-decoration: none; font-size: x-large;font-weight: bold; text-align: center; color:darkblue; background-color: white;">حول النظام</a>
        </div>
    </footer> -->
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
</body>

</html>