
<div class="container-fluid"> 
    <h1 class="h3 mb-4 text-gray-800"><?= $judul; ?></h1>
    <div class="row">
        <div class="col-md-6"><a href="<?= base_url() ?>Admin/tambah" class="btn btn-info mb-2">Tambah Data</a></div>
        <div class="col-md-12">
            <?= $this->session->flashdata('message');?>
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Username</td>
                        <td>Nama</td>
                        <td>Email</td>
                        <td>Role</td>
                        <td>No HP</td>
                        <td>Specialist</td>
                        <td>Gelar</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    
                    <?php if (!empty($data['users'])): ?>
                       <?php foreach ($data['users'] as $us): ?>
                            <tr>
                                <td><?= $i; ?>.</td>
                                <td><?= $us['username']; ?></td>
                                <td><?= $us['nama']; ?></td>
                                <td><?= $us['email']; ?></td>
                                <td><?= $us['role']; ?></td>
                                <td><?= $us['no_hp']; ?></td>
                                <td><?= $us['specialist']; ?></td>
                                <td><?= $us['gelar']; ?></td>
                                <td>
                                    <a href="<?= base_url('Admin/hapus/') . $us['id_user']; ?>" class="btn btn-danger">Hapus</a>
                                    <a href="<?= base_url('Admin/edit/') . $us['id_user']; ?>" class="btn btn-warning">Edit</a>
                                    <a href="<?= base_url('Admin/detail/') . $us['id_user']; ?>" class="btn btn-info">Detail</a>
                                </td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="9">No data available</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

