<!-- Assuming you have received $userData from the controller -->

<style>
    form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #ffffff;
    }
    label {
        display: block;
        margin-bottom: 8px;
        font-weight: bold;
        color: #333;
    }
    input[type="text"],
    input[type="email"],
    select {
        width: calc(100% - 12px);
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
        transition: border-color 0.3s ease-in-out;
    }
    select {
        width: 100%;
    }
    input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        text-align: center;
        display: block;
        margin: 0 auto;
        transition: background-color 0.3s ease-in-out, transform 0.3s ease-in-out;
    }
    input[type="submit"]:hover {
        background-color: #0056b3;
        transform: scale(1.05);
    }
    input[type="submit"]:focus {
        outline: none;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.8);
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
