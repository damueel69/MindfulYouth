<!-- views/auth/vw_profil.php -->

<div class="container mt-4">
    <h1 class="mb-4">User Profile</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Created Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $user_info->id; ?></td>
                <td><?= $user_info->nama; ?></td>
                <td><?= $user_info->email; ?></td>
                <td><?= $user_info->role; ?></td>
                <td><?= $user_info->data_created; ?></td>
                <td>
                    <a href="<?= base_url('Profile/edit'); ?>" class="btn btn-info btn-sm">Edit</a>
                </td>
            </tr>
        </tbody>
    </table>
</div>
