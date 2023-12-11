
<body>
  <div class="container mt-4">
    <h1 class="mb-4">3 Stella Direct Message</h1>
    <div class="row">
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="<?= base_url('assets/assets/') ?>images/anonim.jpeg" class="card-img-top" alt="Article 1">
          <div class="card-body">
            <h5 class="card-title">Chat Group Anonymous</h5>
            <p class="card-text"> </p>
            <a href="<?= base_url()?>Chat/anonymousChat" class="btn btn-primary">Pilih Chat Anonymous</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="<?= base_url('assets/assets/') ?>images/kanselor.jpg" class="card-img-top" alt="Article 2">
          <div class="card-body">
            <h5 class="card-title">Chat Konselor</h5>
            <p class="card-text"></p>
            <a href="<?= base_url()?>Chat/sKanselor" class="btn btn-primary">Pilih Spesialist Kanselor</a>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card mb-4">
          <img src="<?= base_url('assets/assets/') ?>images/psikitiater.png" class="card-img-top" alt="Article 3">
          <div class="card-body">
            <h5 class="card-title">Chat Psikiater</h5>
            <p class="card-text"></p>
               <?php if ($this->session->userdata('role') == 'Admin'): ?>
    <a href="<?= base_url()?>Chat/" class="btn btn-primary">Pilih Psikiater</a>
<?php else: ?>
    <a href="<?= base_url()?>Chat/sPsikiater" class="btn btn-primary">Pilih Spesialist Psikiater</a>
<?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
