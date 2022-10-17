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
          <li><a href="rooms.php">Our Rooms</a></li>
          <li class="hidden-xs probootstrap-logo-center"><a href="index.php"><img src="img/logo_md.png" class="hires" width="181" height="50" alt="Free Bootstrap Template by uicookies.com"></a></li>
          <li><a href="reservation.php">Reservation</a></li>
          <li><a href="blog.php">Gallery</a></li>
          <li class="active"><a href="contact.php">Contact</a></li>
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
      <li style="background-image: url(img/Lelouch-Lamperouge-Code-Geass-Hangyaku-no-Lelouch.jpg);" class="overlay">
        <div class="container">
          <div class="row">
            <div class="col-md-10 col-md-offset-1">
              <div class="probootstrap-slider-text text-center">
                <p><img src="img/curve_white.svg" class="seperator probootstrap-animate" alt="Free HTML5 Bootstrap Template"></p>
                <h1 class="probootstrap-heading probootstrap-animate">Contact Us!</h1>
              </div>
            </div>
          </div>
        </div>
      </li>
    </ul>
  </section>
  <section class="probootstrap-section">
    <div class="container">
      <div class="row probootstrap-gutter60">
        <div class="col-md-8">
          <h2 class="mt0">Contact Form</h2>
          <form action="../atlantis/config/checkingPost.php" method="POST" class="probootstrap-form">
            <div class="row">
              <div class="col-md-6">
                <input type="hidden" name="cek" value="tb_contact">
                <input type="hidden" name="act" value="create">
                <div class="form-group">
                  <label for="fname">First Name</label>
                  <input type="text" class="form-control" id="fname" name="fname" onkeypress="return event.charCode < 48 || event.charCode  >57" required>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lname">Last Name</label>
                  <input type="text" class="form-control" id="lname" name="lname" onkeypress="return event.charCode < 48 || event.charCode  >57" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea cols="30" rows="10" class="form-control" id="message" name="message" required></textarea>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-primary btn-lg" id="submit">Send Message</button>
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
  <script src="js/scripts.min.js"></script>
  <script src="js/main.min.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>