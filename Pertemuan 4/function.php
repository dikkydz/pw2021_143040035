<?php
/*
Dikky Dzikriansyah
143040035
https://github.com/dikkydz/pw2021_143040035
Pertemuan 4 - 25 Februari 2021
Mempelajari mengenai Function
*/
?>




<?php

function salam($waktu = "Datang",$nama = "Admin") {
    return "Selamat $waktu, $nama!";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Dikky"); ?></h1>
</body>
</html>