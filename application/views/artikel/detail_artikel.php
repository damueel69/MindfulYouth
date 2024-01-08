<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Artikel</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            margin: 20px;
        }
        .article {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #5C8374; /* Warna latar belakang baru */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #fff; /* Warna teks judul */
            font-size: 48px; /* Ukuran font judul yang lebih besar */
        }
        h2 {
            color: #fff; /* Warna teks subjudul */
            font-size: 36px; /* Ukuran font subjudul yang lebih besar */
        }
        p {
            margin-bottom: 20px; /* Jarak antar paragraf yang sedikit lebih besar */
            font-size: 24px; /* Ukuran font paragraf yang lebih besar */
        }
        strong {
            color: #fff; /* Warna teks tebal */
        }
    </style>
</head>
<body>
    <div class="article">
        <?php if(isset($article)) : ?>
            <h1><?php echo $article->judul; ?></h1>
            <p><strong>Tanggal Publikasi:</strong> <?php echo $article->tanggal_publikasi; ?></p>
            <p><strong>Kategori:</strong> <?php echo $article->kategori; ?></p>
            <hr>
            <p><?php echo $article->konten; ?></p>
        <?php else : ?>
            <p>Artikel tidak ditemukan.</p>
        <?php endif; ?>
    </div>
</body>
</html>
