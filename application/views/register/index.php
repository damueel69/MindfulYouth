
<table class="table table-bordered">
    <tr>
        <td style="width: 60px;">
            <img src="<?php echo base_url(); ?>assets/images/logo.jpg" width="100" />
        </td>
        <td style="text-align: center;">
            <h2 style="border: none;">Pilih Metode Pendaftaran</h2>
            <br>
            <br>
            <br>
            <?php echo anchor('auth/register', 'Daftar Sebagai User Client/User Biasa', ['class' => 'btn btn-lg btn-info btn-block']); ?>
            <?php echo anchor('auth/register2', 'Daftar Sebagai Psikiater/Kanselor', ['class' => 'btn btn-lg btn-info btn-block']); ?>
    
</table>
<div style="text-align: center;">
    <a href="<?= base_url('index.php/auth/login') ?>" class="btn btn-primary btn-sm">Halaman Login</a>
</div>
