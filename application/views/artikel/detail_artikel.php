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
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
            font-size: 32px; /* Ukuran font judul */
        }
        h2 {
            color: #444;
            font-size: 26px; /* Ukuran font subjudul */
        }
        p {
            margin-bottom: 15px;
            font-size: 18px; /* Ukuran font paragraf */
        }
        strong {
            color: #333;
        }
    </style>
</head>
<body>
    <div class="article"
    style="background-color: #5C8374">
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
