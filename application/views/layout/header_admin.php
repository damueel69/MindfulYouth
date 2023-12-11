<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>MiFuYo</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/assets/') ?>css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="<?= base_url('assets/assets/') ?>css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/assets/') ?>css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="<?= base_url('assets/assets/') ?>css/responsive.css" rel="stylesheet" />
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            // Initially hide the fields
            $('.psikiater-fields').hide();

            // Show/hide fields based on role selection
            $('select[name="role"]').change(function () {
                if ($(this).val() === 'Psikiater') {
                    $('.psikiater-fields').show();
                } else {
                    $('.psikiater-fields').hide();
                }
            });
        });
    </script>

</head>

<body>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      
      <div class="header_bottom">
        <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container ">
            <a class="navbar-brand" href="<?= base_url()?>Home/index_login">
              <img src="<?= base_url('assets/assets/') ?>images/logo.png" alt="">
            </a>


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class=""> </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex mr-auto flex-column flex-lg-row align-items-center">
               
              </div>
              <div class="quote_btn-container">
              <a href="<?= base_url()?>Profil/">
    <i class="fa fa-user-circle" aria-hidden="true"></i>
    <span>
        <?= isset($user_info->nama) ? $user_info->nama : 'Profil' ?>
    </span>
              <div class="quote_btn-container">
                <a href="<?= base_url()?>auth/logout">
                  <i class="fa fa-user" aria-hidden="true"></i>
                  <span>
                    Log Out
                  </span>
                </a>
                <form class="form-inline">
                  <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                    <i class="fa fa-search" aria-hidden="true"></i>
                  </button>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>
    <!-- end header section -->