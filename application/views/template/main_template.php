<style>
  .footer_section {
    background-color: #AFEEEE;
    color: #333;
    padding: 50px 0;
    margin-top: 50px;
  }

  .footer_section h4 {
    color: #333;
  }
  .info_contact p {
    margin-bottom: 5px;
  }
  .img-box {
    margin-top: 20px;
  }
</style>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>MindfulYouth</title>
    
    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/'; ?>jquery.min.js"></script>

    <!-- User declared javascript for chat app -->
    <script type="text/javascript">
      var chat_id = "<?php echo $chat_id; ?>";
      var user_id = "<?php echo $user_id; ?>";
    </script>

    <script type="text/javascript" src="<?php echo base_url() . 'assets/js/'; ?>chat.js"></script>
  
    <!-- Simple WebRTC JS -->
    <script src="<?php echo base_url() ?>assets/js/latest-v2.js"></script>
    
    <!-- Camera CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/camera.css">
    
    <?php
    if ($this->session->userdata('role') == 1) {
        $link = 'assets/css/chat.css';
      } else {
        $link = 'assets/css/chat_admin.css';
      }
    ?>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . $link; ?>">

    <script type="text/javascript">
      var base_url = "<?php echo base_url(); ?>";
    </script>
    <!-- End declaration -->

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap-theme.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo base_url(); ?>assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?php echo base_url(); ?>assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo base_url(); ?>assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="background-color: #9EC8B9">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top"
    style="background-color: #4F6F52">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/dashboard">
            <img src="<?php echo base_url(); ?>assets/images/logo.jpg" height="30" width="45" />
          </a>
          <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/dashboard">
            Mifuyu
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li>
            <?php
            if ($this->session->userdata('role') == 1) {
              echo anchor('dashboard', 'Home');
            } else {
              
            }
            if ($this->session->userdata('role') == 2) {
              echo anchor('dashboard', 'Home');
            } else {
              
            }
            
            ?>
            </li>

            <li>
            <?php
            if ($this->session->userdata('role') == 1) {
              echo anchor('artikel', 'Mifuyu Artikel');
            } else {
              
            }
            if ($this->session->userdata('role') == 2) {
              echo anchor('artikel/index_worker', 'Artikel');
            } else {
              
            }
            
            ?>
            </li>

            <li>
            <?php
            
            if ($this->session->userdata('role') == 2) {
              echo anchor('chat/group_worker', 'Chat Grup');
            } else {
              
            }
           
            if ($this->session->userdata('role') == 1) {
              echo anchor('chat/group', '3D Stella Chat');
            } else {
              
            }
             
            ?>
            </li>
            <li>
            <?php
            if ($this->session->userdata('role') == 1) {
              echo anchor('magazine', 'Journal Kesehatan');
            } else {
              
            }

            if ($this->session->userdata('role') == 2) {
              echo anchor('magazine', 'Journal Kesehatan');
            } else {
              
            }
            ?>
            </li>
            
           
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <img src="<?php echo base_url(); ?>uploads/avatars/<?php echo $this->session->userdata('avatar'); ?>" height="25" width="30" />
                  <?php echo $this->session->userdata('first_name'); ?>
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><?php echo anchor('user/setting/'.$this->session->userdata('user_id'), 'Pengaturan'); ?></li>
                <li role="separator" class="divider"></li>
                <li><?php echo anchor('auth/logout', 'Keluar'); ?></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container theme-showcase" role="main">
      <?php echo $contents; ?>
    </div> 
    <!-- /container -->
    

<footer class="text-center text-lg-start bg-body-tertiary text-muted"
style="background-color: #2B2B2B">
<div class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <div class="row">
      <div class="col-md-4">
        <div class="img-box text-center mt-3">
          <img src="<?php echo base_url(); ?>assets/images/logo.jpg" alt="Your Image" class="img-fluid rounded-circle shadow-lg" style="max-width: 150px;" /> 
        </div>
      </div>
      <div class="col-md-4">
        <h4 class="mb-4"><strong>MindfulYouth</strong></h4>
        <p class="text-justify">Gangguan kesehatan mental yang dapat dialami oleh seseorang sangat beragam. Dengan adanya MindfulYouth, harapan dapat membantu meningkatkan kepedulian keluarga dan masyarakat terhadap penderita gangguan kesehatan mental.</p>
      </div>
      <div class="col-md-4">
        <h4 class="mb-4"><strong>Contact Us</strong></h4>
        <div class="info_contact">
          <p><i class="fa fa-map-marker" aria-hidden="true"></i> Location: Jln. Umban Sari No. 1</p>
          <p><i class="fa fa-phone" aria-hidden="true"></i> Call: +62 82288204028</p>
          <p><i class="fa fa-envelope"></i> Email: ikhsan22ti@mahasiswa.pcr.acid</p>
          <ul class="list-inline social-icons mt-4">
            <li class="list-inline-item"><a href="#" class="text-light"><i class="fab fa-facebook-f"></i></a></li>
            <li class="list-inline-item"><a href="#" class="text-light"><i class="fab fa-twitter"></i></a></li>
            <li class="list-inline-item"><a href="#" class="text-light"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"><\/script>')</script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo base_url(); ?>assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
