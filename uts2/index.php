<?php
$host = "localhost";
$port = "5432";
$dbname = "phpdatabase2";
$user = "postgres";
$password = "cerr2407";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Koneksi gagal: " . pg_last_error());  // die() menghentikan program dan menampilkan pesan error
}

$query = 'SELECT * FROM "TB_Infinix"'; // $conn = koneksi aktif ke PostgreSQL, $query = isi perintah SQL yang mau dijalankan

$result = pg_query($conn, $query); // pg_query() mengirim query ke server PostgreSQL
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabel Infinix</title>
</head>
<body>
    <h2>Daftar Smartphone dan Accessories</h2>
    <table border="1" cellpadding="8">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Spesifikasi</th>
        </tr>

        <?php
        while ($row = pg_fetch_assoc($result)) {  // pg fet mengambil 1 baris data dari hasil query dalam bentuk array
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['jenis'] . "</td>";
            echo "<td>" . $row['spesifikasi'] . "</td>";
            echo "</tr>";
        }
        ?>

    </table>
</body>
</html>

<?php
pg_close($conn); // Menutup koneksi
?>
