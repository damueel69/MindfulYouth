<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Article - MIFUYU</title>

    <!-- CSS FILES -->
    <link href="<?= base_url('assets/css_article/templatemo-kind-heart-charity.css') ?>" rel="stylesheet" />
</head>

<body id="section_1">
    <main>
        <!-- Article -->
        <section class="section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-12 text-center mx-auto">
                        <h2 class="mb-5">Selamat Datang di Artikel MIFUYO</h2>
                    </div>

                    <!-- Category Section -->
                    <div id="kategori">
                        <?php
                        $categories = [
                            ['label' => 'Depresi', 'icon' => 'hands.png'],
                            ['label' => 'Stress', 'icon' => 'heart.png'],
                            ['label' => 'Kecemasan', 'icon' => 'receive.png'],
                            ['label' => 'Gangguan Kepribadian', 'icon' => 'hands.png'],
                            ['label' => 'Rumah Tangga', 'icon' => 'heart.png'],
                            ['label' => 'Gangguan Tidur', 'icon' => 'receive.png']
                        ];

                        foreach ($categories as $category) {
                            echo '<div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">';
                            echo '<div class="featured-block d-flex justify-content-center align-items-center">';
                            echo '<a href="#" class="d-block">';
                            echo '<img src="' . base_url('assets/images_article/icons/') . $category['icon'] . '" class="featured-block-image img-fluid" alt="" />';
                            echo '<p class="featured-block-text"><strong>' . $category['label'] . '</strong></p>';
                            echo '</a>';
                            echo '</div>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
        </section>
    </main>

    <!-- JAVASCRIPT FILES -->
    <script src="<?= base_url('assets/js_article/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/js_article/bootstrap.min.js') ?>"></script>
    <script src="<?= base_url('assets/js_article/jquery.sticky.js') ?>"></script>
    <script src="<?= base_url('assets/js_article/click-scroll.js') ?>"></script>
    <script src="<?= base_url('assets/js_article/counter.js ') ?>"></script>
    <script src="<?= base_url('assets/js_article/custom.js') ?>"></script>
</body>

</html>
