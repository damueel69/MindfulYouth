<style>
    .slider_section {
      display: flex;
      align-items: center;
      justify-content: center;
      height: auto;
      padding: 50px 0; 
    }
    .carousel-inner {
      margin:  50px 0; 
    }
    .detail-box,
    .img-box {
      max-width: 100%; 
      box-sizing: border-box;
      margin: 0 auto; 
    }
    .detail-box {
      padding: 20px; 
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }
    .img-box {
      padding: 20px; 
    }
</style>
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

</head>
    <!-- slider section -->
    <section class="slider_section ">
      <div class="dot_design">
        <img src="<?= base_url('assets/assets/') ?>images/dots.png" alt="">
      </div>
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <div class="play_btn">
                      <button>
                        <i class="fa fa-play" aria-hidden="true"></i>
                      </button>
                    </div>
                    <h1>
                      MiFuyo <br>
                      <span>
                        Artikel
                      </span>
                    </h1>
                    <p>
                    Mifuyu dalam MindfulYouth adalah sumber daya utama yang menawarkan artikel-artikel terpercaya dan terkini mengenai kesehatan mental, teknik pengelolaan stres, dan perjalanan pribadi menuju keseimbangan emosional. Setiap artikel ditulis oleh ahli dalam bidangnya untuk memberikan pemahaman yang mendalam kepada pengguna.                    </p>
                    <?php               echo anchor('artikel', 'Mifuyu Artikel');
?>
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="<?= base_url('assets/assets/') ?>images/slider-img.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <div class="play_btn">
                      <button>
                        <i class="fa fa-play" aria-hidden="true"></i>
                      </button>
                    </div>
                    <h1>
                      3Stella <br>
                      <span>
                        Direct Message
                      </span>
                    </h1>
                    <p>
                    Fitur ini menghadirkan tiga fitur utama: Chat Group, Chat Konselor, dan Chat Psikiater. Pengguna dapat bergabung dalam komunitas, berbicara langsung dengan konselor, atau menjadwalkan konsultasi dengan psikiater untuk mendapatkan bantuan yang dibutuhkan sesuai dengan kebutuhan mereka.
                    </p>
                    <?php               echo anchor('Chat/group', '3D Stella DM');
?>
                    </a>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="<?= base_url('assets/assets/') ?>images/slider-img.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <div class="play_btn">
                      <button>
                        <i class="fa fa-play" aria-hidden="true"></i>
                      </button>
                    </div>
                    <h1>
                      Journal <br>
                      <span>
                        Kesehatan
                      </span>
                    </h1>
                    <p>
                    Journal Kesehatan adalah fitur personal yang memungkinkan pengguna untuk mencatat perasaan, pikiran, dan perubahan dalam kesehatan mental mereka dari waktu ke waktu. Dengan ini, pengguna dapat melacak pola-pola, mengidentifikasi faktor-faktor pemicu, serta memonitor perubahan suasana hati dan tingkat stres mereka.
                    </p>
                    <?php               echo anchor('magazine', 'Journal Kesehatan');
?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="<?= base_url('assets/assets/') ?>images/slider-img.jpg" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <img src="<?= base_url('assets/assets/') ?>images/prev.png" alt="">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <img src="<?= base_url('assets/assets/') ?>images/next.png" alt="">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </section>
    <!-- end slider section -->
  </div>



<!-- View File (dashboard_contacts.php) -->

<!-- your_view_file.php -->





