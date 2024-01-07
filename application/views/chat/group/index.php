<h2>Daftar Chat Group</h2>
<?php echo anchor('group/add', 'Buat Chat Group', ['class' => 'btn btn-info']); ?>
<br />
<br />
<table class="table table-bordered">
  <tr>
    <thead>
      <tr>
        <th>No</th>
        <th>Nama Grup</th>
        <th>Dibuat Oleh</th>
        <th>Jumlah Member</th>
        <th>Aksi</th>
      </tr>
    </thead>
  </tr>
  <tbody>
  <?php
  $no = 0;
  foreach ($record->result() as $r) {
    $no++;
    echo "<tr>
      <td>$no</td>
      <td>$r->topic</td>
      <td>$r->created_by</td>
      <td>$r->total_member</td>
      <td>".
        anchor('group/check/'. $r->chat_id, 'Chat', ['class' => 'btn btn-success'])
      ."</td>
    </tr>";
  }
  ?>
  </tbody>
</table>
</p>

<script src="<?php echo base_url(); ?>js/dashboard.js" type="text/javascript"></script>

<div class="col-md-4">
    <div class="card mb-4">
        <img src="<?= base_url('assets/assets/') ?>images/konselor.png" class="card-img-top" alt="Konselor Image">
        <div class="card-body">
            <h2 class="card-title">Chat Konselor</h2>
            <p class="card-text">Konselor siap membantu Anda dengan berbagai permasalahan kehidupan sehari-hari, memberikan dukungan emosional, serta bantuan dalam menghadapi situasi yang sulit.</p>
            <?php echo anchor('group/kanselor', 'Pilih Spesialist Kanselor', ['class' => 'btn btn-info']); ?>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card mb-4">
        <img src="<?= base_url('assets/assets/') ?>images/psiketer.jpeg" class="card-img-top" alt="Psikiater Image">
        <div class="card-body">
            <h2 class="card-title">Chat Psikiater</h2>
            <p class="card-text">Psikiater adalah tenaga medis yang memiliki keahlian khusus dalam menangani masalah kesehatan mental, diagnosis, serta pengobatan. Mereka dapat memberikan layanan konsultasi dan terapi khusus untuk masalah kejiwaan.</p>
            <?php if ($this->session->userdata('role') == 'Admin'): ?>
                <a href="<?= base_url()?>Chat/" class="btn btn-primary">Pilih Psikiater</a>
            <?php else: ?>
                 <?php echo anchor('group/psikiater', 'Pilih Spesialist Psikiater', ['class' => 'btn btn-info']); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
