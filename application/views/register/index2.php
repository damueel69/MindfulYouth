

<table class="table table-bordered">
    <tr>
        <td style="width: 60px;">
            <img src="<?php echo base_url(); ?>assets/images/logo.jpg" width="100" />
        </td>
        <td>
            <h2 style="border: none;">Form Registrasi</h2>
            <br>
    
            <?php echo form_open('auth/register2'); ?>
            <tbody>
                <tr>
                    <td>FIRSTNAME</td>
                    <td><input type="text" name="first_name" class="form-control" placeholder="First name" required></td>
                </tr>
                <tr>
                    <td>LASTNAME</td>
                    <td><input type="text" name="last_name" class="form-control" placeholder="Last name" required></td>
                </tr>
                <tr>
                    <td>DIVISION</td>
                    <td>
                        <select name="division" class="form-control" required>
                            <option value="">Select Division</option>
                            <option value="Psikiater">Psikiater</option>
                            <option value="Kanselor">Kanselor</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>SPECIALIST</td>
                    <td><input type="text" name="spesialist" class="form-control" placeholder="Spesialist"></td>
                </tr>
                <tr>
                <tr>
                    <td>EMAIL</td>
                    <td><input type="text" name="email" class="form-control" placeholder="Email" required></td>
                </tr>
                <tr>
                    <td>USERNAME</td>
                    <td><input type="text" name="username" class="form-control" placeholder="Username" required></td>
                </tr>
                <tr>
                    <td>PASSWORD</td>
                    <td><input type="text" name="password" class="form-control" placeholder="Password" required></td>
                </tr>
                <tr>
                    <td>PHONE NUMBER (Disertai 62)
                        Contoh : 621234567
                    </td>
                    <td><input type="text" name="no_hp" class="form-control" placeholder="Phone number" required></td>
                </tr>
                
                    <td colspan="2">
                        <input type="submit" name="submit" class="btn btn-primary btn-sm" value="Register">
                        <?php echo anchor('auth/welcome', 'Cancel', ['class' => 'btn btn-danger btn-sm']); ?>
                    </td>
                </tr>
            </tbody>
            <?php echo form_close(); ?>
        </td>
    </tr>
</table>
<div style="text-align: center;">
    <a href="<?= base_url('index.php/auth/login') ?>" class="btn btn-info">Halaman Login</a>
</div>
