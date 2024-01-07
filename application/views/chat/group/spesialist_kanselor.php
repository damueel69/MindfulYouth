<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kanselor berdasarkan Spesialis</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            min-height: 100vh; /* Ensure the body takes at least the full height of the viewport */
            margin-bottom: 50px;
        }
        h2 {
            color: #333;
            margin-bottom: 20px;
        }
        h3 {
            color: #000;
            margin-top: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        .online {
            font-weight: bold;
            text-decoration: underline;
            color: #28a745;
        }
        .btn {
            margin-top: 10px;
            text-decoration: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
            color: #fff;
            border: 1px solid transparent;
            display: inline-block; /* Prevents the button from taking the full width */
        }
        .btn-success {
            background-color: #28a745;
            border: 1px solid #28a745;
        }
        .btn-info {
            background-color: #17a2b8;
            border: 1px solid #17a2b8;
        }
        .no-hp {
            color: #dc3545;
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
                                <a href="https://api.whatsapp.com/send?phone=<?= $contact->no_hp ?>" target="_blank" class="btn btn-success">Chat via WhatsApp</a>
                            <?php else : ?>
                                <!-- Provide a message if the phone number is not available -->
                                <span>No phone number available</span>
                            <?php endif; ?>
                            <?= anchor('chat/redirect/' . $this->session->userdata('user_id') . '/' . $contact->id, 'Chat', ['class' => 'btn btn-info']) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endforeach; ?>
    <a href="<?= base_url('index.php/chat/group') ?>" class="btn btn-info">Kembali</a>
</body>
</html>
