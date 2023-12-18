<style>
        body {
            background-image: url('<?= base_url('assets/images/background.png') ?>');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            margin: 0;
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            background: rgba(255, 255, 255, 0.8);
            width: 100%;
            max-width: 400px;
            padding: 20px;
            border-radius: 10px;
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

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .custom-checkbox {
            margin-top: 10px;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .mt-4 {
            margin-top: 16px;
        }

        .text-center {
            text-align: center;
        }
    </style>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>

<body>

    <div class="card">
        <div class="card-header">
            <h3>Register</h3>
        </div>
        <div class="card-body">
            <img src="<?= base_url('assets/images/registration-form-1.jpg') ?>" alt="Form Logo" class="logo">
            <form method="POST" action="<?= base_url('auth/process_registration') ?>" class="my-login-validation">
                <div class="form-group">
                    <label for="nama">Name</label>
                    <input id="nama" type="text" class="form-control" name="nama" value="<?= set_value('nama'); ?>" required autofocus>
                    <?= form_error('nama', '<div class="text-danger">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label for="email">E-Mail Address</label>
                    <input id="email" type="email" class="form-control" name="email" value="<?= set_value('email'); ?>" required>
                    <?= form_error('email', '<div class="text-danger">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control" name="password" value="<?= set_value('password'); ?>" required data-eye>
                    <?= form_error('password', '<div class="text-danger">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <label for="password2">Confirm Password</label>
                    <input id="password2" type="password" class="form-control" name="password2" required data-eye>
                    <?= form_error('password2', '<div class="text-danger">', '</div>'); ?>
                </div>
                <div class="form-group">
                    <div class="custom-checkbox custom-control">
                        <input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
                        <label for="agree" class="custom-control-label">I agree to the <a href="#">Terms and Conditions</a></label>
                        <div class="invalid-feedback">
                            You must agree with our Terms and Conditions
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
                <div class="mt-4 text-center">
                    Already have an account? <a href="<?= base_url() ?>auth/login">Login Here</a>
                </div>
            </form>
        </div>
    </div>

</body>

</html>
