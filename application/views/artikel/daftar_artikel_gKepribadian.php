<!-- daftar_artikel_stress.php (View) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Artikel Gangguan Kepribadian</title>
</head>
<body>
    <h1>Daftar Artikel Gangguan Kepribadian</h1>
    <ul>
        <?php foreach ($articles as $article) { ?>
            <li>
                <!-- Bagian yang diubah -->
                <h2><?php echo anchor('artikel/detail/' . $article->id, $article->judul); ?></h2>
                <p><?php echo substr($article->konten, 0, 20); ?>...</p>
                <!-- Akhir bagian yang diubah -->
                <p><strong>Tanggal Publikasi:</strong> <?php echo $article->tanggal_publikasi; ?></p>
                <p><strong>Kategori:</strong> <?php echo $article->kategori; ?></p>
            </li>
        <?php } ?>
    </ul>
</body>
</html>
