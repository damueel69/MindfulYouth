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
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        h1 {
            text-align: center;
            color: #fff; /* Mengubah warna teks menjadi putih */
            margin-bottom: 20px;
        }
        p {
            color: #fff; /* Mengubah warna teks menjadi putih */
        }
        
        h1 span {
            color: #ffd700; /* Warna teks tambahan (span) */
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

        .box-image {
        max-width: 100%; 
        height: auto; 
        margin-bottom: 15px; 
        }
        
        .white-button {
            background-color: #9EC8B9; /* Warna latar tombol */
            color: #092635; /* Warna teks tombol */
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            text-decoration: none; /* Menghapus garis bawah default */
        }
        .white-button:hover {
            background-color: #AADBCF; /* Warna latar saat hover */
        }
    }
    </style>
</head>

<body>
  <br><br>
        <section class="slider_section "
        style="background-color: #1B4242">
            <div class="detail-box" style="background-color: #5C8374">
                <img src="<?= base_url('assets/images/') ?>mental.jpg" class="box-image" >
                <h1>MiFuyo<span> Artikel</span></h1>
                <p >Mifuyu dalam MindfulYouth adalah sumber daya utama yang menawarkan artikel-artikel terpercaya dan terkini mengenai kesehatan mental, teknik pengelolaan stres, dan perjalanan pribadi menuju keseimbangan emosional. Setiap artikel ditulis oleh ahli dalam bidangnya untuk memberikan pemahaman yang mendalam kepada pengguna.</p>
                <button class="white-button"><?php echo anchor('artikel', 'Mifuyu Artikel', array('style' => 'color: #092635'));?></button>            </div>
        </section>
        <section class="slider_section "
        style="background-color: #1B4242">>>
            <div class="detail-box"
            style="background-color: #5C8374">
                <img src="<?= base_url('assets/images/') ?>sehat.jpg" class="box-image" >
                <h1>Journal<span> Kesehatan</span></h1>
                <p>Journal Kesehatan adalah fitur personal yang memungkinkan pengguna untuk mencatat perasaan, pikiran, dan perubahan dalam kesehatan mental mereka dari waktu ke waktu. Dengan ini, pengguna dapat melacak pola-pola, mengidentifikasi faktor-faktor pemicu, serta memonitor perubahan suasana hati dan tingkat stres mereka.</p>
                <button class="white-button"><?php echo anchor('magazine', 'Journal Kesehatan', array('style' => 'color: #092635'));?></button>
            </div>
        </section>
        <section class="slider_section "
        style="background-color: #1B4242">>
            <div class="detail-box" style="background-color: #5C8374">
                <img src="<?= base_url('assets/images/') ?>cek.jpg" class="box-image" >
                <h1>3Stella<span> Direct Message</span></h1>
                <p>Fitur ini menghadirkan tiga fitur utama: Chat Group, Chat Konselor, dan Chat Psikiater. Pengguna dapat bergabung dalam komunitas, berbicara langsung dengan konselor, atau menjadwalkan konsultasi dengan psikiater untuk mendapatkan bantuan yang dibutuhkan sesuai dengan kebutuhan mereka.</p>
                <button class="white-button"><?php echo anchor('Chat/group', '3D Stella DM' , array('style' => 'color: #092635'));?></button>
            </div>
        </section>
    </div>
</body>

<!-- chat_users_view.php -->
<!-- View File (dashboard_contacts.php) -->

<h2>Daftar Kontak Psikiater</h2>
<br>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Spesialis</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 0;
        foreach ($record->result() as $r) {
            if ($r->division == 'Psikiater') {
                $no++;
                echo "<tr>
                    <td>$no</td>
                    <td>$r->username</td>
                    <td>$r->spesialist</td>
                    <td>".anchor('chat/redirect/'.$this->session->userdata('user_id').'/'.$r->id, 'Chat', ['class' => 'btn btn-primary btn-sm'])."</td>
                </tr>";
            }
        }
        ?>
    </tbody>
</table>

<h2>Daftar Kontak Kanselor</h2>
<br>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Username</th>
            <th>Spesialis</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $no = 0;
        foreach ($record->result() as $r) {
            if ($r->division == 'Kanselor') {
                $no++;
                echo "<tr>
                    <td>$no</td>
                    <td>$r->username</td>
                    <td>$r->spesialist</td>
                    <td>".anchor('chat/redirect/'.$this->session->userdata('user_id').'/'.$r->id, 'Chat', ['class' => 'btn btn-primary btn-sm'])."</td>
                </tr>";
            }
        }
        ?>
    </tbody>
</table>

<script src="<?php echo base_url(); ?>js/dashboard.js" type="text/javascript"></script>
