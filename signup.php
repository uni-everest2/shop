<?php
    require("config.php");
    if (isset($_POST['email'])) {
        $lname = $_POST['lname'];
        $fname = $_POST['fname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], 1);
        $query = "INSERT INTO `users`(`fname`,`lname`,`email`,`password`) VALUES('$fname','$lname','$email','$password')";
        $digikala = mysqli_query($connect, $query);
        if ($digikala == 1) {
            header("Location: login.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ثبت نام</title>
    <link rel="stylesheet" href="assets/css/fontiran.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/signup.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/slick.css">
</head>
<body>
<main>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-6">
                    <img src="assets/img/ddcba6ed.svg" alt="" width="140" height="140">
                    <div class="menu">
                            <div class="headline">ثبت‌ نام در دیجی‌کالا</div>
                            <form action="" method="post">
                                
                                <label for="fname">نام</label>
                                <input type="text" name="fname" id="fname" placeholder="نام خود را وارد کنید">
                                <label for="lname">نام خانوادگی</label>
                                <input type="text" name="lname" id="lname" placeholder="نام خانوادگی خود را وارد کنید">
                                <label for="email">پست الکترونیک یا شماره موبایل</label>
                                <input type="text" name="email" id="email" placeholder="پست الکترونیک یا شماره موبایل خود را وارد نمایید">
                                <label for="password">کلمه عبور</label>
                                <input type="password" name="password" id="password" placeholder="کلمه عبور خود را وارد کنید">
                                <div class="d-flex">
                                <input type="checkbox" name="verify" id="verify" >
                                <label for="verify" class="ver"><a href="#">حریم خصوصی</a> و <a href="#">شرایط و قوانین </a> و قوانین استفاده از سرویس های سایت دیجی‌کالا را مطالعه نموده و با کلیه موارد آن موافقم.
                                </label>
                                </div>
                                <input id="btn" type="submit" value="ثبت نام در دیجی‌ کالا">
                             <div class="footline">  <p> قبلا در دیجی‌کالا ثبت‌ نام کرده‌اید؟ <a href="#">وارد شویــد</a> </div>  </p>
                            </form>

                    </div>
                    
            </div>
        </div>
    </div>
</main>
</body>
</html>