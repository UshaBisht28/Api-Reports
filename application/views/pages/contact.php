<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>

  <?php $this->load->view('includes/head'); ?>
  <style>
    .contact-item {
      box-shadow: 0px 11.7607px 70.5641px rgba(137, 151, 186, 0.15);
      border-radius: 0.4rem;
      border: 1.17607px solid #e1e9f4;
      padding: 2rem;
      text-align: center;
    }

    .contact-container {
      margin-bottom: 3rem;
    }

    .contact-item .contact-icon {
      font-size: 5rem;
    }

    .contact-item .fa-envelope {
      color: #ffb06d;
    }

    .contact-item .fa-phone {
      color: #1AECF5;
    }

    .contact-item .fa-map-location-dot {
      color: #BE60FF;
    }

    .contact-title {
      font-size: 2rem;
      margin: 0;
      font-weight: bold;
      line-height: 3rem;

    }
  </style>
</head>

<body>
  <!-- Start:: Header -->
  <?php $this->load->view('includes/header'); ?>
  <!-- End:: Header -->

  <!-- section start-->
  <div class="breadcrumb-container">
    <div class="breadcrumb">
      <ul>
        <li>home</li>
        <li>contact us</li>
      </ul>
    </div>
  </div>

  <div class="contact-container">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12">
          <div class="contact-item">
            <i class="fa-solid fa-envelope contact-icon"></i>
            <h3 class="contact-title">Office address</h3>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="contact-item">
            <i class="fa-solid fa-phone contact-icon"></i>
            <h3 class="contact-title">Call Us Anytime</h3>
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
          <div class="contact-item">
            <i class="fa-solid fa-map-location-dot contact-icon"></i>
            <h3 class="contact-title">Visit Our Office</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- section end -->

  <!-- :: START Footer  -->
  <?php $this->load->view('includes/footer'); ?>
  <!-- :: END Footer -->

  <?php $this->load->view('includes/foot'); ?>
</body>

</html>