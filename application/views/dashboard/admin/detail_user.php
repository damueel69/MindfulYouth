<!-- user_detail.php -->

<h2>Detail Pengguna</h2>

<table class="table table-bordered">
    <tr>
        <th>Username</th>
        <td><?= $userData->username ?></td>
    </tr>
    <tr>
        <th>Email</th>
        <td><?= $userData->email ?></td>
    </tr>
    <tr>
        <th>Nomor HP</th>
        <td><?= $userData->no_hp ?></td>
    </tr>
    <tr>
        <th>First Name</th>
        <td><?= $userData->first_name ?></td>
    </tr>
    <tr>
        <th>Last Name</th>
        <td><?= $userData->last_name ?></td>
    </tr>
    <tr>
        <th>Divisi</th>
        <td><?= $userData->division ?></td>
    </tr>
    <tr>
        <th>Spesialist</th>
        <td><?= $userData->spesialist ?></td>
    </tr>
    <tr>
        <th>Status Keaktifan</th>
        <td><?= $userData->is_activated == 1 ? 'Aktif' : 'Belum Aktif' ?></td>
    </tr>
    <tr>
        <th>Role</th>
        <td>
            <?php
            if ($userData->role == 0) {
                echo 'Admin';
            } elseif ($userData->role == 1) {
                echo 'Common User';
            } elseif ($userData->role == 2) {
                echo 'Worker';
            }
            ?>
        </td>
    </tr>
</table>
