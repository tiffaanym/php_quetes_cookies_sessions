<?php
session_start();
if (!isset($_SESSION['loginname'])) {
    header('Location: login.php');
    exit();
}

if (!empty($_GET['add_to_cart'])) {
    $product = $_GET['add_to_cart'];
    setcookie("cookie[$product]", 0);
    $allcookies = $_COOKIE['cookie'];
    //var_dump($allcookies);

    switch ($_GET['add_to_cart']) {
        case "pecan_nuts" :
            $allcookies[$product]++;
            setcookie("cookie[$product]", $allcookies[$product]);
            break;
        case "chocolate_chips" :
            $allcookies[$product]++;
            setcookie("cookie[$product]", $allcookies[$product]);
            break;
        case "mms_cookie" :
            $allcookies[$product]++;
            setcookie("cookie[$product]", $allcookies[$product]);
            break;
        case "chocolate_cookie" :
            $allcookies[$product]++;
            setcookie("cookie[$product]", $allcookies[$product]);
            break;
    }
    header('Location: index.php');
    exit();
}

require 'inc/head.php'; ?>



<section class="cookies container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-pecan_nuts.jpg" alt="cookies choclate chips" class="img-responsive"/>
        <figcaption class="caption">
          <h3 class="cookie_name" >Pecan nuts</h3>
          <p>Cooked by Penny !</p>
          <a  href="?add_to_cart=pecan_nuts" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-chocolate_chips.jpg" alt="cookies choclate chips" class="img-responsive"/>
        <figcaption class="caption">
          <h3 class="cookie_name">Chocolate chips</h3>
          <p>Cooked by Bernadette !</p>
          <a  href="?add_to_cart=chocolate_chips" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-chocolate_cookie.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3 class="cookie_name">Chocolate cookie</h3>
          <p>Cooked by Bernadette !</p>
          <a  href="?add_to_cart=chocolate_cookie" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-mms_cookie.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3 class="cookie_name">M&M's&copy; cookies</h3>
          <p>Cooked by Penny !</p>
          <a  href="?add_to_cart=mms_cookie" class="btn btn-primary">
            <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
          </a>
        </figcaption>
      </figure>
    </div>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
