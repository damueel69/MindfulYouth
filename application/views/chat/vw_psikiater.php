<!-- views/chat/vw_psikiater.php -->

<div class="container mt-4">
  <h1 class="mb-4">Daftar Psikiater</h1>
  <div class="row">
    <?php foreach ($psikiater_list as $psikiater): ?>
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-body">
            <h5 class="card-title"><?= $psikiater->nama; ?></h5>
            <p class="card-text">No. HP: <?= $psikiater->no_hp; ?></p>
            <p class="card-text">Gelar: <?= $psikiater->gelar; ?></p>
            <p class="card-text">Spesialis: <?= $psikiater->spesialist; ?></p>
            
            <?php
            $whatsapp_url = "https://api.whatsapp.com/send?phone=" . $psikiater->no_hp;
            ?>
            
            <a href="<?= $whatsapp_url ?>" class="btn btn-primary" target="_blank">Chat dengan <?= $psikiater->nama; ?></a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
