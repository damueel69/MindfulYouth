<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 500px;
            margin-top: 50px;
        }

        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container">
        <form action="<?= base_url()?>Home/tambah_user" method="post" class="form-container">
            <h2 class="mb-4 text-center">Add User</h2>

            <div class="form-group">
                <label for="nama">Name:</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="role">Role:</label>
                <select name="role" class="form-control" required onchange="togglePsikiaterFields(this.value)">
                    <option value="User">User</option>
                    <option value="Konselor">Konselor</option>
                    <option value="Psikiater">Psikiater</option>
                </select>
            </div>

            <!-- Additional fields for Psikiater -->
            <div class="form-group psikiater-fields">
                <label for="no_hp">No. HP(Gunakan 62 diawal):</label>
                <input type="text" name="no_hp" class="form-control">

                <label for="spesialist">Spesialist:</label>
                <input type="text" name="spesialist" class="form-control">

                <label for="gelar">Gelar:</label>
                <input type="text" name="gelar" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary btn-block">Add User</button>
        </form>
    </div>

    <!-- Bootstrap JS and dependencies (Popper.js, jQuery) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script>
        function togglePsikiaterFields(selectedRole) {
            const psikiaterFields = document.querySelector('.psikiater-fields');
            if (selectedRole === 'Psikiater') {
                psikiaterFields.classList.add('visible');
            } else {
                psikiaterFields.classList.remove('visible');
            }
        }
    </script>
</body>

</html>
