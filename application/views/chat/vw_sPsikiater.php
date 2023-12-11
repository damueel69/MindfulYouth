<!DOCTYPE html>
<html>
<head>
    <title>Daftar Spesialis Psikiater</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        .image-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
            padding: 0 20px;
        }

        .image-container a {
            text-decoration: none;
            color: #333;
            position: relative;
            display: inline-block;
        }

        .image-container img {
            width: 300px;
            height: auto;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
        }

        .image-container a:hover img {
            transform: scale(1.05);
        }

        .image-text {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 8px 12px;
            background-color: rgba(0, 0, 0, 0.7);
            color: #fff;
            border-radius: 5px;
            transition: opacity 0.3s ease-in-out;
        }

        .image-container a:hover .image-text {
            opacity: 1;
        }
    </style>
</head>
<body>
    <h1>Pilih Spesialis Psikiater</h1>
    <div class="image-container">
        <a href="proses_pemilihan.php?spesialis=psikiater_1">
            <img src="<?= base_url('assets/assets/assets/img/psikiater_1.jpg') ?>" alt="Psikiater 1">
            <div class="image-text">Psikiater 1</div>
        </a>
        <a href="proses_pemilihan.php?spesialis=psikiater_2">
            <img src="<?= base_url('assets/assets/assets/img/psikiater_2.jpg') ?>" alt="Psikiater 2">
            <div class="image-text">Psikiater 2</div>
        </a>
        <!-- Tambahkan spesialis psikiater lainnya dengan struktur yang sama -->
    </div>
</body>
</html>
