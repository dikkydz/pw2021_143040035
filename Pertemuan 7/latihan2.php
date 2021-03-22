<?php
/*
Dikky Dzikriansyah
143040035
https://github.com/dikkydz/pw2021_143040035
Pertemuan 7 - 18 Maret 2021
Mempelajari mengenai Get & Post juga mengenai SUPERGLOBALS & VARIABLE SCOPE
*/
?>


<?php

// cek apakah tidak ada data di $_GET
if ( !isset($_GET["nama"])    || 
     !isset($_GET["nrp"])     ||
     !isset($_GET["email"])   || 
     !isset($_GET["jurusan"]) || 
     !isset($_GET["gambar"])) {
    // redirect
    header("Location: latihan1.php");
    exit;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nrp"]; ?></li>
        <li><?= $_GET["email"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
    </ul>

<a href="latihan1.php">Kembali ke daftar mahasiswa </a>

</body>
</html>