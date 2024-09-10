<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservasi Hotel</title>
    <link rel="stylesheet" href="reservasi502.css">
</head>
<body>
<div class="container-2213010502">
    <h2>Formulir Reservasi Hotel</h2>
    <!-- method post -->
    <form method="post" action="kelompok3.php?page=reservasi">
        <!-- Label Nama -->
        <div class="form-group-2213010502">
            <label class="label-2213010502" for="nama">Nama:</label>
            <input class="input-2213010502" type="text" name="nama502" required>
        </div>
        <!-- Nomor HP -->
        <div class="form-group-2213010502">
            <label class="label-2213010502" for="nomor_hp">Nomor HP:</label>
            <input class="input-2213010502" type="text" name="nomorhp502" required>
        </div>
         <!-- Label Alamat -->
         <div class="form-group-2213010502">
            <label class="label-2213010502" for="alamat">Alamat:</label>
            <input class="input-2213010502" type="text" name="alamat502" required>
        </div>
        <!-- Label Jumlah Tamu -->
        <div class="form-group-2213010502">
            <label class="label-2213010502" for="jumlah_tamu">Jumlah Tamu:</label>
            <input class="input-2213010502" type="number" name="jumlahtamu502" required>
        </div>

        <div class="form-group-2213010502">
                <label class="label-2213010502" for="type_kamar">Type Kamar:</label>
                <input class="input-2213010502" type="text" name="typekamar502">
            </div>

            <div class="form-group-2213010502">
                <label class="label-2213010502" for="harga_kamar">Harga Kamar:</label>
                <input class="input-2213010502" type="number" name="hargakamar502" required>
            </div>

            <div class="form-group-2213010502">
                <label class="label-2213010502" for="layanan_tambahan">Layanan Tambahan:</label>
                <input class="input-2213010502" type="text" name="layanantambahan502">
            </div>

            <div class="form-group-2213010502">
                <label class="label-2213010502" for="check_in">Tanggal Check In:</label>
                <input class="input-2213010502" type="date" name="checkin502" required>
            </div>

            <div class="form-group-2213010502">
                <label class="label-2213010502" for="check_out">Tanggal Check Out:</label>
                <input class="input-2213010502" type="date" name="checkout502" required>
            </div>

            <div class="form-group-2213010502">
                <button class="button-2213010502" type="submit">Submit</button>
            </div>
        </form>
    </div>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //nilai dari form
    $nama = $_POST["nama502"];
    $nomor_hp = $_POST["nomorhp502"];
    $alamat = $_POST["alamat502"];
    $jumlah_tamu = $_POST["jumlahtamu502"];
    $tipe_kamar = $_POST["typekamar502"];
    $harga_kamar = $_POST["hargakamar502"];
    $layanan_tambahan = $_POST["layanantambahan502"];
    $check_in = $_POST["checkin502"];
    $check_out = $_POST["checkout502"];

    // Tampilan hasil reservasi
    echo "<div class='container-2213010502'>";
    echo "<h2>Reservasi Berhasil</h2>";
    echo "<p>Nama: $nama</p>";
    echo "<p>Nomor HP: $nomor_hp</p>";
    echo "<p>Alamat: $alamat</p>";
    echo "<p>Jumlah Tamu: $jumlah_tamu</p>";
    echo "<p>Tipe Kamar: $tipe_kamar</p>";
    echo "<p>Harga Kamar: $harga_kamar</p>";
    echo "<p>Layanan Tambahan: $layanan_tambahan</p>";
    echo "<p>Tanggal Check In: $check_in</p>";
    echo "<p>Tanggal Check Out: $check_out</p>";
    echo "</div>";
} 
    // Jika halaman pertama kali dimuat atau form belum disubmit
    ?>
    

</body>
</html>
