<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>Development</title>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fonts/normalize.css" />
    <link rel="stylesheet" href="fonts/all.min.css" />
    <link rel="stylesheet" href="admin/dashboard/css/style.css" />
    <link rel="stylesheet" href="admin/dashboard/css/style1.css" />
    <link rel="stylesheet" href="admin/dashboard/css/custom.css" />
    <link rel="stylesheet" href="fonts/font-awesome.min.css" /> -->
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
    <link rel="stylesheet" type="text/css" href="admin/dashboard/css/style1.css" />
    <link rel="stylesheet" type="text/css" href="admin/dashboard/css/style.css" />
    <link rel="stylesheet" type="text/css" href="admin/dashboard/css/custom.css" />

    <script src="Bootstrap/js/bootstrap.bundle.js"></script>
    <script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="Bootstrap/js/bootstrap.min.js"></script>
    <script src="Bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="Bootstrap/fonts/font-awesome.min.css" />
    <link rel="icon" href="logo6.png">

</head>
<style>
    .card-body,
    .card-header {
        font-weight: bold;
        font-size: larger;
    }
</style>

<body>

    <div class="container mt-5">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>إضافة مسؤول نظام جديد
                            <!-- <a href="index.php" class="btn btn-danger float-end">BACK</a> -->
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="code.php" method="POST">
                            <div class="mb-3">
                                <label>الاسم الأول</label>
                                <input type="text" name="fname" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>الاسم الأخير</label>
                                <input type="text" name="lname" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>اسم المستخدم</label>
                                <input type="text" name="UserName" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label>كلمة المرور</label>
                                <input type="text" name="Password" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" name="Create_Admin" class="btn btn-primary">حفظ البيانات</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>