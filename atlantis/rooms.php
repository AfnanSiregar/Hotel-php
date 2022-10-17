<?php
include "../atlantis/config/Hotel.php";
$data = new Hotel();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>uiCookies:Atlantis &mdash; Free Bootstrap Theme, Free Responsive Bootstrap Website Template</title>
  <meta name="description" content="Free Bootstrap Theme by uicookies.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text:300,400,700|Rubik:300,400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="css/styles-merged.css">
  <link rel="stylesheet" href="css/style.min.css">
  <link rel="stylesheet" href="css/custom.css">
</head>

<body>
  <header role="banner" class="probootstrap-header">
    <div class="row">
      <a href="index.php" class="probootstrap-logo visible-xs"><img src="img/logo_sm.png" class="hires" width="120" height="33" alt="Free Bootstrap Template by uicookies.com"></a>
      <a href="#" class="probootstrap-burger-menu visible-xs"><i>Menu</i></a>
      <div class="mobile-menu-overlay"></div>
      <nav role="navigation" class="probootstrap-nav hidden-xs">
        <ul class="probootstrap-main-nav">
          <li><a href="index.php">Home</a></li>
          <li><a href="about.php">About</a></li>
          <li class="active"><a href="rooms.php">Our Rooms</a></li>
          <li class="hidden-xs probootstrap-logo-center"><a href="index.php"><img src="img/logo_md.png" class="hires" width="181" height="50" alt="Free Bootstrap Template by uicookies.com"></a></li>
          <li><a href="reservation.php">Reservation</a></li>
          <li><a href="blog.php">Gallery</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="./login-form-14/userLogin.php">Login</a></li>
        </ul>
        <div class="extra-text visible-xs">
          <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
          <h5>Connect With Us</h5>
          <ul class="social-buttons">
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook2"></i></a></li>
            <li><a href="#"><i class="icon-instagram2"></i></a></li>
          </ul>
        </div>
      </nav>
    </div>
  </header>
  <section class="probootstrap-slider flexslider probootstrap-inner">
    <ul class="slides">
      <li style="background-image: url(img/1066729.png);" class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="probootstrap-slider-text text-center">
                <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
                <h1 class="probootstrap-heading probootstrap-animate">The Best Rooms Ever!</h1>
                <div class="probootstrap-animate probootstrap-sub-wrap">Enjoy the best service with complete facilities only at MACHINA Hotels.</div>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </section>

  <section class="probootstrap-section">
    <div class="container">
      <div class="row">

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="probootstrap-room">
            <?php foreach ($data->readRoom1() as $key) : ?>
              <a href="reservation.php"><img src="img/g2a8970a-king-deluxe.webp" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
              <div class="text">
                <h3><?= $key['nama_room'] ?></h3>
                <p>Starting from <strong>Rp <?= $key['harga'] ?>/Night</strong></p>
                <div class="post-meta mb30">
                </div>
                <p><a href="reservation.php" class="btn btn-primary" role="button">Reserve now for Rp <?= $key['harga'] ?></a></p>
              <?php endforeach; ?>
              </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="probootstrap-room">
            <?php foreach ($data->readRoom2() as $key) : ?>
              <a href="reservation.php"><img src="img/g2a9415-king-executive-plus-med-res.webp" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
              <div class="text">
                <h3><?= $key['nama_room'] ?></h3>
                <p>Starting from <strong>Rp <?= $key['harga'] ?>/Night</strong></p>
                <div class="post-meta mb30">
                </div>
                <p><a href="reservation.php" class="btn btn-primary" role="button">Reserve now for Rp <?= $key['harga'] ?></a></p>
              <?php endforeach; ?>
              </div>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="probootstrap-room">
            <?php foreach ($data->readRoom3() as $key) : ?>
              <a href="reservation.php"><img src="img/bdohihi-deluxe-queen.webp" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
              <div class="text">
                <h3><?= $key['nama_room'] ?></h3>
                <p>Starting from <strong>Rp <?= $key['harga'] ?>/Night</strong></p>
                <div class="post-meta mb30">
                </div>
                <p><a href="reservation.php" class="btn btn-primary" role="button">Reserve now for Rp <?= $key['harga'] ?></a></p>
              <?php endforeach; ?>
              </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="probootstrap-room">
            <?php foreach ($data->readRoom4() as $key) : ?>
              <a href="reservation.php"><img src="img/g2a9289-queen-executive-plus-med-res.webp" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
              <div class="text">
                <h3><?= $key['nama_room'] ?></h3>
                <p>Starting from <strong>Rp <?= $key['harga'] ?>/Night</strong></p>
                <div class="post-meta mb30">
                </div>
                <p><a href="reservation.php" class="btn btn-primary" role="button">Reserve now for Rp <?= $key['harga'] ?></a></p>
              <?php endforeach; ?>
              </div>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="probootstrap-room">
            <?php foreach ($data->readRoom5() as $key) : ?>
              <a href="reservation.php"><img src="img/g2a9192-queen-executive-med-res.webp" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
              <div class="text">
                <h3><?= $key['nama_room'] ?></h3>
                <p>Starting from <strong>Rp <?= $key['harga'] ?>/Night</strong></p>
                <div class="post-meta mb30">
                </div>
                <p><a href="reservation.php" class="btn btn-primary" role="button">Reserve now for Rp <?= $key['harga'] ?></a></p>
              <?php endforeach; ?>
              </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="probootstrap-room">
            <?php foreach ($data->readRoom6() as $key) : ?>
              <a href="reservation.php"><img src="img/g2a9224-king-executive.webp" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></a>
              <div class="text">
                <h3><?= $key['nama_room'] ?></h3>
                <p>Starting from <strong>Rp <?= $key['harga'] ?>/Night</strong></p>
                <div class="post-meta mb30">
                </div>
                <p><a href="reservation.php" class="btn btn-primary" role="button">Reserve now for Rp <?= $key['harga'] ?></a></p>
              <?php endforeach; ?>
              </div>
          </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <h2>Why Choose Us?</h2>
          <p class="mb50"><img src="img/curve.svg" class="svg" alt="Free HTML5 Bootstrap Template"></p>
        </div>
        <div class="col-md-4">
          <div class="service left-icon left-icon-sm probootstrap-animate">
            <div class="icon">
              <i class="icon-check"></i>
            </div>
            <div class="text">
              <h3>Best 5 Star Hotel Rooms</h3>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon left-icon-sm probootstrap-animate">
            <div class="icon">
              <i class="icon-check"></i>
            </div>
            <div class="text">
              <h3>Food &amp; Drinks</h3>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon left-icon-sm probootstrap-animate">
            <div class="icon">
              <i class="icon-check"></i>
            </div>
            <div class="text">
              <h3>Free Parking</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="probootstrap-section probootstrap-section-dark">
    <div class="container">
      <div class="row mb30">
        <div class="col-md-8 col-md-offset-2 probootstrap-section-heading text-center">
          <h2>Explore our Services</h2>
          <p class="lead">The best, fastest and classy services.</p>
          <p><img src="img/curve.svg" class="svg" alt="Free HTML5 Bootstrap Template"></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <img src="img/flaticon/svg/001-building.svg" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
            </div>
            <div class="text">
              <h3>Best 5 Star Hotel Rooms</h3>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <img src="img/flaticon/svg/003-restaurant.svg" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
            </div>
            <div class="text">
              <h3>Food &amp; Drinks</h3>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service left-icon probootstrap-animate">
            <div class="icon">
              <img src="img/flaticon/svg/004-parking.svg" class="svg" alt="Free HTML5 Bootstrap Template by uicookies.com">
            </div>
            <div class="text">
              <h3>Free Parking</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="probootstrap-half">
    <div class="image" style="background-image: url(img/67737876_p0.png);"></div>
    <div class="text">
      <div class="probootstrap-animate fadeInUp probootstrap-animated">
        <h2 class="mt0">Best 5 Star hotel</h2>
        <p><img src="img/curve_white.svg" class="seperator" alt="Free HTML5 Bootstrap Template"></p>
        <div class="row">
          <div class="col-md-6">
            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
          </div>
          <div class="col-md-6">
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer role="contentinfo" class="probootstrap-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="probootstrap-footer-widget">
            <p class="mt40"><img src="img/logo_sm.png" class="hires" width="120" height="33" alt="Free HTML5 Bootstrap Template by uicookies.com"></p>
            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="probootstrap-footer-widget">
            <a><img src="./img/li.png" style="width: 360px; height: 360px;" alt=" "></a>
          </div>
        </div>
        <div class="col-md-4">
          <div class="probootstrap-footer-widget">
            <h3>Contact</h3>
            <ul class="probootstrap-contact-info">
              <li><i class="icon-location2"></i> <span>JLN. Dakota No. 8A</span></li>
              <li><a href="https://mail.google.com/mail/u/0/#inbox?compose=new"><i class="icon-mail"></i><span>francafnan@gmail.com</span></a></li>
              <li><i class="icon-phone2"></i><span>+62 8225 3038 085</span></li>
            </ul>

          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <ul class="probootstrap-footer-social">
            <li><a href="https://twitter.com/afnanzayn41148"><i class="icon-twitter"></i></a></li>
            <li><a href="https://www.facebook.com/afnan.sullivan.41148/ "><i class="icon-facebook"></i></a></li>
            <li><a href="https://www.instagram.com/zaynafnan06_mc/"><i class="icon-instagram2"></i></a></li>
          </ul>
          <p>
            <small>&copy; 2017 <a href="https://uicookies.com/" target="_blank">uiCookies:Atlantis</a>. All Rights Reserved. <br> Designed &amp; Developed by <a href="https://uicookies.com/" target="_blank">uicookies.com</a> Demo Images: Unsplash.com &amp; Pexels.com</small>
          </p>

        </div>
      </div>
    </div>
  </footer>
  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>