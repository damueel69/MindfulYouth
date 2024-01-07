
<body>
<div class="jumbotron"
style="background-color: #5C8374">
    <div class="container text-center">
      <h1>Mifuyu Artikel</h1>      
      <p>
    Temukan beragam artikel informatif yang membantu Anda memahami dan merawat kesehatan mental Anda melalui MindfulYouth/Mifuyu. Jelajahi topik-topik seperti manajemen stres, keseimbangan emosional, keterampilan koping, serta strategi pemulihan dan peningkatan kesejahteraan jiwa. Sumber daya yang tersedia bertujuan untuk memberikan wawasan mendalam, solusi praktis, dan panduan yang didukung oleh ahli di bidangnya. Mulailah perjalanan Anda menuju kesehatan mental yang lebih baik hari ini.
</p>

    </div>
  </div>
  <nav class="navbar navbar-inverse">
    
      
        
         
       
         
        
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li ><?php
        echo anchor('artikel/stress', 'Stress');
        ?></li>
          <li><?php
        echo anchor('artikel/depresi', 'Depresi');
        ?></li>
          <li><?php
        echo anchor('artikel/kecemasan', 'Kecemasan');
        ?></li>
          <li> <?php
        echo anchor('artikel/gKepribadian', 'Gangguan Kepribadian');
        ?></li>
        <li> <?php
        echo anchor('artikel/gTidur', 'Gangguan Tidur');
        ?></li>
        <li> <?php
        echo anchor('artikel/rumah_tangga', 'Rumah Tangga');
        ?></li>
        </ul>
        
      </div>
    </div>
  </nav>

  

 
  
  <div class="container" id="daftar-artikel">
    <?php echo anchor('artikel/create', 'Tambah Artikel', ['class' => 'btn btn-lg btn-info btn-block']); ?>
    <!-- Daftar artikel akan dimuat di sini -->
    <ul>
        <?php
        // Mengurutkan artikel dari yang terbaru
        usort($articles, function ($a, $b) {
            return strtotime($b->tanggal_publikasi) - strtotime($a->tanggal_publikasi);
        });

        foreach ($articles as $article) {
            // Mengubah format tanggal_publikasi menjadi format yang diinginkan (dengan tambahan WIB)
            $tanggal_publikasi = date('l, d F Y H:i:s', strtotime($article->tanggal_publikasi)) . ' WIB';
        ?>
            <li>
                <h2><?php echo anchor('artikel/detail/' . $article->id, $article->judul); ?></h2>
                <p><strong>Tanggal Publikasi:</strong> <?php echo $tanggal_publikasi; ?></p>
                <p><strong>Kategori:</strong> <?php echo $article->kategori; ?></p>
            </li>
        <?php } ?>
    </ul>
</div>




</body>
</html>
