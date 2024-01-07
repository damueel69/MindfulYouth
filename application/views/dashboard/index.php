<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MiFuYo</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/assets/') ?>css/bootstrap.css" />

    <!-- Fonts style -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?= base_url('assets/assets/') ?>css/style.css" rel="stylesheet" />

    <style>
        /* Your custom styles */
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f8f9fa;
            color: #495057;
        }

        .slider_section {
            display: flex;
            align-items: center;
            justify-content: center;
            height: auto;
            padding: 50px 0;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .dot_design img {
            width: 100%;
        }

        .detail-box {
            max-width: 100%;
            box-sizing: border-box;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            text-align: center;
        }

        .detail-box h1 {
            font-size: 24px;
            margin-bottom: 15px;
        }

        .detail-box p {
            font-size: 16px;
            line-height: 1.5;
        }

        .white-button {
        background-color: #ffffff;
        color: #000000; 
        padding: 10px 20px; 
        border: 1px solid #000000; 
        text-decoration: none; 
        display: inline-block;
        font-size: 16px; 
        cursor: pointer;
        }
    }
    </style>
</head>

<body>
        <section class="slider_section ">
            <div class="detail-box">
                <h1>MiFuyo<span> Artikel</span></h1>
                <p>Mifuyu dalam MindfulYouth adalah sumber daya utama yang menawarkan artikel-artikel terpercaya dan terkini mengenai kesehatan mental, teknik pengelolaan stres, dan perjalanan pribadi menuju keseimbangan emosional. Setiap artikel ditulis oleh ahli dalam bidangnya untuk memberikan pemahaman yang mendalam kepada pengguna.</p>
                <button class="white-button"><?php echo anchor('artikel', 'Mifuyu Artikel');?></button>
            </div>
        </section>
        <section class="slider_section ">
            <div class="detail-box">
                <h1>Journal<span> Kesehatan</span></h1>
                <p>Journal Kesehatan adalah fitur personal yang memungkinkan pengguna untuk mencatat perasaan, pikiran, dan perubahan dalam kesehatan mental mereka dari waktu ke waktu. Dengan ini, pengguna dapat melacak pola-pola, mengidentifikasi faktor-faktor pemicu, serta memonitor perubahan suasana hati dan tingkat stres mereka.</p>
                <button class="white-button"><?php echo anchor('magazine', 'Journal Kesehatan');?></button>
            </div>
        </section>
        <section class="slider_section ">
            <div class="detail-box">
                <h1>3Stella<span> Direct Message</span></h1>
                <p>Fitur ini menghadirkan tiga fitur utama: Chat Group, Chat Konselor, dan Chat Psikiater. Pengguna dapat bergabung dalam komunitas, berbicara langsung dengan konselor, atau menjadwalkan konsultasi dengan psikiater untuk mendapatkan bantuan yang dibutuhkan sesuai dengan kebutuhan mereka.</p>
                <button class="white-button"><?php echo anchor('Chat/group', '3D Stella DM');?></button>
            </div>
        </section>
    </div>
</body>

</html>
