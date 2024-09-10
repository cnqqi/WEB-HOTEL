<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"  href="pendaftaran505.css">
    <title>Document</title>
</head>

<body>

<div class="tampilan">
<h1>Pendaftaran Akun</h1>

<form method="post" action="kelompok3.php?page=pendaftaran">
                <label for="nama505">Nama lengkap:</label><br>
                <input type="text" name="nama505" placeholder="masukkan nama anda"  required><br>
                <label for="email505">Alamat Email:</label><br>
                <input type="email" name="email505" placeholder="masukkan email anda"  required><br>
                <label for="sandi505">Kata sandi:</label><br>
                <input type="password" name="sandi505" placeholder="masukkan kata sandi" required><br>
                <input type="submit" value="Daftar">
            </form>
            </div>
<?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "<div class='result-output'>";
                echo "<p><b>Selamat Pendaftaran Akun Telah Berhasil</b></p>";
                echo "<p><b>Nama Lengkap : </b>" . $_POST["nama505"] . "</p>";
                echo "<p><b>Alamat Email : </b>" . $_POST["email505"] . "</p>";
                echo "</div>";
            }
        ?>

</body>
</html>