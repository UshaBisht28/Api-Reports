<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Api Reports</title>
  <link href="<?php echo site_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo site_url() ?>assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- Start:: Header -->
  <?php $this->load->view('includes/header'); ?>
  <!-- End:: Header -->

  <!-- Start:: Banner -->
  <section class="banner-section d-none">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-6 col-12">
          <div class="banner-content">
            <h1 class="banner-heading">Get Astrology Reports with the Power of Astrology for your Websites and
              Applications.</h1>
            <a href="#" class="btn purchase-btn">Purchase Now</a>
          </div>
        </div>
      </div>
    </div>
    </div>

  </section>
  <!-- End:: Banner -->

  <!-- Start:: Products -->
  <section class="products-list-section">
    <div class="container">
      <div class="product-container">
        <h2 class="product-heading theme-sub-heading">Products</h2>
        <div class="product-list-container">
          <div class="product-list">
            <div class="item">
              <img src="<?php echo base_url() ?>assets/image/product-1.png" alt="Product Image" />
              <h3 class="item-heading">Vedic Astrology</h3>
              <p class="item-description">Kundali calculations and analysis based on Vedic principles.</p>
            </div>
            <div class="item">
              <h3 class="title">Western Astrology</h3>
              <p class="desc">Natal &amp; transit horoscope reports using Western Astrology methods.</p>
            </div>
            <div class="item">
              <h3 class="title">Daily Horoscope</h3>
              <p class="desc">Wide range of personalised and generalised daily predictions.</p>
            </div>
            <div class="item">
              <h3 class="title">PDF Reports</h3>
              <p class="desc">Single API to get the horoscope in PDF format with customization.</p>
            </div>
            <div class="item">
              <h3 class="title">Tarot Reading</h3>
              <p class="desc">Kundali calculations and analysis based on Vedic principles.</p>
            </div>
            <div class="item">
              <h3 class="title">Numerology</h3>
              <p class="desc">Kundali calculations and analysis based on Vedic principles.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End:: -->


  <!-- :: START Platform Support -->
  <section class="platform-support">
    <div class="container">
      <div class="ease-to-use">
        <h3 class="theme-sub-heading">The Best Astrology Platform Available for Your Company</h3>
        <p class="ease-to-use-description">An all-inclusive platform focused on APIs that allows developers to easily manage an extensive array of astrological features.</p>
        <div class="our-support">
          <div class="item">
            <h4>Cloud-based</h4>
            <p>Because cloud-based APIs are used, it is scalable, safe, secure, and quick. Large volumes of data handled effortlessly</p>
          </div>
          <div class="item">
            <h4>entirely white-label</h4>
            <p>APIs customized for your applications and websites. Simple and personalized API hosting for your servers' apps and website.</p>
          </div>
          <div class="item">
            <h4>100% support</h4>
            <p>Simple onboarding for websites and apps with API documentation, and seamless integration of APIs.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- :: END Platform Support-->

  <!-- :: START Western Astrology API -->
  <div class="container">
    <div class="western-astrology-section">
      <span class="tropical-span-head">tropical astrology</span>
      <h4 class="theme-sub-heading">Features of Western Astrology</h4>
      <p>Kundli in Vedic Astrology is an umbrella term for natal astrology. We offer various APIs to cover Kundli features such as avakahada table, north, south and east style charts, divisional charts, Vimshottari Dasha, Char Dasha, Yogini Dasha, Ashtakvarga and much more.

        Offer your users various interpretation of their Kundli such as ascendant report, planet report, house report and remedial measures.</p>
      <a href="<?php echo site_url() ?>western-astrology" class="western-start-btn"> Get Started</a>
    </div>
  </div>
  <!-- :: END Western Astrology API-->

  <!-- :: START Indian Astrology Features -->
  <div class="container">
    <div class="indian-astrology-section">
      <span class="vedic-span-head">vedic astrology</span>
      <h4 class="theme-sub-heading">Indian Astrology</h4>
      <p>Kundli in Vedic Astrology is an umbrella term for natal astrology. We offer various APIs to cover Kundli features such as avakahada table, north, south and east style charts, divisional charts, Vimshottari Dasha, Char Dasha, Yogini Dasha, Ashtakvarga and much more.

        Offer your users various interpretation of their Kundli such as ascendant report, planet report, house report and remedial measures.</p>
      <a href="<?php echo site_url() ?>vedic-astrology" class="indian-start-btn"> Get Started</a>
    </div>
  </div>
  <!-- :: END Indian Astrology Features -->


  <!-- :: START  -->
  <div class="container">
    <div class="demo-schedule-section">
      <span>Top-Rated Astrology API Solutions</span>
      <h4 class="theme-sub-heading">Schedule Your Demo Now</h4>
      <p>Not sure how to use our astrologyAPI? Take a walkthrough with our expert one-on-one. We simplify the integration of Western astrology, horoscopes, and matchmaking on your website or mobile app.</p>
      <a href="<?php echo site_url() ?>demo-schedule">Schedule Your Demo Nowa</a>
    </div>
  </div>
  <!-- :: END -->


  <!-- :: START Footer  -->
  <?php $this->load->view('includes/footer'); ?>
  <!-- :: END Footer -->

</body>
<script src="<?php echo site_url(); ?>assets/js/bootstrap.bundle.min.js"></script>

</html>