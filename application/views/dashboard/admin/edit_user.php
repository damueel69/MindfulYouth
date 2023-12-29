<!-- Assuming you have received $userData from the controller -->

<style>
    /* CSS untuk mempercantik tampilan form */
    form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    select {
        width: calc(100% - 12px);
        padding: 6px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
        font-size: 14px;
    }

    select {
        width: 100%;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        font-size: 16px;
        text-align: center; /* Untuk mengatur teks ke tengah */
        display: block; /* Agar tombol berada pada baris yang terpisah */
        margin: 0 auto; /* Agar tombol terpusat */
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<form action="<?= site_url('user/update/' . $userData->id) ?>" method="post">
    <label for="username">Username:</label>
    <input type="text" name="username" value="<?= $userData->username ?>" id="username">
    <br>
    <label for="email">Email:</label>
    <input type="email" name="email" value="<?= $userData->email ?>" id="email">
    <br>
    <label for="no_hp">Nomor HP:</label>
    <input type="text" name="no_hp" value="<?= $userData->no_hp ?>" id="no_hp">
    <br>
    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" value="<?= $userData->first_name ?>" id="first_name">
    <br>
    <label for="last_name">Last Name:</label>
    <input type="text" name="last_name" value="<?= $userData->last_name ?>" id="last_name">
    <br>
    <label for="division">Divisi:</label>
    <input type="text" name="division" value="<?= $userData->division ?>" id="division">
    <br>
    <label for="spesialist">Spesialist:</label>
    <input type="text" name="spesialist" value="<?= $userData->spesialist ?>" id="spesialist">
    <label for="is_activated">Status Keaktifan:</label>
    <select name="is_activated" id="is_activated">
        <option value="1" <?= $userData->is_activated == 1 ? 'selected' : '' ?>>Aktif</option>
        <option value="0" <?= $userData->is_activated == 0 ? 'selected' : '' ?>>Belum Aktif</option>
    </select>
    <br>
    <label for="role">Role:</label>
    <select name="role" id="role">
        <option value="0" <?= $userData->role == 0 ? 'selected' : '' ?>>Admin</option>
        <option value="1" <?= $userData->role == 1 ? 'selected' : '' ?>>Common User</option>
        <option value="2" <?= $userData->role == 2 ? 'selected' : '' ?>>Worker</option>
    </select>
    <br>
    <input type="submit" value="Update">
</form>
