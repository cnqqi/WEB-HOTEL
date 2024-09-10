<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengajuan Pembatalan</title>
    <link rel="stylesheet" href="pembatalan496.css">
</head>
<body>
    <div class="login-container">
        <h1>PENGAJUAN PEMBATALAN</h1>
        <form action="#" method="post">
            <div class="form-field">
                <label for="no-reff">Nomor Reservasi</label>
                <input type="text" id="no-reff" name="no-reff-2213010496" required>
            </div>
            <div class="form-field">
                <label for="username">Masukan Nama</label>
                <input type="text" id="username" name="username-2213010496" required>
            </div>
            <div class="form-field">
                <label for="reason">Alasan Pembatalan</label>
                <textarea id="reason" name="reason-2213010496" required></textarea>
            </div>
            <button type="submit">Ajukan Pembatalan</button>
        </form>
        <?php if($_POST){
        ?>
        <?php }
        ?>  
    </div>
    <?php if($_POST){?>
<div class="login-container">
    <div class="form-field" id="hasil-reff">
        <h2>Berhasil diajukan</h2><br>
        <hr>
        <b>Nomor Reservasi</b> <?php echo $_POST['no-reff-2213010496'];?><br>
        <hr>
        <b>Nama</b> <?php echo $_POST['username-2213010496'];?><br>
        <hr>
        <b>Alasan</b> <?php echo $_POST['reason-2213010496'];?>
    </div>
</div><br>
    <?php }
?>
</body>
</html>