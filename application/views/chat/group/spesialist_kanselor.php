<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kanselor berdasarkan Spesialis</title>
    <!-- Tambahkan stylesheet atau link yang diperlukan di sini -->
    <style>
        /* Tambahkan CSS jika diperlukan */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .online {
            font-weight: bold;
            text-decoration: underline;
        }

        .btn {
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <h2>Daftar Kanselor berdasarkan Spesialis</h2>
    <?php foreach ($specialists as $specialist): ?>
        <h3>Spesialis <?= $specialist->spesialist ?></h3>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Status</th>
                    <th>Nomor Telepon</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $index = 0; ?>
                <?php foreach ($psikiater_by_specialist[$specialist->spesialist] as $contact): ?>
                    <tr>
                        <td><?= ++$index ?></td>
                        <td><?= $contact->username ?></td>
                        <td><?= ($contact->is_logged_in == 1) ? '<span class="online">Online</span>' : 'Offline' ?></td>
                        <td><?= $contact->no_hp ?></td>
                        <td>
                            <?php if (!empty($contact->no_hp)) : ?>
                                <!-- Check if the user has a phone number -->
                                <a href="https://api.whatsapp.com/send?phone=<?= $contact->no_hp ?>" target="_blank" class="btn btn-success btn-sm">Chat via WhatsApp</a>
                            <?php else : ?>
                                <!-- Provide a message if the phone number is not available -->
                                <span>No phone number available</span>
                            <?php endif; ?>
                            <?= anchor('chat/redirect/' . $this->session->userdata('user_id') . '/' . $contact->id, 'Chat', ['class' => 'btn btn-primary btn-sm']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endforeach; ?>
    <!-- Tambahkan link script jika diperlukan -->
</body>
</html>
