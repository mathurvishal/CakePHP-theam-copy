<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= $title; ?> - Bootstrap WebPage</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="img/favicon.png" rel="icon">
    <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700") >

    <!-- Libraries CSS Files -->
    <?php echo $this->Html->css(["font-awesome.min.css","animate.min.css","ionicons.min.css","owl.carousel.min.css","magnific-popup.css","ionicons.min.css","style.css","bootstrap.min.css"]); ?>

</head>

<body id="body">

<!--==========================
  Top Bar
============================-->
<section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
        <div class="contact-info float-left">
            <i class="fa fa-envelope-o"></i> <a href="mailto:contact@example.com">contact@example.com</a>
            <i class="fa fa-phone"></i> +1 5589 55488 55
        </div>
        <div class="social-links float-right">
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
        </div>
    </div>
</section>
<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <h1><a href="<?= $baseurl; ?>" class="scrollto">Reve<span>al</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="#body"><img src="<?= $baseurl; ?>img/logo.png" alt="" title="" /></a>
        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li><a href="<?= $baseurl; ?>">Home</a></li>
                <li><a href="<?= $baseurl; ?>about.do">About Us</a></li>
                <li><a href="<?= $baseurl; ?>services.do">Services</a></li>
                <li><a href="<?= $baseurl; ?>portfolio.do">Portfolio</a></li>
                <li><a href="<?= $baseurl; ?>teams.do">Teams</a></li>
                <li class="menu-has-children"><a href="">Drop Down</a>
                    <ul>
                        <li><a href="#">Drop Down 1</a></li>
                        <li><a href="#">Drop Down 3</a></li>
                        <li><a href="#">Drop Down 4</a></li>
                        <li><a href="#">Drop Down 5</a></li>
                    </ul>
                </li>
                <li><a href="<?= $baseurl; ?>contact.do">Contact</a></li>
            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header>
  <!--==========================
    Intro Section
  ============================-->


  <main id="main">
      <div class="container clearfix">
          <?= $this->fetch('content') ?>
      </div>

      <footer id="footer">
          <div class="container">
              <div class="copyright">
                  &copy; Copyright <strong>Vishal</strong>. All Rights Reserved
              </div>
              <div class="credits">

                  Designed by <a href="https://vishalmathur.in">Vishal Mathur</a>
              </div>
          </div>
      </footer>

      <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

      <!-- JavaScript Libraries -->
      <?= $this->Html->script([
          "jquery.min.js",
          "jquery-migrate.min.js",
          "bootstrap.bundle.min.js",
          "easing.min.js",
          "hoverIntent.js",
          "superfish.min.js",
          "wow.min.js",
          "owl.carousel.min.js",
          "magnific-popup.min.js",
          "sticky.js",
          "contactform.js",
          "main.js",]); ?>


</body>
</html>