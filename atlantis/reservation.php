<?php
include "./config/Hotel.php";
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

  <!-- START: header -->
  <header role="banner" class="probootstrap-header">
    <div class="container">
      <div class="row">
        <a href="index.php" class="probootstrap-logo visible-xs"><img src="img/logo_sm.png" class="hires" width="120" height="33" alt="Free Bootstrap Template by uicookies.com"></a>
        <a href="#" class="probootstrap-burger-menu visible-xs"><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>
        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="rooms.php">Our Rooms</a></li>
            <li class="hidden-xs probootstrap-logo-center"><a href="index.php"><img src="img/logo_md.png" class="hires" width="181" height="50" alt="Free Bootstrap Template by uicookies.com"></a></li>
            <li class="active"><a href="reservation.php">Reservation</a></li>
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
    </div>
  </header>
  <section class="probootstrap-slider flexslider probootstrap-inner">
    <ul class="slides">
      <li style="background-image: url(img/658354.png);" class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="probootstrap-slider-text text-center">
                <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
                <h1 class="probootstrap-heading probootstrap-animate">Book A Room</h1>
                <div class="probootstrap-animate probootstrap-sub-wrap">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</div>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </section>
  <section class="probootstrap-section">
    <div class="container">
      <div class="row probootstrap-gutter40">
        <div class="col-md-8">
          <h2 class="mt0">Reservation Form</h2>
          <form action="../atlantis/config/chechkingPost2.php" method="POST" class="probootstrap-form">
            <div class="row">
              <input type="hidden" name="cek" value="tb_pemesanan">
              <input type="hidden" name="act" value="create">
              <div class="form-group">
                <label for="fname">Full Name</label>
                <input type="hidden" name="konfirmasi" value="[Belum Dikonfirmasi]">
                <input type="text" class="form-control" id="fname" name="nama_pemesan" size="20" onkeypress="return event.charCode < 48 || event.charCode  >57" required>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <div class="form-field">
                  <i class="icon icon-mail"></i>
                  <input type="email" class="form-control" id="email" name="email_pemesan" required>
                  <span> &mdash; Please remember this for your login e-mail.</span>
                </div>
              </div>
              <div class="form-group">
                <label for="fname">Password</label>
                <input type="password" class="form-control" name="passpem" minlength="8" maxlength="12" placeholder="Minimal 8 and 12 Characters" required>
                <span> &mdash; Please remember this for your login password.</span>
              </div>
              <div class="form-group">
                <label for="room">Room</label>
                <div class="form-field">
                  <i class="icon icon-chevron-down"></i>
                  <select name="room" id="room" class="form-control" required>
                    <option disabled selected value="">Select a Room</option>
                    <?php foreach ($data->readRoom() as $key) : ?>
                      <option value="<?= $key['nama_room'] ?>"><?= $key['nama_room'] ?></option>
                    <?php endforeach; ?>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="date-arrival">Entry Date</label>
                    <div class="form-field">
                      <i class="icon icon-calendar2"></i>
                      <input type="text" class="form-control" id="date-arrival" name="tgl_masuk" required>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="date-departure">Out Date</label>
                    <div class="form-field">
                      <i class="icon icon-calendar2"></i>
                      <input type="text" class="form-control" id="date-departure" name="tgl_keluar" required>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="adults">People</label>
                <div class="form-field">
                  <i class="icon icon-chevron-down"></i>
                  <select name="jmlh_org" id="adults" class="form-control" required>
                    <option disabled selected value="">Number of People</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4+</option>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <label for="fname">NO. Rekening</label>
                <input type="number" onKeyDown="limitText(this,16);" onKeyUp="limitText(this,16);" class="form-control" id="sessionNo" placeholder="Maximal 16 Characters" name="no_rek" required>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg" id="submit">Reserve</button>
              </div>
          </form>
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
  <script language="javascript" type="text/javascript">
    function limitText(limitField, limitNum) {
      if (limitField.value.length > limitNum) {
        limitField.value = limitField.value.substring(0, limitNum);
      }
    }
  </script>
  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>