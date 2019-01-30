<?php
    require('config.php');
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
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/slick.css">
    </head>
    <body>
        <?php include('views/header.php'); ?>
        <main>
            <section class="sliders">
                <div>
                    <img src="assets/img/6010.jpg" alt="" class="img-fluid">
                </div>
                <div>
                    <img src="assets/img/6010.jpg" alt="" class="img-fluid">
                </div>
            </section>
            <?php
                $query = "SELECT * FROM `products` WHERE `offer` = 'yes'";
                $result = mysqli_query($connect, $query);
                $count = $result->num_rows;
                if ($count != 0) {
            ?>
            <section class="offers">
                <div class="container">
                    <h2>تخفیفات شگفت انگیز</h2>
                    <div class="offer-slide">
                        <?php
                            while ($offer = mysqli_fetch_assoc($result)) {
                        ?>
                        <div class="product">
                            <a href="#">
                                <img src="<?php echo $offer['img'] ?>" alt="" class="img-fluid">
                                <h3><?php echo $offer['name'] ?></h3>
                                <div class="price">
                                    <strong><?php echo number_format($offer['offer_price']) ?> تومان</strong>
                                    <span><?php echo number_format($offer['price']) ?> تومان</span>
                                </div>
                            </a>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            </section>
            <?php
                }
            ?>
            <section class="ezafe">
                <div class="container">
                    <div class="row">
                        <div class="col-3">
                            <a href="#">
                                <img src="https://dkstatics-public.digikala.com/digikala-adservice-banners/6029.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#">
                                <img src="https://dkstatics-public.digikala.com/digikala-adservice-banners/6029.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#">
                                <img src="https://dkstatics-public.digikala.com/digikala-adservice-banners/6029.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-3">
                            <a href="#">
                                <img src="https://dkstatics-public.digikala.com/digikala-adservice-banners/6029.jpg" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section class="products">
                <div class="container">
                    <div class="card">
                        <?php
                            $query = "SELECT * FROM `products` WHERE `cat_id` = 1";
                            $result = mysqli_query($connect, $query);
                        ?>
                        <div class="card-body">
                            <h2>گوشی همراه</h2>
                            <div class="product-slider">
                                <?php
                                    while ($product = mysqli_fetch_assoc($result)) {
                                ?>
                                <div class="single">
                                    <a href="#">
                                        <img src="<?php echo $product['img'] ?>" alt="" class="img-fluid">
                                        <h5><?php echo $product['name'] ?></h5>
                                        <div class="price">
                                            <?php
                                            if ($product['offer'] == 'yes') {
                                                echo number_format($product['offer_price']);
                                            } else {
                                                echo number_format($product['price']);
                                            }
                                            ?>
                                            <span>تومان</span>
                                        </div>
                                    </a>
                                </div>
                                <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="products">
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <h2>عنوان دسته بندی</h2>
                            <div class="product-slider">
                                <div class="single">
                                    <a href="#">
                                        <img src="assets/img/1564413.jpg" alt="" class="img-fluid">
                                        <h5>عنوان محصول</h5>
                                        <div class="price">
                                            25,000
                                            <span>تومان</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="single">
                                    <a href="#">
                                        <img src="assets/img/1564413.jpg" alt="" class="img-fluid">
                                        <h5>عنوان محصول</h5>
                                        <div class="price">
                                            25,000
                                            <span>تومان</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="single">
                                    <a href="#">
                                        <img src="assets/img/1564413.jpg" alt="" class="img-fluid">
                                        <h5>عنوان محصول</h5>
                                        <div class="price">
                                            25,000
                                            <span>تومان</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="single">
                                    <a href="#">
                                        <img src="assets/img/1564413.jpg" alt="" class="img-fluid">
                                        <h5>عنوان محصول</h5>
                                        <div class="price">
                                            25,000
                                            <span>تومان</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="single">
                                    <a href="#">
                                        <img src="assets/img/1564413.jpg" alt="" class="img-fluid">
                                        <h5>عنوان محصول</h5>
                                        <div class="price">
                                            25,000
                                            <span>تومان</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-4">
                        <h5>خدمات مشتریان</h5>
                        <ul>
                            <li>
                                <a href="#">
                                    پرسش های متداول
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    رویه های بازگرداندن کالا
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    شرایط استفاده
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    حریم خصوصی
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-4">
                        <h5>ثبت نام در خبرنامه</h5>
                        <p>ا ثبت نام در خبرنامه دیجی استایل، اولین نفری باشید که از جدیدترین محصولات، جشنواره ها و فروش‌های ویژه ما مطلع می شوید.</p>
                        <div>
                            <input type="text" name="phone" placeholder="شماره همراه خود را وارد کنید">
                            <button class="btn btn-dark btn-sm">ثبت شماره</button>
                        </div>
                    </div>
                    <div class="col-4">
                        <h5>اطلاعات</h5>
                        <ul>
                            <li>
                                <a href="#">درباره</a>
                            </li>
                            <li>
                                <a href="#">تماس با ما</a>
                            </li>
                        </ul>
                        <ul class="social">
                            <li>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-telegram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
        <script src="assets/js/jquery-3.3.1.min.js"></script>
        <script src="assets/js/jquery.migrate.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/app.js"></script>
    </body>
</html>