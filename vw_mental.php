<!DOCTYPE html>
<html>

<head>
    <title>Mental Fitness Diary</title>
    <!-- Tambahkan link ke CSS, Bootstrap, atau resource lainnya di sini -->
    <style>
        /* Ganti dengan style yang kamu butuhkan */
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Mental Fitness Diary</h3>
                    </div>
                    <div class="text-center add-entry-form">
                        <h4>Add New Entry</h4>
                        <form action="<?php echo base_url('diary/save_entry'); ?>" method="POST" class="my-4">
                            <table>
                                <tr>
                                    <td><label for="judul_jurnal">Judul Jurnal</label></td>
                                    <td><input type="text" name="judul_jurnal" class="form-control" required></td>
                                </tr>
                                <tr>
                                    <td><label for="isi_jurnal">Isi Jurnal</label></td>
                                    <td><textarea name="isi_jurnal" class="form-control" required></textarea></td>
                                </tr>
                                <tr>
                                    <td><label for="rating_mood">Rating Mood</label></td>
                                    <td><input type="number" name="rating_mood" class="form-control" required></td>
                                </tr>
                            </table>
                            <button type="submit" class="btn btn-primary">Add Entry</button>
                        </form>
                    </div>
                    <!-- Bagian untuk menampilkan entri jurnal bisa ditambahkan di sini jika diperlukan -->
                </div>
            </div>
        </div>
    </div>
    <!-- Tambahkan script JavaScript atau referensi lainnya di sini -->
</body>

</html>