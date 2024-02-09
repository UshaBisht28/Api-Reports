<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inditab</title>
  <link href="<?php echo site_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo site_url() ?>assets/css/style.css" rel="stylesheet">
  <link href="<?php echo site_url() ?>assets/css/gift-card-container.css" rel="stylesheet">
  <link href="<?php echo site_url() ?>assets/css/credit-card-section.css" rel="stylesheet">
  <link href="<?php echo site_url() ?>assets/css/flight-container.css" rel="stylesheet">
  <link href="<?php echo site_url() ?>assets/css/recharge-bill.css" rel="stylesheet">
  <link href="<?php echo site_url() ?>assets/css/download-app-container.css" rel="stylesheet">
  <link href="<?php echo site_url() ?>assets/css/app-features-container.css" rel="stylesheet">
  <link href="<?php echo site_url() ?>assets/css/investment-container.css" rel="stylesheet">
  <link href="<?php echo site_url() ?>assets/css/loan-container.css" rel="stylesheet">
  <link href="<?php echo site_url() ?>assets/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

  <!-- Start:: Header -->
  <?php $this->load->view('includes/header'); ?>
  <!-- End:: Header -->

  <!-- :: START Banner Slider -->
  <div class="swiper" id="bannerSilder">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img class="banner-image" src="<?php echo base_url() ?>assets/image/bg/flight-banner.png" alt="EMD Flight Banner" width="100%" height="auto" />
      </div>
      <div class="swiper-slide">
        <img class="banner-image" src="<?php echo base_url() ?>assets/image/bg/flight-banner.png" alt="EMD Flight Banner" width="100%" height="auto" />
      </div>
      <div class="swiper-slide">
        <img class="banner-image" src="<?php echo base_url() ?>assets/image/bg/flight-banner.png" alt="EMD Flight Banner" width="100%" height="auto" />
      </div>
    </div>
  </div>
  <!-- :: END Banner Slider -->

  <!-- :: START Media -->
  <section class="media-container">
    <div class="container">
      <div class="media-content">
        <div class="media-item">
          <img src="<?php echo base_url() ?>assets/image/media/money-img.png" alt="" width="50" height="auto" />
        </div>
      </div>
    </div>
  </section>
  <!-- :: END Media -->


  <!-- :: START  -->
  <div class="app-features-container">
    <h4 class="app-features-title">APP FEATURES</h4>
    <p class="app-features-subtitle">What Make this app unique</p>
    <div class="features-container">
      <div class="features-imge">
        <img src="<?php echo base_url() ?>assets/image/product/recharge.png" alt="EMD Recharge & Bill Payment" width="400" height="auto" />
      </div>
      <div class="features-section">
        <div class="features-item">
          <div class="features-content">
            <img src="<?php echo base_url() ?>assets/image/icons/plane.png" alt="" width="50" height="auto" />
            <h5>Pay Education Fees</h5>
          </div>
        </div>
        <div class="features-item">
          <div class="features-content">
            <img src="<?php echo base_url() ?>assets/image/icons/plane.png" alt="" width="50" height="auto" />
            <h5>Pay Rent</h5>
          </div>
        </div>
        <div class="features-item">
          <div class="features-content">
            <img src="<?php echo base_url() ?>assets/image/icons/plane.png" alt="" width="50" height="auto" />
            <h5>Pay Vendor</h5>
          </div>
        </div>
        <div class="features-item">
          <div class="features-content">
            <img src="<?php echo base_url() ?>assets/image/icons/plane.png" alt="" width="50" height="auto" />
            <h5>Pay GST</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- :: END -->

  <!-- :: START credit-card section -->
  <div class="container">
    <div class="credit-card-section">
      <div class="credit-item">
        <h5 class="credit-card-title">India's Most Loved App for Education Payment via
          <span class="credit-card-span"><span class="credit-entities">&quot;</span>Credit Card<span class="credit-entities">&quot;</span></span>
        </h5>
        <a href="https://apps.apple.com/in/app/easemydeal/id1643915792" class="download-app download-credit" aria-label="EMD Download App">Download App</a>
      </div>
      <div class="credit-item"><img src="<?php echo base_url() ?>assets/image/product/app1.png" alt="EMD Credit Card" width="300" height="auto" /></div>

    </div>
  </div>
  <!-- :: END credit-card section -->


  <!-- :: START Recharge & Bill Payment-->
  <div class="container">
    <div class="recharge-bill">
      <p class="recharge-bill-subtitle ">Recharge & Bill Payment</p>
      <h4 class="recharge-bill-title">Lorem ipsum dolor sit amet.</h4>
      <img src="<?php echo base_url() ?>assets/image/product/recharge.png" alt="EMD Recharge & Bill Payment" width="400" height="auto" />
    </div>
  </div>
  <!-- :: END Recharge & Bill Payment-->



  <!-- :: START Investment -->
  <div class="container d-none">
    <div class="investment-container">
      <div class="investment">
        <div class="investment-item">
          <span class="investment-span">Profit++</span>
          <h4 class="invest-title">invest & earn@10% plus</h4>
          <ul class="invest-list">
            <li class="invest-list-item">Earn 10% per annum</li>
            <li class="invest-list-item">No lock-in period</li>
            <li class="invest-list-item">No deposit/withdrawal fee</li>
          </ul>
          <a href="" class="invest-btn" aria-label="EMD Invest">invest Now</a>
        </div>
        <div class="investment-item">
          <span class="investment-span">Gold</span>
          <h4 class="gold-title">Buy GOLD & SILVER at best prices</h4>
          <ul class="gold-list">
            <li class="invest-list-item">buy and sell gold</li>
            <li class="invest-list-item">secured vault</li>
            <li class="invest-list-item">24/7 support</li>
          </ul>
          <a href="" class="gold-btn" aria-label="EMD Buy">quick buy</a>
        </div>
      </div>
    </div>
    <p class="tnc-text">t&c</p>
  </div>
  <!-- :: END Investment -->


  <style>
    .custm-row {
      --bs-gutter-x: 2rem;
      --bs-gutter-y: 2rem;
      margin-top: 1rem;
    }

    .main,
    .sub {
      box-shadow: 0px 3px 21px 0px rgba(89, 100, 255, 0.08);
      padding: 3rem;
      border-radius: 0.4rem;
      text-align: center;
    }

    .main-title {
      font-size: 2rem;
      text-align: center;
      margin-bottom: 2rem;
    }
  </style>
  <!--  -->
  <div class="container">
    <div class="row custm-row">
      <div class="col-12">
        <div class="main">
          <span class="credit-span">Credit Card</span>
          <h5 class="main-title">Lorem ipsum dolor sit amet.</h5>
          <img src="<?php echo base_url() ?>assets/image/product/loan.webp" alt="EMD Loan Apply" width="400" height="auto" />
        </div>
      </div>
      <div class="col-6">
        <div class="sub">
          <div class="investment-item">
            <span class="investment-span">Profit++</span>
            <h4 class="invest-title">invest & earn@10% plus</h4>
            <ul class="invest-list">
              <li class="invest-list-item">Earn 10% per annum</li>
              <li class="invest-list-item">No lock-in period</li>
              <li class="invest-list-item">No deposit/withdrawal fee</li>
            </ul>
            <a href="" class="invest-btn" aria-label="EMD Invest">invest Now</a>
          </div>

        </div>
      </div>
      <div class="col-6">
        <div class="sub">
          <div class="investment-item">
            <span class="investment-span">Gold</span>
            <h4 class="gold-title">Buy GOLD & SILVER at best prices</h4>
            <ul class="gold-list">
              <li class="invest-list-item">buy and sell gold</li>
              <li class="invest-list-item">secured vault</li>
              <li class="invest-list-item">24/7 support</li>
            </ul>
            <a href="" class="gold-btn" aria-label="EMD Buy">quick buy</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--  -->


  <!-- :: START -->
  <div class="loan-container">
    <div class="container">
      <span class="loan-span">Get instant Loan</span>
      <h4 class="loan-title">Personal & Business Loans</h4>
      <div class="loan-section">

        <div class="loan-item">
          <h4 class="loan-subtitle">India's quickest multi-purpose loan with <span><span class="loan-entities">&quot;</span>Eesemydeal<span class="loan-entities">&quot;</span> </h4>
          <ul class="loan-list">
            <li>100% digital</li>
            <li>Transparent paperless journey</li>
            <li>No sales calls</li>
          </ul>
          <a href="https://apps.apple.com/in/app/easemydeal/id1643915792" class="download-app" aria-label="EMD Download App">Download App</a>
        </div>
        <div class="loan-item">
          <img src="<?php echo base_url() ?>assets/image/product/loan.webp" alt="EMD Loan Apply" width="400" height="auto" />
        </div>
      </div>
    </div>
  </div>
  <!-- :: END -->







  <!-- :: START -->
  <!--  <div class="loan-container">
    <div class="container">
      <span class="loan-span">Get instant Loan</span>
      <h4 class="loan-title">Personal & Business Loans</h4>
      <div class="loan-section">
        <div class="loan-item">
          <img src="<?php echo base_url() ?>assets/image/product/loan.webp" alt="EMD Loan Apply" width="400" height="auto" />
        </div>
        <div class="loan-item">
          <h4 class="loan-subtitle">India's quickest multi-purpose loan with <span><span class="loan-entities">&quot;</span>Eesemydeal<span class="loan-entities">&quot;</span> </h4>
          <ul class="loan-list">
            <li>100% digital</li>
            <li>Transparent paperless journey</li>
            <li>No sales calls</li>
          </ul>
          <a href="https://apps.apple.com/in/app/easemydeal/id1643915792" class="download-app" aria-label="EMD Download App">Download App</a>
        </div>
      </div>
    </div>
  </div> -->
  <!-- :: END -->


  <!-- :: START gift-card-container-->
  <div class="gift-card-container">
    <div class="gift-card-section container">
      <div class="gift-card-item">
        <img src="<?php echo base_url() ?>assets/image/product/gift-card.png" alt="EMD ">
      </div>
      <div class="gift-card-item">
        <h4 class="gift-card-title"><span class="gift-card-entities">&quot;</span>Give the gift of choice with <span class="gift-card-span">EMD</span> <span class="gift-card-entities">&quot;</span></h4>
        <div class="gift-card-box">
          <img src="<?php echo base_url() ?>assets/image/product/gift-card-1.png" alt="EMD " width="100" height="auto" />
          <img src="<?php echo base_url() ?>assets/image/product/costa_coffee_e_gift_voucher.png" alt="EMD " width="100" height="auto" />
          <img src="<?php echo base_url() ?>assets/image/product/aldo_accessories.png" alt="EMD " width="100" height="auto" />
          <img src="<?php echo base_url() ?>assets/image/product/amazon.png" alt="EMD " width="100" height="auto" />
          <img src="<?php echo base_url() ?>assets/image/product/bookmyshow.png" alt="EMD " width="100" height="auto" />
          <img src="<?php echo base_url() ?>assets/image/product/charles_and_keith.png" alt="EMD " width="100" height="auto" />
        </div>
      </div>
    </div>
    <p class="gift-card-paragraph">gift cards: Where every occasion finds its perfect present!</p>
  </div>
  <!-- :: END gift-card-container-->

  <!-- :: START -->
  <section class="shop-rewards-section">
    <div class="container">
      <div class="shop-section">
        <div class="item">
          <span class="shop-span">Shop & Earn</span>
          <h4 class="shop-heading"><span>Shop</span> smart. Earn <span>rewards</span>. Live well.</h4>
          <ul class="shop-list">
            <li class="shop-list-item">CashBack</li>
            <li class="shop-list-item">flash deals</li>
          </ul>
          <a href="https://apps.apple.com/in/app/easemydeal/id1643915792" class="shop-btn" aria-label="EMD Shop">Shop now</a>
        </div>

        <div class="item">
          <img src="<?php echo base_url() ?>assets/image/product/shop-bg.png" alt="EMD Shopping Imgage" width="500" height="auto" />
        </div>
      </div>
    </div>
  </section>
  <!-- :: END -->


  <!-- :: START Flight Booking-->
  <section class="flight-container">
    <div class="container">
      <div class="flight-section">
        <div class="flight-item">
          <p class="flight-subtitle">BEST APP FOR TRAVEL & BOOKING</p>
          <h4 class="flight-title">An awesome app to make your life Easier</h4>
          <ul class="flight-list">
            <li>Save Time andEffort with EMD</li>
            <li>Safety & Security</li>
            <li>Authentic Information</li>
          </ul>
          <a href="https://apps.apple.com/in/app/easemydeal/id1643915792" class="download-btn">Download App</a>
        </div>
        <div class="flight-item"><img src="<?php echo base_url() ?>assets/image/product/flight_booking.png" alt="EMD Flight Booking" width="400" height="auto" /></div>
      </div>
    </div>
  </section>
  <!-- :: END Flight Booking -->












  <!-- :: START -->
  <section>
    <div class="support-section">
      <div class="support-item">
        <svg width="80" height="78" viewBox="0 0 80 78" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M74.3834 33.8787C74.0772 25.1524 70.5434 16.9924 64.3384 10.7874C57.8347 4.28242 49.1909 0.701172 40.0009 0.701172C21.4397 0.701172 6.27344 15.4749 5.61969 33.8787C2.78719 35.1374 0.804688 37.9724 0.804688 41.2674V50.3449C0.804688 54.8024 4.43094 58.4299 8.88969 58.4299C11.7747 58.4299 14.1209 56.0837 14.1209 53.1987V38.4124C14.1209 35.7037 12.0434 33.4949 9.40219 33.2324C10.3772 17.1987 23.7247 4.45117 40.0009 4.45117C48.1909 4.45117 55.8922 7.64367 61.6884 13.4399C67.0109 18.7624 70.1259 25.6999 70.5947 33.2337C67.9559 33.4987 65.8822 35.7062 65.8822 38.4124V53.1974C65.8822 55.9287 67.9922 58.1512 70.6647 58.3824V62.1187C70.6647 66.3262 67.2409 69.7487 63.0334 69.7487H57.3822C57.1047 68.9562 56.6697 68.2237 56.0597 67.6162C54.9909 66.5424 53.5659 65.9512 52.0484 65.9512H46.2234C45.3872 65.9512 44.5847 66.1287 43.8497 66.4712C41.8447 67.3924 40.5497 69.4149 40.5497 71.6237C40.5497 73.1412 41.1409 74.5662 42.2122 75.6324C43.2834 76.7062 44.7084 77.2974 46.2234 77.2974H52.0484C54.4634 77.2974 56.5922 75.7362 57.3859 73.4987H63.0334C69.3097 73.4987 74.4147 68.3937 74.4147 62.1187V57.7149C77.2297 56.4487 79.1972 53.6237 79.1972 50.3424V41.2649C79.1972 37.9724 77.2147 35.1374 74.3834 33.8787ZM10.3697 38.4124V53.1974C10.3697 54.0137 9.70594 54.6787 8.88844 54.6787C6.49844 54.6787 4.55344 52.7337 4.55344 50.3437V41.2662C4.55344 38.8749 6.49844 36.9312 8.88844 36.9312C9.70594 36.9312 10.3697 37.5962 10.3697 38.4124ZM53.9297 72.0262C53.7434 72.9087 52.9509 73.5499 52.0472 73.5499H46.2222C45.7097 73.5499 45.2284 73.3499 44.8609 72.9824C44.4984 72.6212 44.2984 72.1387 44.2984 71.6262C44.2984 70.8774 44.7372 70.1937 45.4247 69.8774C45.6697 69.7624 45.9384 69.7037 46.2222 69.7037H52.0472C52.5597 69.7037 53.0409 69.9024 53.4072 70.2699C53.7697 70.6312 53.9697 71.1137 53.9697 71.6262C53.9709 71.7637 53.9559 71.9012 53.9297 72.0262ZM75.4472 50.3437C75.4472 52.7337 73.5022 54.6787 71.1122 54.6787C70.2959 54.6787 69.6309 54.0149 69.6309 53.1974V38.4124C69.6309 37.5962 70.2947 36.9312 71.1122 36.9312C73.5022 36.9312 75.4472 38.8762 75.4472 41.2662V50.3437Z" fill="#EC4813"></path>
          <path d="M52.1416 50.9899C56.5228 50.9899 60.0866 47.4249 60.0866 43.0449V26.8561C60.0866 24.7386 59.2591 22.7436 57.7566 21.2411C56.2541 19.7386 54.2603 18.9111 52.1416 18.9111H27.8591C23.4778 18.9111 19.9141 22.4749 19.9141 26.8561V43.0449C19.9141 47.4261 23.4778 50.9899 27.8591 50.9899H28.0078V55.1849C28.0078 56.7849 28.9616 58.2049 30.4366 58.8036C30.9128 58.9949 31.4078 59.0899 31.8978 59.0899C32.9191 59.0899 33.9141 58.6849 34.6428 57.9311L41.6216 50.9899H52.1416ZM39.5278 47.7849L31.9753 55.2961C31.9416 55.3311 31.9166 55.3574 31.8453 55.3261C31.7591 55.2911 31.7591 55.2349 31.7591 55.1849V49.1149C31.7591 48.0799 30.9203 47.2399 29.8841 47.2399H27.8603C25.5466 47.2399 23.6653 45.3574 23.6653 43.0449V26.8561C23.6653 24.5424 25.5466 22.6611 27.8603 22.6611H52.1428C53.2603 22.6611 54.3116 23.0986 55.1066 23.8924C55.9016 24.6874 56.3378 25.7399 56.3378 26.8561V43.0449C56.3378 45.3586 54.4553 47.2399 52.1428 47.2399H40.8503C40.3541 47.2399 39.8791 47.4361 39.5278 47.7849Z" fill="#EC4813"></path>
          <path d="M30.8912 32.4834C29.3662 32.4834 28.125 33.7259 28.125 35.2496C28.125 36.7734 29.3675 38.0159 30.8912 38.0159C32.4175 38.0159 33.66 36.7734 33.66 35.2496C33.66 33.7259 32.4187 32.4834 30.8912 32.4834Z" fill="#EC4813"></path>
          <path d="M40.0006 32.4834C38.4756 32.4834 37.2344 33.7259 37.2344 35.2496C37.2344 36.7734 38.4769 38.0159 40.0006 38.0159C41.5281 38.0159 42.7694 36.7734 42.7694 35.2496C42.7694 33.7259 41.5281 32.4834 40.0006 32.4834Z" fill="#EC4813"></path>
          <path d="M49.1061 32.4834C47.5811 32.4834 46.3398 33.7259 46.3398 35.2496C46.3398 36.7734 47.5823 38.0159 49.1061 38.0159C50.6323 38.0159 51.8748 36.7734 51.8748 35.2496C51.8748 33.7259 50.6323 32.4834 49.1061 32.4834Z" fill="#EC4813"></path>
        </svg>
        <p class="support-subtitle">How Can We Help You?</p>
      </div>
      <div class="support-item">
        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M68.125 9.375H65.7812V7.03125C65.7812 3.15422 62.627 0 58.75 0H11.875C7.99797 0 4.84375 3.15422 4.84375 7.03125V63.5938C4.84375 67.4708 7.99797 70.625 11.875 70.625H14.2188V72.9688C14.2188 76.8458 17.373 80 21.25 80H68.125C72.002 80 75.1562 76.8458 75.1562 72.9688V16.4062C75.1562 12.5292 72.002 9.375 68.125 9.375ZM16.2781 18.0636C14.95 19.3916 14.2188 21.1572 14.2188 23.0353V65.9375H11.875C10.5827 65.9375 9.53125 64.8861 9.53125 63.5938V7.03125C9.53125 5.73891 10.5827 4.6875 11.875 4.6875H58.75C60.0423 4.6875 61.0938 5.73891 61.0938 7.03125V9.375H27.8791C26.0009 9.375 24.2353 10.1064 22.9073 11.4344L16.2781 18.0636ZM28.2812 14.0625V23.4375H18.9062V23.0353C18.9062 22.4094 19.15 21.8208 19.5927 21.3781L26.2219 14.7489C26.6645 14.3062 27.2531 14.0625 27.8791 14.0625H28.2812ZM70.4688 72.9688C70.4688 74.2611 69.4173 75.3125 68.125 75.3125H21.25C19.9577 75.3125 18.9062 74.2611 18.9062 72.9688V28.125H30.625C31.9194 28.125 32.9688 27.0756 32.9688 25.7812V14.0625H68.125C69.4173 14.0625 70.4688 15.1139 70.4688 16.4062V72.9688Z" fill="#EC4813"></path>
          <path d="M63.4375 33.125H25.9375C24.6431 33.125 23.5938 34.1744 23.5938 35.4688C23.5938 36.7631 24.6431 37.8125 25.9375 37.8125H63.4375C64.7319 37.8125 65.7812 36.7631 65.7812 35.4688C65.7812 34.1744 64.7319 33.125 63.4375 33.125Z" fill="#EC4813"></path>
          <path d="M63.4375 42.5H25.9375C24.6431 42.5 23.5938 43.5494 23.5938 44.8438C23.5938 46.1381 24.6431 47.1875 25.9375 47.1875H63.4375C64.7319 47.1875 65.7812 46.1381 65.7812 44.8438C65.7812 43.5494 64.7319 42.5 63.4375 42.5Z" fill="#EC4813"></path>
          <path d="M63.4375 51.875H25.9375C24.6431 51.875 23.5938 52.9244 23.5938 54.2188C23.5938 55.5131 24.6431 56.5625 25.9375 56.5625H63.4375C64.7319 56.5625 65.7812 55.5131 65.7812 54.2188C65.7812 52.9244 64.7319 51.875 63.4375 51.875Z" fill="#EC4813"></path>
          <path d="M63.4375 61.25H25.9375C24.6431 61.25 23.5938 62.2994 23.5938 63.5938C23.5938 64.8881 24.6431 65.9375 25.9375 65.9375H63.4375C64.7319 65.9375 65.7812 64.8881 65.7812 63.5938C65.7812 62.2994 64.7319 61.25 63.4375 61.25Z" fill="#EC4813"></path>
        </svg>
        <p class="support-subtitle">Detailed Documentation</p>
      </div>
      <div class="support-item">
        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M67.4069 63.4484L67.4925 63.7333H67.79H76.6667C78.2888 63.7333 79.5998 65.0473 79.5998 66.6667C79.5998 68.2861 78.2887 69.6 76.6666 69.6H67.7898H67.4926L67.4068 69.8847C66.0086 74.5273 61.748 77.9333 56.6666 77.9333C51.5849 77.9333 47.3213 74.5272 45.9264 69.8849L45.8408 69.6H45.5433H3.33328C1.7142 69.6 0.4 68.2858 0.4 66.6667C0.4 65.0476 1.71422 63.7333 3.33328 63.7333H45.5434H45.8407L45.9264 63.4486C47.3246 58.8059 51.5853 55.4 56.6667 55.4C61.7483 55.4 66.012 58.8061 67.4069 63.4484ZM51.2667 66.6667C51.2667 69.6444 53.6891 72.0667 56.6667 72.0667C59.6442 72.0667 62.0667 69.6444 62.0667 66.6667C62.0667 63.6891 59.6443 61.2667 56.6667 61.2667C53.6891 61.2667 51.2667 63.6891 51.2667 66.6667Z" fill="#EC4813" stroke="#FEF1F3" stroke-width="0.8"></path>
          <path d="M67.407 10.1147L67.4927 10.3993H67.79H76.6667C78.2888 10.3993 79.6 11.7134 79.6 13.3327C79.6 14.9521 78.2888 16.266 76.6667 16.266H67.79H67.4927L67.407 16.5507C66.0088 21.1934 61.7483 24.5993 56.6667 24.5993C51.5851 24.5993 47.3246 21.1934 45.9263 16.5505L45.8406 16.2659H45.5433H3.33328C1.7142 16.2659 0.4 14.9517 0.4 13.3326C0.4 11.7135 1.7142 10.3993 3.33328 10.3993H45.5433H45.8406L45.9263 10.1147C47.3246 5.47195 51.5853 2.06602 56.6667 2.06602C61.7482 2.06602 66.0086 5.47194 67.407 10.1147ZM51.2667 13.3326C51.2667 16.3102 53.6891 18.7326 56.6667 18.7326C59.6442 18.7326 62.0667 16.3102 62.0667 13.3326C62.0667 10.3549 59.6443 7.93258 56.6667 7.93258C53.6891 7.93258 51.2667 10.3549 51.2667 13.3326Z" fill="#EC4813" stroke="#FEF1F3" stroke-width="0.8"></path>
          <path d="M34.0737 36.7816L34.1594 37.0663H34.4567H76.6667C78.2888 37.0663 79.6 38.3802 79.5998 39.9995C79.5998 41.6189 78.2887 42.9329 76.6666 42.9329H34.4566H34.1593L34.0736 43.2175C32.6754 47.8602 28.4147 51.2661 23.3333 51.2661C18.2518 51.2661 13.9914 47.8602 12.593 43.2175L12.5073 42.9329H12.21H3.33328C1.7142 42.9329 0.4 41.6187 0.4 39.9996C0.4 38.3805 1.71419 37.0663 3.33328 37.0663H12.2102H12.5074L12.5932 36.7816C13.9914 32.1389 18.252 28.733 23.3334 28.733C28.4149 28.733 32.6754 32.1389 34.0737 36.7816ZM17.9333 39.9996C17.9333 42.9772 20.3556 45.3996 23.3333 45.3996C26.3109 45.3996 28.7333 42.9772 28.7333 39.9996C28.7333 37.0219 26.3109 34.5996 23.3333 34.5996C20.3556 34.5996 17.9333 37.0219 17.9333 39.9996Z" fill="#EC4813" stroke="#FEF1F3" stroke-width="0.8"></path>
        </svg>
        <p class="support-subtitle">Looking For Customization</p>
      </div>
    </div>
  </section>
  <!-- :: END -->



  <!-- :: START -->
  <div class="download-app-section">
    <div class="download-app-container container">
      <div class="item">
        <img src="<?php echo base_url() ?>assets/image/bg/download.png" alt="Download EMD App" width="500" height="auto" />
      </div>
      <div class="item">
        <h5 class="download-title">Download Secured</h5>
        <p class="download-subtitle">Enhanced billing systems offer you a variety of ways to pay electric bills, phone bills, rent bills online, in person or by mail.</p>
        <div class="app-store-icons">
          <a href=""><img src="<?php echo base_url() ?>assets/image/icons/app-store.svg" alt="EMD App Store" width="200" height="auto" /></a>
          <a href=""><img src="<?php echo base_url() ?>assets/image/icons/play-store.svg" alt="EMD Play Store" width="200" height="auto" /></a>
        </div>
      </div>
    </div>
  </div>
  <!-- :: END -->



  <!-- :: START Footer  -->
  <?php $this->load->view('includes/footer'); ?>
  <!-- :: END Footer -->

</body>
<script src="<?php echo site_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo site_url(); ?>assets/swiper/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>
<script>
  new Swiper('#bannerSilder', {
    pagination: {
      el: '.swiper-pagination',
    },

    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },

    scrollbar: {
      el: '.swiper-scrollbar',
    },
  });
</script>

</html>