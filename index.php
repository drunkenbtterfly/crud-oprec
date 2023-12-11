<html>
<style>
.table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    border: 1px solid black;
    padding: 10px;
}

input[type="text"] {
    width: 200px;
}

input[type="submit"] {
    width: 100px;
}
</style>
<?php
include "koneksi.php";

// Ambil data dari database
$query = "SELECT `email`, `nama_lengkap`, `ttl`, `domisili`, `no_wa`, `status`, `asal`, `departemen`, `alasan` FROM `reqruitment` WHERE 1";
$data = mysqli_query($koneksi, $query);

// Buat form pencarian
echo "<form>";
echo "<form action='' method='GET'>";
echo "<input type='text' name='cari' placeholder='Cari Nama...'>";
echo "<input type='submit' value='Cari'>";
echo "</form>";

// Tampilkan data

if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $query = "SELECT * FROM reqruitment WHERE nama_lengkap LIKE '%$cari%'";
    $data = mysqli_query($koneksi, $query);
}

if (mysqli_num_rows($data) > 0) {
    // Tampilkan data dalam tabel
    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>No</th>";
    echo "<th>Email</th>";
    echo "<th>Nama</th>";
    echo "<th>Tempat, Tanggal Lahir</th>";
    echo "<th>Domisili (Sekarang/1 Tahun kedepan)</th>";
    echo "<th>No WhatsApp</th>";
    echo "<th>Status</th>";
    echo "<th>Asal Sekolah/Kampus/Perusahan Tempat Bekerja</th>";
    echo "<th>Departemen yang dipilih</th>";
    echo "<th>Alasan</th>";
    echo "</tr>";
    $i = 1;
    while ($row = mysqli_fetch_assoc($data)) {
        echo "<tr>";
        echo "<td>$i</td>";
        echo "<td>{$row['email']}</td>";
        echo "<td>{$row['nama_lengkap']}</td>";
        echo "<td>{$row['ttl']}</td>";
        echo "<td>{$row['domisili']}</td>";
        echo "<td>{$row['no_wa']}</td>";
        echo "<td>{$row['status']}</td>";
        echo "<td>{$row['asal']}</td>";
        echo "<td>{$row['departemen']}</td>";
        echo "<td>{$row['alasan']}</td>";
        echo "</tr>";
        $i++;
    }
    echo "</table>";
} else {
    echo "Data tidak ditemukan";
}

// Tutup koneksi
mysqli_close($koneksi);

?>
</html>