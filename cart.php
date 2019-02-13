<?php
    require('config.php');
    session_start();
    if (count($_SESSION['cart']) == 0) {
        $_SESSION['cart'] = array();
    }
    if (isset($_GET['q'])) {
        $q = $_GET['q'];
        if ($q == 'add') {
            $product_id = $_GET['id'];
            $dastoorsql = "SELECT * FROM `products` WHERE `id` = $product_id";
            $alireza = mysqli_query($connect, $dastoorsql);
            $product = mysqli_fetch_object($alireza);
            $cartProduct = array(
                "id" => $product->id,
                "name" => $product->name,
                "price" => $product->price,
                "image" => $product->img,
                "qty" => $_GET['tedad']
            );
            // $_SESSION['cart'] = $cartProduct;
            $_SESSION['cart'] = array_merge($_SESSION['cart'], $cartProduct);
            header("Location: cart.php");
        }
    }
    print_r($_SESSION['cart']);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>فروشگاه آنلاین</title>
        <link rel="stylesheet" href="assets/css/fontiran.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/app.css">
        <link rel="stylesheet" href="assets/css/cart.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/slick.css">
    </head>
    <body>
        <main>
                <h2>سبد خرید</h2>
        <div class="d-flex">
            <div class="right">
                    <div class="kala d-flex">
                        <div class="pic">
                                <a href=""><h5><i class="far fa-trash-alt"></i></h5></a>
                                <a href="#"><img src="assets/img/apple.jpg" alt="mac"></a>
                        </div>
                        <div class="ins">
                            <a href=""><h3>کامپیوتر همه کاره 27 اینچی اپل مدل iMac Pro 2017 با صفحه نمایش 5K رتینا</h3></a>
                            <h6>فروشنده:رایکو</h6>
                            <h6>گارانتی 18 ماهه آروند</h6>
                            <h6>رنگ: نوک مدادی<span></span></h6>
                        </div>
                        <h2>تعداد ۱عدد</h2>
                        <h4>۷۲,۸۹۹,۰۰۰ تومان </h4>
                    </div>
            </div>
            <div class="left">
                <div class="top">
                    <div class="toop d-flex">
                        <div class="tr">
                            <h5>مبلغ کل (۱ کالا)</h5>
                            <h5>هزینه ارسال</h5>
                        </div>
                        <div class="tl">
                            <h5>۷۲,۸۹۹,۰۰۰ تومان</h5>
                            <h5>وابسته به آدرس <a href="#"><i class="far fa-question-circle"></i></a></h5>
                        </div>
                    </div>
                    <hr><hr>
                    <div class="bot">
                        <h3>مبلغ قابل پرداخت:</h3>
                        <h3 class="price">۷۲,۸۹۹,۰۰۰ تومان </h3>
                        <a href="#" class="but"><i class="fas fa-arrow-left"><span></span></i>ادامه ثبت سفارش</a>
                        <p>کالاهای موجود در سبد شما ثبت و رزرو نشده‌اند، برای ثبت سفارش مراحل بعدی را تکمیل کنید.<a href="#"><i class="far fa-question-circle"></i></a> </p>
                    </div>
                </div>
                <div class="boot">
                    <h6><i class="fas fa-archive"></i>هفت روز ضمانت تعویض </h6>
                    <h6><i class="far fa-credit-card"></i>پرداخت در محل با کارت بانکی </h6>
                    <h6><i class="fas fa-box"></i>تحویل اکسپرس </h6>
                </div>
            </div>
        </div>
            
        </main>
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/cart.js"></script>
        </body>
        </html>