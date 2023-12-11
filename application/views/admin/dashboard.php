<?php
// Lakukan koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mindfulyouth";

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Jika ada data yang diubah dan dikirim dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan variabel yang diterima aman untuk diproses dalam query SQL
    $id = $_POST['id'];
    $username = $_POST['username'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $no_hp = $_POST['no_hp'];
    $specialist = $_POST['specialist'];
    $gelar = $_POST['gelar'];

    // Lakukan query update berdasarkan ID
    $sql = "UPDATE users SET username='$username', nama='$nama', email='$email', role='$role', no_hp='$no_hp', specialist='$specialist', gelar='$gelar' WHERE id_user=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil diperbarui";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Ambil semua data dari tabel users
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Tampilkan tabel untuk menampilkan data dan form untuk mengedit
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Username</th><th>Nama</th><th>Email</th><th>Role</th><th>No HP</th><th>Specialist</th><th>Gelar</th><th>Edit</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<form method='post'>";
        echo "<tr>";
        echo "<td><input type='hidden' name='id' value='". $row["id_user"] ."'>" . $row["id_user"] . "</td>";
        echo "<td><input type='text' name='username' value='". $row["username"] ."'></td>";
        echo "<td><input type='text' name='nama' value='". $row["nama"] ."'></td>";
        echo "<td><input type='text' name='email' value='". $row["email"] ."'></td>";
        echo "<td><input type='text' name='role' value='". $row["role"] ."'></td>";
        echo "<td><input type='text' name='no_hp' value='". $row["no_hp"] ."'></td>";
        echo "<td><input type='text' name='specialist' value='". $row["specialist"] ."'></td>";
        echo "<td><input type='text' name='gelar' value='". $row["gelar"] ."'></td>";
        echo "<td><input type='submit' value='Simpan'></td>";
        echo "</tr>";
        echo "</form>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>
