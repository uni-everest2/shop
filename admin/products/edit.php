<?php
    session_start();
    require("../../config.php");
    require('../functions.php');
    if (isset($_SESSION['admin_login'])) {

    } else {
        header("Location: http://localhost/shop/admin/login.php");
    }
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $q = "SELECT * FROM `products` WHERE `id` = '$id'";
        $r = mysqli_query($connect, $q);
        if ($r->num_rows > 0) {
            $product = mysqli_fetch_object($r);
        } else {
            header("Location: http://localhost/shop/admin/products/index.php");
        }
    } else {
        header("Location: http://localhost/shop/admin/products/index.php");
    }
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $offer = $_POST['offer'];
        $edit = "UPDATE `products` SET `name`='$name', `price`='$price', `offer`='$offer' WHERE `id` = '$id'";
        $redit = mysqli_query($connect, $edit);
        if ($redit == 1) {
            header("Location: http://localhost/shop/admin/products/index.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    محصولات | پنل مدیریت
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/fontiran.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.3.0" rel="stylesheet" />
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>
<body>
    
    <div class="wrapper ">
        <?php include('../templates/sidebar.php'); ?>
        <div class="main-panel" id="main-panel">
            <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                        </div>
                        <a class="navbar-brand" href="#pablo">محصولات</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                <i class="now-ui-icons users_single-02"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">Account</span>
                                </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="panel-header panel-header-lg">
            </div>
            <div class="content">
                <div class="card">
                    <div class="card-body">
                        <form method="post">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="name">نام محصول</label>
                                        <input type="text" name="name" id="name" class="form-control" value="<?php echo $product->name ?>">
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="price">قیمت محصول</label>
                                        <input type="text" name="price" id="price" class="form-control" value="<?php echo $product->price ?>">
                                    </div>
                                </div>
                                <div class="col-sm">
                                    <div class="form-group">
                                        <label for="offer">تخفیف</label>
                                        <select name="offer" id="offer" class="form-control">
                                            <option value="no" <?php if ($product->offer == 'no') { echo "selected"; } ?>>ندارد</option>
                                            <option value="yes" <?php if ($product->offer == 'yes') { echo "selected"; } ?>>دارد</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">ذخیره</button>
                        </form>
                    </div>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright" id="copyright">
                        &copy; طراحی و توسعه
                        <a href="https://uni-everest.com" target="_blank">کالج اورست</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>

<script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/now-ui-dashboard.min.js?v=1.3.0" type="text/javascript"></script>
  <!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
    $("#dataTable").DataTable();
  </script>
</body>

</html>