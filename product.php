<?php
  require('config.php');
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM `products` WHERE `id` = $id";
    $result = mysqli_query($connect, $query);
    $product = mysqli_fetch_object($result);
  } else {
    header("Location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $product->name; ?></title>
    <link rel="stylesheet" href="assets/css/fontiran.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/product.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>
  <?php include('views/header.php') ?>
<main style="margin-top: 2rem">
  <div class="container">
    <div class="row">
        <div class="col-lg-12">
          <div class="card mb-10">
            <div class="card-header">
              <nav class="header-navigation">
                <a href="#" class="btn btn-link">بازگشت به صفحه اصلی</a>

                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">صفحه اصلی</a></li>
                  <li class="breadcrumb-item"><a href="#">مردانه</a></li>
                  <li class="breadcrumb-item"><a href="#">لباس ها</a></li>
                  <li class="breadcrumb-item active" aria-current="page">تی شرت</li>
                </ol>

                <div class="btn-group">
                  <a href="#" class="btn btn-link btn-share">اشتراک گذاری</a>
                  <a href="#" class="btn btn-link">کالاهای مشابه</a>
                </div>
              </nav>
            </div>
            <div class="card-body store-body">
              <div class="product-info">
                <div class="product-gallery">
                  <div class="product-gallery-thumbnails">
                    <ol class="thumbnails-list list-unstyled">
                      <li><img src="https://via.placeholder.com/350x350/ffcf5b" alt=""></li>
                      <li><img src="https://via.placeholder.com/350x350/f16a22" alt=""></li>
                      <li><img src="https://via.placeholder.com/350x350/d3ffce" alt=""></li>
                      <li><img src="https://via.placeholder.com/350x350/7937fc" alt=""></li>
                      <li><img src="https://via.placeholder.com/350x350/930000" alt=""></li>
                    </ol>
                  </div>
                  <div class="product-gallery-featured">
                    <img src="<?php echo $product->img; ?>" alt="">
                  </div>
                </div>
                <div class="product-seller-recommended">
                  <h3 class="mb-5">محصولات مرتبط</h3>
                  <div class="recommended-items card-deck">
                    <div class="card">
                      <img src="https://via.placeholder.com/157x157" alt="" class="card-img-top">
                      <div class="card-body">
                        <h5 class="card-title">25,000 تومان</h5>
                        <span class="text-muted"><small> برند Nickony - L - X تی شرت سایز</small></span>
                      </div>
                    </div>
                    <div class="card">
                      <img src="https://via.placeholder.com/157x157" alt="" class="card-img-top">
                      <div class="card-body">
                        <h5 class="card-title">U$ 55.00</h5>
                        <span class="text-muted"><small>T-Shirt Size X - Large - Nickony Brand</small></span>
                      </div>
                    </div>
                    <div class="card">
                      <img src="https://via.placeholder.com/157x157" alt="" class="card-img-top">
                      <div class="card-body">
                        <h5 class="card-title">U$ 55.00</h5>
                        <span class="text-muted"><small>T-Shirt Size X - Large - Nickony Brand</small></span>
                      </div>
                    </div>
                    <div class="card">
                      <img src="https://via.placeholder.com/157x157" alt="" class="card-img-top">
                      <div class="card-body">
                        <h5 class="card-title">U$ 55.00</h5>
                        <span class="text-muted"><small>T-Shirt Size X - Large - Nickony Brand</small></span>
                      </div>
                    </div>
                  </div>
                  <!-- /.recommended-items-->
                  <p class="mb-5 mt-5"><a href="#"></a>نمایش کامل صفحه</a></p>
                  <div class="product-description mb-5">
                    <h2 class="mb-5">مشخصات محصول</h2>
                    <dl class="row mb-5">
                      <dt class="col-sm-3">برند</dt>
                      <dd class="col-sm-9">Nickony</dd>
                      <dt class="col-sm-3">رنگ</dt>
                      <dd class="col-sm-9">قرمز</dd>
                      <dt class="col-sm-3">سایز</dt>
                      <dd class="col-sm-9">XXL</dd>
                      <dt class="col-sm-3">جنس</dt>
                      <dd class="col-sm-9">کتان</dd>
                    </dl>
                    <h2 class="mb-5">Description</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas
                      necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda
                      ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto,
                      perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est!</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error
                      consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?</p>
                  </div>
                  <div class="product-faq mb-5">
                    <h2 class="mb-3">پرسش و پاسخ</h2>
                    <p class="text-muted">چه اطلاعاتی </p>
                    <div class="main-questions d-inline" data-container="body" data-toggle="popover" data-placement="right" data-content="Are you in doubt? these shortcuts can help you!">
                      <a href="#" class="btn btn-outline-primary">Cost and Delivery time</a>
                      <a href="#" class="btn btn-outline-primary">Warranty</a>
                      <a href="#" class="btn btn-outline-primary">Payment options</a>
                    </div>
                  </div>
                  <div class="product-comments">
                    <h5 class="mb-2">Or ask to David's Store</h5>
                    <form action="" class="form-inline mb-5">
                      <textarea name="" id="" cols="50" rows="2" class="form-control mr-4" placeholder="write a question"></textarea><button class="btn btn-lg btn-primary">Ask</button>
                    </form>
                    <h5 class="mb-5">Lastest Questions</h5>
                    <ol class="list-unstyled last-questions-list">
                      <li><i class="fa fa-comment"></i> <span>Hello david, can i pay with credit card?</span></li>
                      <li><i class="fa fa-comment"></i> <span>can i send it to another address?</span></li>
                    </ol>
                  </div>
                </div>
              </div>
              <div class="product-payment-details">
                <p class="last-sold text-muted"><small>145 items sold</small></p>
                <h4 class="product-title mb-2"><?php echo $product->name; ?></h4>
                <h2 class="product-price display-4"><?php echo number_format($product->price); ?></h2>
                <p class="text-success"><i class="fa fa-credit-card"></i> 12x or  5x $ 5.00</p>
                <p class="mb-0"><i class="fa fa-truck"></i> Delivery in all territory</p>
                <div class="text-muted mb-2"><small>know more about delivery time and shipping forms</small></div>
                <label for="quant">Quantity</label>
                <input type="number" name="quantity" min="1" id="quant" class="form-control mb-5 input-lg" placeholder="Choose the quantity">
                <button class="btn btn-primary btn-lg btn-block">Buy Now</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
</body>
</html>