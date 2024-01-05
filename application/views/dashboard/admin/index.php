<h2>Daftar User</h2>
<!-- Existing code -->

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Email</th>
        <th>No HP</th>
        <th>Divisi</th>
        <th>Spesialist</th>
        <th>Status Keaktifan</th>
        <th>Role</th> <!-- Added Role column header -->
        <th>Aktif</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no = 0;
    $aktif_status = '';
    $button_activate = '';
    foreach ($record->result() as $r) {
        if ($r->role == 1) { // Display users with role == 1
            if ($r->is_activated == 1) {
                $aktif_status = 'Aktif';
                $button_activate = '';
            } else {
                $aktif_status = 'Belum Aktif';
                $button_activate = anchor('user/activate/'.$r->id, 'Aktifkan!', ['class' => 'btn btn-success btn-sm']);
            }
            $no++;
            echo "<tr>
                <td>$no</td>
                <td>$r->username</td>
                <td>$r->email</td>
                <td>$r->no_hp</td>
                <td>$r->division</td>
                <td>$r->spesialist</td>
                <td>$aktif_status</td>
                <td>$r->role</td> <!-- Displaying Role -->
                <td>".
                    $button_activate
                ."</td>
                <td>
                <a href='user/detail/$r->id' class='btn btn-info'>Detail</a> <!-- Detail action -->
                <a href='user/edit/$r->id' class='btn btn-primary'>Edit</a> <!-- Edit action -->
                <a href='user/delete/$r->id' class='btn btn-danger'>Hapus</a> <!-- Delete action -->
                </td>
            </tr>";
        }
    }
    ?>
</table>

<h2>Daftar Worker</h2>
<!-- Existing code -->

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Username</th>
        <th>Email</th>
        <th>No HP</th>
        <th>Divisi</th>
        <th>Spesialist</th>
        <th>Status Keaktifan</th>
        <th>Role</th> <!-- Added Role column header -->
        <th>Aktif</th>
        <th>Aksi</th>
    </tr>
    <?php
    $no = 0;
    $aktif_status = '';
    $button_activate = '';
    
    // Loop through the records to display workers (where role == 2)
    foreach ($record->result() as $r) {
        if ($r->role == 2) { // Display users with role == 2
            if ($r->is_activated == 1) {
                $aktif_status = 'Aktif';
                $button_activate = '';
            } else {
                $aktif_status = 'Belum Aktif';
                $button_activate = anchor('user/activate/'.$r->id, 'Aktifkan!', ['class' => 'btn btn-success btn-sm']);
            }
            $no++;
            echo "<tr>
                <td>$no</td>
                <td>$r->username</td>
                <td>$r->email</td>
                <td>$r->no_hp</td>
                <td>$r->division</td>
                <td>$r->spesialist</td>
                <td>$aktif_status</td>
                <td>$r->role</td> <!-- Displaying Role -->
                <td>".
                    $button_activate
                ."</td>
                <td>
                <a href='user/detail/$r->id' class='btn btn-info'>Detail</a> <!-- Detail action -->
                <a href='user/edit/$r->id' class='btn btn-primary'>Edit</a> <!-- Edit action -->
                <a href='user/delete/$r->id' class='btn btn-danger'>Hapus</a> <!-- Delete action -->
            </tr>";
        }
    }

    ?>
</table>
