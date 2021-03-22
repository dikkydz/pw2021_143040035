<?php
/*
Dikky Dzikriansyah
143040035
https://github.com/dikkydz/pw2021_143040035
Pertemuan 7 - 18 Maret 2021
Mempelajari mengenai Get & Post juga mengenai SUPERGLOBALS & VARIABLE SCOPE
*/
?>



<!DOCTYPE html>
<html>
<head>
    <title>POST</title>
</head>
<body>
<!-- <?php if( isset($_POST["submit"]) ) : ?>
    <h1>Halo, Selamat Datang <?= $_POST["nama"]; ?></h1>
<?php endif; ?> -->
    <form action="latihan4.php" method="post">
        Masukkan nama:
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">KIRIM!</button>
    </form>

</body>
</html>