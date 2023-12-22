<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Data 
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">Username</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $users['username']; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Nama</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $users['nama']; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Email</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $users['email']; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Role</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $users['role']; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">No Hp</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $users['no_hp']; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Specialist</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $users['specialist']; ?></div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">Gelar</div>
                        <div class="col-md-2">:</div>
                        <div class="col-md-6"><?= $users['gelar']; ?></div>
                    </div>
                </div>
                <div class="card-footer justify-content-center">
                    <a href="<?= base_url('Admin') ?>" class="btn btn-danger">Tutup</a>
                </div>
            </div>
        </div>
    </div>
</div>
