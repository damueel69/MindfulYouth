<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Edit Data
                </div>
                <div class="card-body">
                    <form action="<?= base_url('Admin/edit/' . $users['id_user']); ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="id_user">Id</label>
                            <input type="text" name="id_user" value="<?= $users['id_user']; ?>" class="form-control" id="id_user" placeholder="Id">
                            <?= form_error('id_user', '<small class="text-danger p-1">', '</small>'); ?>
                        </div>
                    <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" value="<?= $users['username']; ?>" class="form-control" id="username" placeholder="username">
                            <?= form_error('username', '<small class="text-danger p-1">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="<?= $users['nama']; ?>" class="form-control" id="nama" placeholder="Nama">
                            <?= form_error('nama', '<small class="text-danger p-1">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" value="<?= $users['email']; ?>" class="form-control" id="email" placeholder="email">
                            <?= form_error('email', '<small class="text-danger p-1">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <input type="text" name="role" value="<?= $users['role']; ?>" class="form-control" id="role" placeholder="Role">
                            <?= form_error('role', '<small class="text-danger p-1">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">No HP</label>
                            <input type="number" name="no_hp" value="<?= $users['no_hp']; ?>" class="form-control" id="no_hp" placeholder="no hp">
                            <?= form_error('no_hp', '<small class="text-danger p-1">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="specialist">Specialist</label>
                            <input type="text" name="specialist" value="<?= $users['specialist']; ?>" class="form-control" id="specialist" placeholder="Specialist">
                            <?= form_error('specialist', '<small class="text-danger p-1">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="gelar">Gelar</label>
                            <input type="text" name="gelar" value="<?= $users['gelar']; ?>" class="form-control" id="gelar" placeholder="Gelar">
                            <?= form_error('gelar', '<small class="text-danger p-1">', '</small>'); ?>
                        </div>
                        <a href="<?= base_url('Admin') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
