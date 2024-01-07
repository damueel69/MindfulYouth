<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Detail Artikel</title>
</head>
<body>
    <h1>Detail Artikel</h1>
    <div>
        <h2><?php echo $article->judul; ?></h2>
        <p><?php echo $article->konten; ?></p>
        <p><strong>Tanggal Publikasi:</strong> <?php echo $article->tanggal_publikasi; ?></p>
        <p><strong>Kategori:</strong> <?php echo $article->kategori; ?></p>
    </div>
</body>
</html>
