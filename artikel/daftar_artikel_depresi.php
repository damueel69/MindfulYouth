<!-- daftar_artikel_stress.php (View) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Artikel Depresi</title>
</head>
<body>
    <h1>Daftar Artikel Depresi</h1>
    <ul>
        <?php
        // Mengurutkan artikel dari yang terbaru
        usort($articles, function ($a, $b) {
            return strtotime($b->tanggal_publikasi) - strtotime($a->tanggal_publikasi);
        });

        // Menampilkan lima artikel terbaru
        $counter = 0;
        foreach ($articles as $article) {
            if ($counter >= 5) break; // Hanya menampilkan lima artikel terbaru
        ?>
            <li>
                <!-- Bagian yang diubah -->
                <h2><?php echo anchor('artikel/detail/' . $article->id, $article->judul); ?></h2>
                <p><?php echo substr($article->konten, 0, 20); ?>...</p>
                <!-- Akhir bagian yang diubah -->
                <p><strong>Tanggal Publikasi:</strong> <?php echo $article->tanggal_publikasi . ' WIB'; ?></p>
                <p><strong>Kategori:</strong> <?php echo $article->kategori; ?></p>
            </li>
        <?php
            $counter++;
        }
        ?>
    </ul>
</body>
</html>
