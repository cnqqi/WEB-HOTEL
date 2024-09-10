<DOCTYPE html>
<html lang="en">
    <head>
        <meta charshet="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Ulasan Pelanggan</title>
        <link rel="stylesheet" type="text/css" href="ulasan484.css">
    </head>
    <body>
        <h2><center>Form Ulasan Pelanggan</center></h2>

        <form method="post" action="">
        <label for="judul_ulasan_484">Judul Ulasan:</label>
        <input type="text_484" name="judul_ulasan_484" required><br>
        <label for="isi_ulasan_484">Isi Ulasan:</label>
        <textarea name="isi_ulasan_484" rows="4" required></textarea><br>
        <label for="pangkat_bintang_484">Pangkat Bintang:</label>
        <select name="pangkat_bintang_484" required>
            <option value="1">1 Bintang</option>
            <option value="2">2 Bintang</option>
            <option value="3">3 Bintang</option>
            <option value="4">4 Bintang</option>
            <option value="5">5 Bintang</option>
        </select><br>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $judulUlasan = $_POST["judul_ulasan_484"];
            $isiUlasan = $_POST["isi_ulasan_484"];
            $pangkatBintang = $_POST["pangkat_bintang_484"];

            echo "<h3>Ulasan Anda:</h3>";
            echo "<p><strong>Judul:</strong> $judulUlasan</p>";
            echo "<p><strong>Isi:</strong> $isiUlasan</p>";
            echo "<p><strong>Pangkat Bintang:</strong> $pangkatBintang</p>";
        }
        ?>

        <input type="submit" value="Kirim Ulasan">
        </form>
    </body>
</html

