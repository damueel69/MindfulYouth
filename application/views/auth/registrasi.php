<style>
    body {
        background-image: url('<?= base_url('assets/images/background.png') ?>');
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .card {
        background: rgba(255, 255, 255, 0.8);
    }

    .logo {
        display: block;
        margin: 0 auto;
        margin-top: -50px;
        width: 200px;
    }

    .card-header {
        text-align: center;
    }
</style>
</head>

<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3>Register</h3>
                </div>
                <div class="card-body">
                    <br><br><br>
                    <img src="<?= base_url('assets/images/registration-form-1.jpg') ?>" alt="Form Logo" class="logo">
                    <form method="POST" action="<?= base_url('auth/process_registration') ?>" class="my-login-validation">
                        <div class="form-group">
                            <label for="nama">Name</label>
                            <input id="nama" type="text" class="form-control" name="nama" value="<?= set_value('nama'); ?>"
                                required autofocus>
                            <?= form_error('nama', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">E-Mail Address</label>
                            <input id="email" type="email" class="form-control" name="email"
                                value="<?= set_value('email'); ?>" required>
                            <?= form_error('email', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control" name="password"
                                value="<?= set_value('password'); ?>" required data-eye>
                            <?= form_error('password', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="password2">Confirm Password</label>
                            <input id="password2" type="password" class="form-control" name="password2" required
                                data-eye>
                            <?= form_error('password2', '<div class="text-danger">', '</div>'); ?>
                        </div>
                        <div class="form-group">
                            <div class="custom-checkbox custom-control">
                                <input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
                                <label for="agree" class="custom-control-label">I agree to the <a href="#">Terms and
                                        Conditions</a></label>
                                <div class="invalid-feedback">
                                    You must agree with our Terms and Conditions
                                </div>
                            </div>
                        </div>

                        <div class="form-group m-0">
                            <button type="submit" class="btn btn-primary btn-block">
                                Register
                            </button>
                        </div>
                        <div class="mt-4 text-center">
                            Already have an account? <a href="<?= base_url() ?>auth/login">Login Here</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
