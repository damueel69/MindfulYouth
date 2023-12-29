<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Artikel</title>
</head>
<body>
    <div id="kategori">
        <?php
        echo anchor('artikel/stress', 'Stress');
        ?>
        <?php
        echo anchor('artikel/depresi', 'Depresi');
        ?>
         <?php
        echo anchor('artikel/kecemasan', 'Kecemasan');
        ?>
        <?php
        echo anchor('artikel/gKepribadian', 'Gangguan Kepribadian');
        ?>
         <?php
        echo anchor('artikel/gTidur', 'Gangguan Tidur');
        ?>
        <?php
        echo anchor('artikel/rumah_tangga', 'Rumah Tangga');
        ?>
        <!-- Tambahkan link kategori lainnya di sini -->
    </div>

    <div id="daftar-artikel">
        <!-- Daftar artikel akan dimuat di sini -->
        <ul>
            <?php foreach ($articles as $article) { ?>
                <li>
                <h2><?php echo anchor('artikel/detail/' . $article->id, $article->judul); ?></h2>
                <p><?php echo substr($article->konten, 0, 20); ?></p>
                    <p><strong>Tanggal Publikasi:</strong> <?php echo $article->tanggal_publikasi; ?></p>
                    <p><strong>Kategori:</strong> <?php echo $article->kategori; ?></p>
                </li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>
