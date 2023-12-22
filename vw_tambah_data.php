<div class="container-fluid">
   <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center">
                    Tambah Data
                </div>
                <div class="card-body">
               <form action="" method="POST">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" value="<?= set_value('username') ?>" class="form-control" id="username" placeholder="Username">
                            <?= form_error('username', '<small class="text-danger">', '</small>'); ?>

                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="<?= set_value('nama') ?>" class="form-control" id="nama" placeholder="Nama">
                            <?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" value="<?= set_value('email') ?>" class="form-control" id="email" placeholder="Email">
                                    <?= form_error('email', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="role">Role</label>
                                    <input type="text" name="role" value="<?= set_value('role') ?>" class="form-control" id="role" placeholder="Role">
                                    <?= form_error('role', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">No HP</label>
                                    <input type="text" name="no_hp" value="<?= set_value('no_hp') ?>" class="form-control" id="no_hp" placeholder="no hp">
                                    <?= form_error('no_hp', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="specialist">Specialist</label>
                                    <input type="text" name="specialist" value="<?= set_value('specialist') ?>" class="form-control" id="specialist" placeholder="Specialist">
                                    <?= form_error('specialist', '<small class="text-danger p1-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                            <label for="gelar">Gelar</label>
                            <input type="text" name="gelar" value="<?= set_value('gelar') ?>" class="form-control" id="gelar" placeholder="Gelar">
                            <?= form_error('gelar', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <a href="<?= base_url('Admin')?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary">Tambah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
           