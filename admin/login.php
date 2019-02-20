<?php
    require("../config.php");
    session_start();
    if (isset($_SESSION['admin_login'])) {
        header("Location: http://localhost/shop/admin/index.php");
    } else {
        if (isset($_POST['username'])) {
            $username = $_POST['username'];
            $query = "SELECT * FROM `admins` WHERE `username` = '$username'";
            $result = mysqli_query($connect, $query);
            if ($result->num_rows > 0) {
                $admin = mysqli_fetch_object($result);
                if (password_verify($_POST['password'], $admin->password)) {
                    $_SESSION['admin_login'] = $admin->id;
                    header("Location: http://localhost/shop/admin/index.php");
                } else {
                    $error = "رمز عبور شما اشتباه است!";
                }
            } else {
                $error = "نام کاربری یافت نشد!";
            }
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>ورود | پنل مدیریت</title>
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/now-ui-dashboard.css">
    </head>
    <body class="text-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-3">
                    <div class="card mt-4">
                        <div class="card-body">
                            <?php if (isset($error)) {
                                echo "<div class='alert alert-danger'>$error</div>";
                            } ?>
                            <form method="post">
                                <div class="form-group">
                                    <label for="username">نام کاربری</label>
                                    <input type="text" class="form-control" name="username" id="username">
                                </div>
                                <div class="form-group">
                                    <label for="password">رمز عبور</label>
                                    <input type="password" class="form-control" name="password" id="password">
                                </div>
                                <button type="submit" class="btn btn-primary">ورود</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>